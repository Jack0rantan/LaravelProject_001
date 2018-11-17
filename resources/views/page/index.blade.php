@extends ('layout.common')

@section ('title', 'CoinSearch')
@section ('keywords','twicas, continue_coin, search')
@section ('descriotion','twicasのコンティニューコインを調べるサイトです')


@include ('layout.head')
@include ('layout.header')

<div class = "row" id = "content">
 @include ('layout.sub')
 @include ('layout.main', ['allcoin' => $allcoin, 'detail' => $detail ])

  @php
  exec('bin/phantomjs hello.js');
  @endphp


</div>

@include ('layout.footer')
