<!-- template -->
@extends ('layout.about.common')

<!-- SEO -->
@section ('title', 'このサイトについて')
@section ('keywords','about, このサイトについて')
@section ('descriotion','このサイトDawnDesertにおける管理人のポリシー、利用にあたっての注意点について記載します。')

<!-- head -->
@include ('layout.google')
@include ('layout.font')
@include ('layout.head')

<!-- header -->
<!-- nav_var -->
@include ('layout.header')

<!-- body -->

  <!-- main -->
  @include ('layout.about.main')

<!-- footer -->
@include ('layout.footer')
