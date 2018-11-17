@section ('head')
  <meta charset = "UTF-8">
  <title>@yield('title')</title>

  <!-- for chrowle -->
  <meta name = "description" itemprop = "descriotion" content = "@yield('description')">
  <meta name = "keywords" itemprop = "keywords" content = "@yield('keywords')">

  <!-- for Bootstrap -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="/css/sticky-footer.css" rel="stylesheet" media="screen">

  <!-- if necessary 
  <link href = "/css/layout.css" rel = "stylesheet">
  @yield ('pageCss') -->

@endsection
