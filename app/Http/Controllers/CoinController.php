<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;

class CoinController extends Controller
{
    //
    public function index()
    {
        // Initialize
        $id = 1;
        $page = 0;
        $allcoin = 0;
        $countCoin = 0;
        $detail = array();
        $nextPage = array();
        $array= array();

        // getAllCoinは配列なのでストリングにする為に値が存在する要素で変数を作成する
        foreach($this->getAllCoin('hyo_tam') as $coin){
            if(isset($coin)){
                $allcoin = $coin;
            }
        }

        // get Info per 1page
        if($allcoin){
          while ($countCoin < $allcoin){
            $array = $this->getCoinDetail('hyo_tam', $page, $id);
            $nextPage = $array['data'];
            $detail = array_merge($detail, $nextPage);

            // count
            $page++;
            $countCoin += $array['cC'];
            $id = $array['No'];
          }
        }else{
          $allcoin = false;
          $detail = array();
        }
          return view('page.service.coin', compact('allcoin','detail'));
    }

    public function test()
    {
      foreach($this->getAllCoin('hyo_tam') as $coin) if(isset($coin)) $ans = $coin;
      echo $ans;
    }

    public function getCoinDetail($account, $page, $id)
    {
        // Create a Goutte Object.
        $client = new Client();

        // Initialize
        $i = 0;
        $cC = 0;
        $data = array();
        $result = array();

          // Get Data Source
          $crawler = $client->request('get',"https://twitcasting.tv/".$account."/gifts/".$page);

          // 'coin' search
          $td = $crawler->filter('table tr');
          $td->each(function ($node) use (&$i,&$data,&$cC,&$id){
                // coin の場合  & coinbaku の場合
                $conCoin = preg_match("/coin/", $node->filter('td.item')->filter('a')->attr('href'));
                $conBaku = preg_match("/baku/", $node->filter('td.item')->filter('a')->attr('href'));
                if($conCoin) {
                  $data[$i]['id']     = $i + $id ;
                  $data[$i]["xprDay"]   = $node->filter('td.item')->filter('div')->text();
                  $data[$i]["coinUser"] = $node->filter('.user')->text();
                  $data[$i]["fullname"] = $node->filter('.fullname')->text();
                    if(preg_match("/Expired/i",$data[$i]["xprDay"])){
                      $data[$i]["coin"] = 0;
                    }elseif(!$conBaku){
                      $data[$i]["coin"] = 1;
                      $cC += $data[$i]["coin"];
                    }else{
                      $data[$i]["coin"] = 5;
                      $cC += $data[$i]["coin"];
                    }
                  $i++;
                }
          });
          // for next ID
          $No = $i + $id ;

        return compact('data','cC','No');
    }

    public function getAllCoin($account)
    {
        $coin = 0;
        $client = new Client();
        $crawler = $client->request('get','https://twitcasting.tv/'.$account);

        // from item box...
        // if you can, the method from itemtable is better.
        $coin = $crawler->filter('div#tw-item-box')->filter('li')->each(
                          function($node){
                                if(preg_match("/coin/",$node->filter('a')->attr('href'))){
                                    return $node->filter('span')->html().PHP_EOL;
                                }
                          });
        return $coin;
    }

    function array_last(array $array){
      return end($array);
    }

}
