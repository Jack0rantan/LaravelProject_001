<!-- template -->
@extends ('layout.common')

<!-- SEO -->
@section ('title', '【TED紹介！】Making Maps to fight disaster, build economics')
@section ('keywords','英語勉強法,TED,独学,英語学習')
@section ('descriotion','Googleのミャンマーにおける功績が紹介されていましたのでこちらを紹介します。')

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
  @include ('layout.english.TED-001')

  <!-- side -->
  @include ('layout.side')

<!-- footer -->
@include ('layout.footer')
