<!-- template -->
@extends ('layout.common')

<!-- SEO -->
@section ('title', '【独学】TEDで英語学習！#002')
@section ('keywords','英語勉強法,TED,独学,英語学習')
@section ('descriotion','#001 に続き、Googleに関連する動画を見つけたのでこちらを紹介したいと思います。')

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
  @include ('layout.english.TED-002')

  <!-- side -->
  @include ('layout.side')

<!-- footer -->
@include ('layout.footer')
