<!-- template -->
@extends ('layout.common')

<!-- SEO -->
@section ('title', '【厳選５選！】おすすめ英語動画サイト')
@section ('keywords','英語勉強法,TED,CNN,独学,英語学習,英会話')
@section ('descriotion','英語学習に最適な動画サイトを紹介します。')

<!-- head -->
@include ('layout.adsense')
@include ('layout.google')
@include ('layout.font')
@include ('layout.head')

<!-- header -->
<!-- nav_var -->
@include ('layout.header')

<!-- body -->

  <!-- main -->
  @include ('layout.english.english-movie-site')

  <!-- side -->
  @include ('layout.side')

<!-- footer -->
@include ('layout.footer')
