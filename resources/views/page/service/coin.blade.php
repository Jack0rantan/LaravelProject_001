<!-- template -->
@extends ('layout.common')

<!-- SEO -->
@section ('title', 'yourCoin for TwiCas')
@section ('keywords','twicas, continue_coin, search')
@section ('descriotion','twicasのコンティニューコインを調べるサイトです')

<!-- head -->
@include ('layout.google')
@include ('layout.font')
@include ('layout.head')

<!-- header -->
<!-- nav_var -->
@include ('layout.header')

<!-- body -->
@include ('layout.main', ['allcoin' => $allcoin, 'detail' => $detail, 'account'=> $account ])

<!-- footer -->
@include ('layout.footer')
