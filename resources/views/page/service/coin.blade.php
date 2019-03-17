<!-- template -->
@extends ('layout.common')

<!-- SEO -->
@section ('title', 'CoinSearch')
@section ('keywords','twicas, continue_coin, search')
@section ('descriotion','twicasのコンティニューコインを調べるサイトです')

<!-- head -->
@include ('layout.google')
@include ('layout.font')
@include ('layout.head')

<!-- header -->
<!-- nav_var -->
@include ('layout.header')

<!-- body -->
<div class = "row" id = "content">
 @include ('layout.main', ['allcoin' => $allcoin, 'detail' => $detail ])
</div>

@include ('layout.footer')
