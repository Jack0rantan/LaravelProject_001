@section ('main')
  <!-- main -->
  <div class="col-xs-1"></div>
  <div class="col-xs-10">

    <!-- Title -->
    <div class="col-xs-12">
      <div class = "font-Fjalla" style="font-size:40px">
         your Coin
      </div>
    </div>

    <!-- margin -->
    <div class="col-xs-12">
      <div class="margin001"></div>
    </div>

    <!-- Explanation -->
    <div class="col-xs-1"></div>
    <div class="col-xs-11">
      <div class="font-Unna" style="font-size:25px">
        This page count your own coin in TwiCas.
      </div>
    </div>

    <!-- -->
    <div class="col-xs-12">
      <strong class="font-DS" style="font-size:30px">1 Step :</strong>
    </div>

    <!-- -->
    <div class="col-xs-1"></div>
    <div class="col-xs-6">
      <p class="font-Unna" style="font-size:20px">please input your name</p>
    </div>
    <div class="col-xs-5">
      <form action="/service/coin" method="post">
      {{ csrf_field() }}
      <input type="text" name="tw_name">
      <input type="submit" value="show" class="font-Unna">
      </form>
    </div>

    <!-- -->
    <div class="col-xs-12">
     <strong class="font-DS" style="font-size:30px">2 Step :</strong>
    </div>

    <!-- form -->
    <div class="col-xs-1"></div>
    <div class="col-xs-6">
     <p class="font-Unna" style="font-size:20px"> You have </p>
    </div>
    <div class="col-xs-3">
      <div class="font-Unna">
        <span style="color:#ee3333; font-size:26px;">{{ $allcoin }}</span> <span style="font-size:20px;">coins</span>
      </div>
    </div>
    <div class="col-xs-2"></div>

    <!-- margin -->
    <div class="col-xs-12">
      <div class="margin002"></div>
    </div>

    <!-- contents  -->
    <table class="table table-hover">
      <thead style="background:linear-gradient(rgba(0,0,0,0.5),rgba(125,125,125,0.5)); color:#000000">
        <tr>
          <th>No</th><th>Name</th><th>coin</th><th>left Day</th>
        </tr>
      </thead>

      <tbody style="background:linear-gradient(rgba(255,255,255,0.5),rgba(210,220,210,0.5)); color:#000000">
        @foreach ($detail as $key => $val )
          <tr>
          @if ($val["coin"] != 0)
            <td>{{ $val["id"] }}</td>
            <td>{{ $val["coinUser"] }}</td>
            <td>{{ $val["coin"] }}</td>
            <td>{{ $val["xprDay"] }}</td>
          @endif
          </tr>
        @endforeach
          <tr><td>_</td><td>_</td><td>_</td><td>_</td></tr>
      </tbody>
    </table>
  </div>
  <div class="col-xs-1"></div>
@endsection
