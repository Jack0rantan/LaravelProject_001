@section ('main')
  <!-- main -->
  <div class="col-md-9">

    <div class="page-header" style="margin-top: -30px; padding-bottom:0pc;">
      <h1><small> your Coin  </small></h1>
    </div>

    <div class="page-detail">
      This page will show your coin detail.
    </div>

    <div class="allcoin">
      All coin : {{ $allcoin }}  <a href="" class= "btn btn-primary btn-sm">allcoin</a>
    </div>


    <table class="table table-striped table-hover">

      <thead>
        <tr>
          <th>No</th><th>Name</th><th>coin</th><th>left Day</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($detail as $key => $val )
          <tr>
          @if ($val["coin"] != 0)
            <td>{{ $val["id"] }}</td>
            <td>{{ $val["coinUser"] }}</td>
            <td>{{ $val["coin"] }}</td>
            <td>{{ $val["xprDay"] }}</td>
              <td>
                <a href="" class="btn btn-primary btn-sm">詳細</a>
                <a href="" class="btn btn-primary btn-sm">編集</a>
                <a href="" class="btn btn-danger btn-sm">削除</a>
              </td>
            </td>
          @endif
          </tr>
        @endforeach
        <tr><td>_</td><td>_</td><td>_</td><td>_</td><td>_</td></tr>
        <tr><td>_</td><td>_</td><td>_</td><td>_</td><td>_</td></tr>
      </tbody>
    </table>
  </div>
@endsection
