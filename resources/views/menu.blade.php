
<style>
  .active{
    background:#c1e1ff;
  }
</style>

@section('content1')
  <nav class="navbar navbar-default">
    <div class="container-fluid">
  <!-- Brand and toggle get grouped for better mobile display -->
  <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      {!! Menu::make($items, 'nav navbar-nav') !!}
    </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
@endsection
