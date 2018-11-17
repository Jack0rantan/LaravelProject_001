<!DOCTYPE HTML>
  <html lang = "ja">
    <head>
      @yield ('head')
    </head>

    <body>
      @yield ('header')

      <div class = "contents">
        <div class = "sub">
          @yield ('sub')
        </div>
        <div class = "main">
          @yield ('main')
        </div>
        <div class = "footer">
          @yield ('footer')
        </div>
      </div>

    </body>
  </html>
