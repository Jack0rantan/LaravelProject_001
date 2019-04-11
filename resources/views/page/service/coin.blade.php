<!-- template -->
@extends ('layout.common')

<!-- SEO -->
@section ('title', '【コインの期限を確認！】your Coin【TwiCas】')
@section ('keywords','TwiCas, コイン, 期限, 確認, アイテム')
@section ('descriotion','TwiCasのコインの消費期限を調べます！')

<!-- head -->
@include ('layout.adsense')
@include ('layout.google')
@include ('layout.font')
@include ('layout.head')

<!-- header -->
<!-- nav_var -->
@include ('layout.header')

<!-- body -->
@include ('layout.main', ['allcoin' => $allcoin, 'detail' => $detail, 'account'=> $account ])
@include ('layout.side')

<!-- footer -->
@include ('layout.footer')
