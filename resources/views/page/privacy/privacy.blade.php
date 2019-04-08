<!-- template -->
@extends ('layout.privacy.common')

<!-- SEO -->
@section ('title', 'プライバシーポリシー')
@section ('keywords','privacy policy, プライバシーポリシー')
@section ('descriotion','このサイトDawnDesertにおけるプライバシーポリシーについて記載します。')

<!-- head -->
@include ('layout.google')
@include ('layout.font')
@include ('layout.head')

<!-- header -->
<!-- nav_var -->
@include ('layout.header')

<!-- body -->

  <!-- main -->
  @include ('layout.privacy.main')

<!-- footer -->
@include ('layout.footer')
