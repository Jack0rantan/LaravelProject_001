<!DOCTYPE HTML>
  <html lang = "ja">
    <head>
      @yield ('head')
    </head>

    <body>

    <!-- header -->
      @yield ('header')

    <!-- body -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-9">

          <!-- main -->
          @yield ('main')

        </div>
        <div class="col-lg-3">

          <!-- side -->
          @yield ('side')

        </div>
      </div>
    </div>

    <!-- footer -->
      @yield ('footer')
    </body>
  </html>
