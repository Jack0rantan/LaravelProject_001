<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;

class CoinController extends Controller
{
    //
    public function index(Request $request,$name='')
    {
        // Initialize
        $id = 1;
        $page = 0;
        $allcoin = 0;
        $countCoin = 0;
        $detail = array();
        $nextPage = array();
        $array= array();

        if(!$name){
          $account = $request->tw_name;
        }else{
          $account = $name;
        }

        // getAllCoinは配列なのでストリングにする為に値が存在する要素で変数を作成する
        foreach($this->getAllCoin($account) as $coin){
            if(isset($coin)){
                $allcoin = $coin;
            }
        }

        // get Info per 1page
        if($allcoin){
          while ($countCoin < $allcoin){
            $array = $this->getCoinDetail($account, $page, $id);
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
          return view('page.service.coin', compact('allcoin','detail','account'));
    }

    public function test()
    {
      $account = 'hyo_tam';
      foreach($this->getAllCoin($account) as $coin) if(isset($coin)) $ans = $coin;
      echo $ans;
    }

    public function test1()
    {
        $client = new Client();

        $crawler = $client->request('get',"https://twitcasting.tv/hyo_tam/gifts/0");

        $td = $crawler->filter('table tr');
        $td->each(function ($node) {
              echo $node->filter('time')->text();
        });

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

        $xprStr  = '';
        $delStr1 = 'Expire Date';
        $delStr2 = 'Left';

          // Get Data Source
          $crawler = $client->request('get',"https://twitcasting.tv/".$account."/gifts/".$page);

          // 'coin' search
          $td = $crawler->filter('table tr');
          $td->each(function ($node) use (&$i,&$data,&$cC,&$id){
                // coin の場合  & coinbaku の場合
                $conCoin = preg_match("/coin/", $node->filter('td.tw-gift-table-item')->filter('a')->attr('href'));
                $conBaku = preg_match("/baku/", $node->filter('td.tw-gift-table-item')->filter('a')->attr('href'));
                if($conCoin) {
                  $data[$i]['id']     = $i + $id ;
                    $xprStr   = str_replace('Expire Date','',$node->filter('td.tw-gift-table-item')->filter('div')->text());
                  $data[$i]["xprDay"]   = str_replace('left','',$xprStr);
                  $data[$i]["coinUser"] = $node->filter('.tw-user-name-name')->text();
                  $data[$i]["fullname"] = $node->filter('.tw-user-name-screen-name')->text();
                    if(preg_match("/Expired/i",$data[$i]["xprDay"])){
                      $data[$i]["coin"] = 0;
                    }elseif(!$conBaku){
                      $data[$i]["coin"] = 1;
                      $cC += $data[$i]["coin"];
                    }else{
                      $data[$i]["coin"] = 5;
                      $cC += $data[$i]["coin"];
                    }
                  // timestamp
                    $timestamp = $node ->filter('time')->text();
                  $data[$i]["timestamp"] = str_replace('2019/','',$timestamp);
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
}
