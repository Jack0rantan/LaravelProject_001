@section ('main')
  <div class="container-fluid">
    <div id="relative z1">
      <!-- main -->
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-11">

          <!-- margin -->
          <div class="row">
            <div class="col-sm-12">
              <div class="margin002"></div>
            </div>
           </div>

          <!-- Title -->
          <div class="col-12 row">
            <div class = "jumbotron jumbotron-fluid font-DS img_dawn000" style="color:white; padding-up:10px;padding-left:10px; filter:drop-shadow(10px 10px 10px rgba(0,0,0,0.6));">
              <h1>DawnDesert</h1>
              <div class="font-Unna">
                <h2> Enhance your life.</h2>
                <h3>
                  <p> I will provide some services and information to make your life more convinient.</p>
                  <p> If it's worthful for you, giving hope such as the dawn in the desert, I'm happy. </p>
                </h3>
              </div>
            </div>
          </div>

          <!-- margin -->
          <div class="col-sm-12">
            <div class="margin002"></div>
          </div>

          <!-- explanation -->
          <div class="col-sm-12">
            <div class="font-DS" style="color:Black; font-size:20px">
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
            @foreach ( $result->all() as $blogOutline)
              <div class="col-12">
                <div class="card mb-3" style="max-width: 54em;">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <a href="/english/TED-001">
                        <img src="/img/dawn_desert_002.jpg" class="card-img" alt="TED-img">
                      </a>
                    </div>
                    <div class="col-md-8" style="background:#eeeeee">
                      <div class="card-body">
                      <a href="/english/TED-001" style="text-decoration:none; color:black;">
                        <h5 class="card-title" style="background:white; padding:20px">{{$blogOutline->title}}</h5>
                      </a>
                        <p class="card-text">{{$blogOutline->outline}}</p>
                        <p class="card-text"><small class="text-muted">{{$blogOutline->outline}}</small></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>

          <!-- form -->

          <!-- margin -->
          <div class="col-sm-12">
            <div class="margin002"></div>
          </div>

          <!-- contents  -->
          <div class="col-sm-12">
            <div class="margin004"></div>
          </div>

        </div>
      </div>
    </div>
  </div>
@endsection
