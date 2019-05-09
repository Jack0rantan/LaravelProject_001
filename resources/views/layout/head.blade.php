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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- include bootstrap & jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--********************************************************************************************************************************-->
  <!-- JavaScript -->
  <script src="{{ asset('/js/main.min.js') }}"></script>
<!--********************************************************************************************************************************-->
  <!-- css読み込み -->
  <link rel="stylesheet" href="{{ asset('/css/style.css') }}" type="text/css">
<!--********************************************************************************************************************************-->
  <!-- font -->
  @yield ('font')


<!--**************************************-->
  <!-- Awesome font -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <!-- Google/code-prettify -->
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js?skin=sunburst"></script>


<!--**************************************-->
  <!-- Search Console -->
  <meta name="google-site-verification" content="15XkPyjO6mBdC0XSNmjJMbFNTPls7RDjHLfiTibvS9Y" />
@endsection
