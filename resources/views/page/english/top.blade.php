<!-- template -->
@extends ('layout.common')

<!-- SEO -->
@section ('title', '英語学習')
@section ('keywords','英語,独学,独学,TOEIC')
@section ('descriotion','英語学習者')

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
  @include ('layout.english.main')

  <!-- side -->
  @include ('layout.side')

<!-- footer -->
@include ('layout.footer')
