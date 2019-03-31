<!-- template -->
@extends ('layout.common')

<!-- SEO -->
@section ('title', 'Blog Top page')
@section ('keywords','Blog, PHP, Laravel')
@section ('descriotion','DawnDesertのBlogです')

<!-- head -->
@include ('layout.google')
@include ('layout.font')
@include ('layout.head')

<!-- header -->
<!-- nav_var -->
@include ('layout.header')

<!-- body -->

  <!-- main -->
  @include ('layout.blog.main')

  <!-- side -->
  @include ('layout.side')

<!-- footer -->
@include ('layout.footer')
