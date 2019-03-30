<!DOCTYPE HTML>
  <html lang = "ja">
    <head>
      @yield ('head')
    </head>

    <body style="background: rgb(31,38,54);
                 background-image: linear-gradient(66deg, rgba(70,80,80,1) 0%, rgba(40,40,50,1) 100%);
                 background-repeat: no-repeat;
                 background-size:cover;">
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
