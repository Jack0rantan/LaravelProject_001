<!-- template -->
@extends ('layout.common')

<!-- SEO -->
@section ('title', 'Programing page')
@section ('keywords','Laravel')
@section ('descriotion','カテゴリーページです')

<!-- head -->
@include ('layout.google')
@include ('layout.adsense')
@include ('layout.font')
@include ('layout.head')

<!-- header -->
<!-- nav_var -->
@include ('layout.header')

<!-- body -->

  <!-- main -->
  @include ('layout.programing.main')

  <!-- side -->
  @include ('layout.side')

<!-- footer -->
@include ('layout.footer')
