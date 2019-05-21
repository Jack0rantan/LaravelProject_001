<!-- template -->
@extends ('layout.top.common')

<!-- SEO -->
@section ('title', 'DawnDesert')
@section ('keywords','Web開発,Larabel,larabel,MySQL,副業,10万円,収益')
@section ('descriotion','三ヶ月のWeb開発で月10万円収益Upの実績をもとに技術内容をシェアします。')

<!-- head -->
@include ('layout.adsense')
@include ('layout.google')
@include ('layout.font')
@include ('layout.head')

<!-- header -->
<!-- nav_var -->
@include ('layout.header')

<!-- body -->
@include ('layout.top.main')
@include ('layout.side')


<!-- footer -->
@include ('layout.footer')
