@section ('main')
  <div class="container-fluid">
    <div id="relative z1">
      <!-- main -->
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
<!-- ここから -->


          <!-- margin -->
          <div class="row">
            <div class="col-sm-12">
              <div class="margin002"></div>
            </div>
           </div>

          <!-- Title -->
          <div class="row">
            <div class="col-12">
               <h1 style="font-size:5vmin;" class="font-Sawarabi">Middleware -基礎-</h1>
               <h2> </h2>
            </div>
          </div>

          <!-- margin -->
          <div class="col-sm-12">
            <div class="margin002"></div>
            <div style="margin-left:0; margin-right:50px" class="bdr"></div>
            <div class="margin004"></div>
          </div>

          <!-- 目次 -->
          <div class="row justify-content-center">
            <div class="index font-KosugiMaru">
              <ul style="list-style:none">
                <div class="margin002"></div>
                <h3 class="indexTxt">目次</h3>
                <li> 1. 役割</li>
                <li>   1-1. 目的 </li>
                <li>   1-2. 事例 </li>
                <li> 2. middelwareの作成・登録</li>
                <li>   2-1. 作成</li>
                <li>   2-2. 登録</li>
                <li> 3. まとめ</li>
                <li> 参考文献 </li>
              </ul>
            </div>
          </div>

          <div class="margin004"></div>

<!-- 1 -->
          <h2 class="artTag1"> 1. 役割 </h2>

          <h3 class="artTag2">1-1. 目的</h3>
          <div class="artTag2-t">
            <span class="HLtxt">事前or直前 に処理する内容の統一化が図れます</span><br>
            <span class="">これによってコントローラの内部の処理で事前に準備するなどの処理が不要となるため、<br>
            <u>コントローラのビジネスロジックを明確化</u></span>できます。<br>
            コントローラで一々その処理に通すための記載をする必要がないのです。

          </div>
          <div class="margin002"></div>

          <h3 class="artTag2">1-2. 事例</h3>
          <p class="artTag2-t">
            あくまで代表例ではありますが、middleware は 大別し<span class="HLtxt2">２通りの使い方</span>が可能です。<br>
            <span class="artItem">① フィルタリング</span><br>
           <span class="EX">ex ) 認証・Validation </span><br>
           <span class="artItem">② 情報の追加・修正</span><br>
          <span class="EX">ex )  暗号化・</span><br>



           </p>

<div class="margin002"></div>

<!-- 2 -->
        <h2 class="artTag1"> 2. middlewareの作成・登録 </h2>

<div class="margin002"></div>
          <h3 class="artTag2">2-1. 作成</h3>
          <div class="artTag2-t">
          artisanコマンドで実行可能です<br>
          実行されると<span class="HLtxt2">App/Http/Middleware</span>に保存されます。<br>
            <pre class="prettyprint">
<code>php artisan make:middleware "任意の名前"</code></pre>
          </div>
<div class="artTag2-t">
          作成されたmiddleware はこのようになります。

            <pre class="prettyprint linenums">
<code>&lt;?php

namespace App\Http\Middleware;

use Closure;

class HelloMiddleware
{
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
</code></pre>
  このhandleメソッドが middlewareの処理になります<br>
  $next( )はクロージャです。ビジネスロジックを表現した関数と考えると良いでしょう。<br>

  ゆえに事前に処理したければ$nextの前に処理し、<br>
  事後に処理したければ$nextの処理した値をreturnで返却すれば良いわけです。<br>



</div>
<div class="margin002"></div>


          <h3 class="artTag2">2-2. 登録</h3>
          <div class="artTag2-t">
            middlewareは <span class="HLtxt2">App/Http/Kernel</span>に登録されます。<br>
            登録箇所は適用範囲で異なり、その適用範囲でmiddlewareは２種類に大別されます。<br>
                <div class="artItem">① グローバルミドルウェア</div>
                    <div class="EX1">どんなリクエストであっても処理を適用させます。</div>
                <div class="artItem">② ルートミドルウェア</div>
                    <div class="EX1">指定したルートに対して処理を適用させます。</div>
            これらmiddlewareの登録箇所を以下に示します。

            <pre class="prettyprint linenums"><code>&lt;?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     *    ① グローバルミドルウェア記載箇所
     */
    protected $middleware = [
      \App\Http\Middleware\HelloMiddleware::class,
        ・・・
    ];

    /**
     *    ※１ グループミドルウェア記載箇所
     */
    protected $middlewareGroups = [
        'web' => [
          \App\Http\Middleware\HelloMiddleware::class,
        ・・・
        ],

        'api' => [
        ・・・
        ],
    ];

    /**
     *    ② ルートミドルウェア記載箇所
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        ・・・
    ];

    /**
     *    ※２ 先に実行してほしいミドルウェアの登録
     */
    protected $middlewarePriority = [
        ・・・
    ];
}
</code></pre>
プロパティ $middleware に登録するのがグローバルミドルウェア、<br>
プロパティ $middlewareGroups に登録するのがルートミドルウェアとなります。<br>
また ※１ のように連想配列でミドルウェアを独自にグループにまとめることが可能です。<br>
他に ※２ で優先度あげたいmiddlewareはここに記載することで先行して実行させることが可能です。<br>
例えば、まず先に暗号化したい、認証に通して弾くものは弾いてから処理に移したいなどが考えられます。

</div>
<div class="margin002"></div>

<!-- 3 -->
          <h2 class="artTag1"> 3. まとめ </h2>
              <div class="artTag2-t">
今回は middlewareについて丁寧に解説をしました。<br>
middlewarenの役割から作成・登録と非常に基礎的な内容になりました。
次回、ここで書ききれなかった 事前に用意されているmiddlewareの解説、またチュートリアルを記事にしたいと思います。<br>


              </div>

<div class="margin002"></div>
<div class="margin002"></div>

<!-- 参考ページ -->
        <h2 class="artTag3"> 参考文献 </h2>

<div class="margin002"></div>

          <ul>
            <li><a href="https://laravel.com/docs/5.8/middleware">Laravel (公式)</a></li>
            <li><a href="https://readouble.com/laravel/5.8/ja/middleware.html">Readable</a></li>
          </ul>

<div class="margin002"></div>
<div class="margin002"></div>

<!-- ここまで -->
        </div>
        <div class="col-sm-1"></div>
      </div>
    </div>
  </div>
@endsection
