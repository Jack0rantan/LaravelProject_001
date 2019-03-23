<!DOCTYPE HTML>
  <html lang = "ja">
    <head>
      @yield ('head')
    </head>

    <body>
      @yield ('header')
    <div class = "container-fluid">

      <div class = "contents">
        <div class = "main">
          @yield ('main')
        </div>
      </div>

    </div>
    </body>
  </html>
