<!-- template -->
@extends ('layout.terms.common')

<!-- SEO -->
@section ('title', '利用規約')
@section ('keywords','利用規約, terms')
@section ('descriotion','このサイトDawnDesertにおける利用規約について記載します。')

<!-- head -->
@include ('layout.google')
@include ('layout.font')
@include ('layout.head')

<!-- header -->
<!-- nav_var -->
@include ('layout.header')

<!-- body -->

  <!-- main -->
  @include ('layout.terms.main')

<!-- footer -->
@include ('layout.footer')
