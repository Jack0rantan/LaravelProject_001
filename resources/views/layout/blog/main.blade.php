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
                   <h1 style="font-size:5vmin;">DawnDesertBlog</h1>
                    <div class="font-Unna" style="color:white">
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
            @foreach ( $result->all() as $blogOutline)
              <div class="col-sm-6 col-8">
                <div class="cardBack">
                  <div class="cardTitle">{{$blogOutline->title}}</div>
                  <div class="img">
                    <img src="/img/dawn_desert_002.jpg" class="cardImg" alt="Article Picture">
                  </div>
                    <div class="cardText">{{$blogOutline->outline}}</div>
                    <div class="cardText">{{$blogOutline->outline}}</div>
                </div>
                <div class="margin004"></div>
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
        <div class="col-sm-1"></div>
      </div>
    </div>
  </div>
@endsection
