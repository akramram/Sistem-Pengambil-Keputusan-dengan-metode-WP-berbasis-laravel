@section('header')
<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/cerulean.min.css') }}" rel="stylesheet">
    
	<!-- Datatables -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/datatables/dataTables.bootstrap.css') }}">
	
	    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

        <script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
        <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>

    
    </head>
    <body>
    @show
    @section('navbar')
    <!-- Static navbar -->
    <div class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="home">Home</a></li>
              <li><a href="kriteria">Data Kriteria</a></li>
              <li><a href="alternatif">Data Alternatif</a></li>
			  <li><a href="analisa">Analisa</a></li>
              <li><a href="perhitungan">Perhitungan</a></li>
			</ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>
      @show

        <div class="container">
            @yield('content')
        </div>

        
    </body>
</html>