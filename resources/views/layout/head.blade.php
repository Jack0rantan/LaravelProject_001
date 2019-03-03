@section ('head')

  <!-- Google Analytics -->
  @yield ('google')

  <!--  -->
  <meta charset = "UTF-8">
  <title>@yield('title')</title>

  <!-- for chrowle -->
  <meta name = "description" itemprop = "descriotion" content = "@yield('description')">
  <meta name = "keywords" itemprop = "keywords" content = "@yield('keywords')">

  <!-- for Bootstrap & jQuery -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" media="screen">

<!--********************************************************************************************************************************-->
  <!-- JavaScript -->
<script src="{{ asset('/js/main.min.js') }}"></script>
<!--********************************************************************************************************************************-->
  <!-- css読み込み -->
<link rel="stylesheet" href="{{ asset('/css/main.css') }}" type="text/css">
<!--********************************************************************************************************************************-->
  <!-- font -->
  @yield ('font')
@endsection
