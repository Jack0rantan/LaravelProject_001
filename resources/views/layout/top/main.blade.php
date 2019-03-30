@section ('main')
  <div class="container-fluid">
    <div id="relative z1">
      <!-- main -->
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">

          <!-- margin -->
          <div class="row">
            <div class="col-sm-12">
              <div class="margin002"></div>
            </div>
           </div>

          <!-- Title -->
          <div class="row">
            <div class="col-12">
                <div class = "jumbotron jumbotron-fluid font-DS img_dawn000" style="color:white; padding-up:10px;padding-left:10px; filter:drop-shadow(10px 10px 10px rgba(0,0,0,0.6));">
                   <h1 style="font-size:5vmin;">DawnDesert</h1>
                    <div class="font-Unna" style="color:white">
                      <h2 style="font-size:3.5vmin; padding-left:2vmin"> Enhance your life.</h2>
                      <h3 style="font-size:3vmin; padding-right:4vmin; padding-left:3vw">
                          <p> I will provide some services and information to make your life more convinient.</p>
                          <p> If it's worthful for you, giving hope such as the dawn in the desert, I'm happy. </p>
                      </h3>
                </div>
                </div>
            </div>
          </div>

          <!-- margin -->
          <div class="col-sm-12">
            <div class="margin002"></div>
          </div>

          <!-- explanation -->
          <div class="col-sm-12">
            <div class="font-DS" style="color:white; font-size:20px">
              <h2 style="font-size:7vh">Article</h2>
            </div>
          </div>

          <!-- margin -->
          <div class="col-sm-12">
            <div class="margin002"></div>
          </div>

          <!-- 記事一覧 -->
          <!-- 変数定義 -->
          <div class="row">
            @php $count = 1; @endphp
            <!-- 繰り返し処理 -->
            @foreach ( $result->all() as $blogOutline)
              <div class="col-sm-6">
                <div class="card border-0">
                  <img src="/img/dawn_desert_002.jpg" class="card-img-top img-fluid" alt="[GET Picture]">
                  <div class="card-body" style="background:black">
                    <div class="card-title font-Noto" style="color:white;">{{$blogOutline->title}} </div>
                    <p class="card-text" style="color:white;">{{$blogOutline->outline}}</p>
                  </div>
                </div>
              </div>
              <!-- 2つの記事ごとにマージンを追加 -->
              @if ($count%2 == 0)
              <div class="col-sm-12"><div class="margin001"></div></div>
              @endif
              <!-- count -->
              @php $count += 1; @endphp
            @endforeach
          </div>

          <!-- form -->

          <!-- margin -->
          <div class="col-sm-12">
            <div class="margin002"></div>
          </div>

          <!-- contents  -->
          <div class="col-sm-12">
            <div class="box002"></div>
          </div>

        </div>
        <div class="col-sm-1"></div>
      </div>
    </div>
  </div>
@endsection
