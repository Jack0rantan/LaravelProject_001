@section ('header')
    <!-- include bootstrap & jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <!-- header = navbar -->
    <nav class="navbar navbar-default" style="background-color: #000000;">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarEexample2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img alt="Brand" src="/img/logo.png" style="height: 20px;">
            </a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active">
                <a href="#">TopPage</a></li>
            <li><a href="#">Information</a></li>
            <li><a href="#">Service</a></li>
          </ul>
        </div>
    </nav>
@endsection
