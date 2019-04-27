<!-- template -->
@extends ('layout.common')

<!-- SEO -->
@section ('title', 'TOEIC英単語を網羅する！')
@section ('keywords','TOEIC,英単語,800,730,990')
@section ('descriotion','TOIECにおける英単語を730,800,990レベル別に、且つ網羅的に問題形式で学べるサービスを提供します！')

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
  @include ('layout.english.e-1')

  <!-- side -->
  @include ('layout.side')

<!-- footer -->
@include ('layout.footer')
