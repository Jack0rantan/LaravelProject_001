<!DOCTYPE HTML>
  <html lang = "ja">
    <head>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-5531776326914830",
    enable_page_level_ads: true
  });
</script>

      @yield ('head')
    </head>

    <body>

    <!-- header -->
      @yield ('header')

    <!-- body -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 col-12">

          <!-- main -->
          @yield ('main')

        <div class="margin004 col1-12 row"></div>
        </div>
        <div class="col-lg-4 col-12">

          <!-- side -->
          @yield ('side')

        <div class="margin004 col1-12 row"></div>
        </div>
      </div>
    </div>
  
    <!-- footer -->
      @yield ('footer')
    </body>
  </html>
