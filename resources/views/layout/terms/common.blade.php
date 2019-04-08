<!DOCTYPE HTML>
  <html lang = "ja">
    <head>
      @yield ('head')
    </head>

    <body>
      @yield ('header')

    <!-- body -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-9">
          <!-- main -->
          @yield ('main')

        </div>
        <div class="col-sm-3">
        </div>
      </div>
    </div>
    <!-- footer -->
      @yield ('footer')

    </body>
