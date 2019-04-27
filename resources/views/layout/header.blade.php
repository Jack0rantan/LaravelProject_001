@section ('header')

    <!-- header = navbar -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
           <div class="margin005"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <nav class="navbar fixed-top navbar-expand-md navbar-light border-0 p-1" style="background:rgba(10,10,10,0.8);">
            <button class="navbar-toggler" type="button"
                    data-toggle="collapse" data-target="#collapse-items"
                    style="color:white;">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="collapse-items">
                <ul class="navbar-nav font-Fjalla">

                  <li class="nav-item nav-link">

                    <a class="nav-link" href="/">
                      <div class="nav-text">TopPage</div>
                    </a></li>

                  </li>
<!-- drop nav -->
                  <li class="nav-item nav-link">
                    <div class="dropdown">
                      <!-- 切替ボタンの設定 -->
                      <button style="border:none; border-radius:0;" 
                              type="button" 
                              class="nvDrop btn btn-dark btn-lg dropdown-toggle" 
                              id="dropdownMenuButton" 
                              data-toggle="dropdown" 
                              aria-haspopup="true" 
                              aria-expanded="false">
                        <span style="color:white">Programing</span>
                      </button>
                      <!-- ドロップメニューの設定 -->
                      <div class="nvDropMenu dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dpLink dropdown-item" href="/programing/laravel">Laravel</a>
                        <div class="bdr001"></div>
                      </div>
                    </div>
                    </a></li>
<!-- -->
<!-- drop nav -->
                  <li class="nav-item nav-link">
                    <div class="dropdown">
                      <!-- 切替ボタンの設定 -->
                      <button style="border:none; border-radius:0;" 
                              type="button" 
                              class="nvDrop btn btn-dark btn-lg dropdown-toggle" 
                              id="dropdownMenuButton" 
                              data-toggle="dropdown" 
                              aria-haspopup="true" 
                              aria-expanded="false">
                        <span style="color:white">Service</span>
                      </button>
                      <!-- ドロップメニューの設定 -->
                      <div class="nvDropMenu dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dpLink dropdown-item" href="/service/coin">Coin</a>
                        <div class="bdr001"></div>
                      </div>
                    </div>
                    </a></li>
<!-- -->
                  <!-- Contact -->
                  <li class="nav-item nav-link">
                    <a class="nav-link" href="/english">
                      <div class="nav-text">English</div>
                    </a></li>
                </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
@endsection
