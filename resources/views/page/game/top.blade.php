<!-- template -->
@extends ('layout.common')

<!-- SEO -->
@section ('title', 'yourCoin for TwiCas')
@section ('keywords','twicas, continue_coin, アイテム, コイン, 枚数')
@section ('descriotion','Twicasのコンティニューコインを調べるサイトです')

<!-- head -->
@include ('layout.google')
@include ('layout.font')
@include ('layout.head')

<!-- header -->
<!-- nav_var -->
@include ('layout.header')

<!-- body -->
<div class = "row" id = "content">
  @include ('layout.main',['allcoin'=> 0, 'detail' => [0,0,0,0], 'account'=> ''])
</div>
  @include ('layout.side')

<!-- footer -->
@include ('layout.footer')
