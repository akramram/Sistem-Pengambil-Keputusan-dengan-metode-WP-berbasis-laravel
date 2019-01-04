@section('header')
<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('css/cerulean.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

	<!-- Datatables -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/datatables/dataTables.bootstrap.css') }}">

	    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

        <script src="{{ asset('js/jquery-1.11.3.min.js')}}"></script>
        <script src="{{ asset('js/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('js/dataTables.bootstrap.min.js')}}"></script>
        <script src="{{ asset('js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('js/bootswatch.js')}}"></script>
        <script src="{{ asset('js/Chart.min.js')}}"></script>

    </head>
    <body>
    @show
    @section('navbar')
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
			<div class="container">
				<a class="navbar-brand" href="index.html">Royal<span>estate</span></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="oi oi-menu"></span> Menu
				</button>

				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
						<li class="nav-item"><a href="kriteria" class="nav-link">Kriteria</a></li>
						<li class="nav-item"><a href="alternatif" class="nav-link">Alternatif</a></li>
						<li class="nav-item"><a href="analisa" class="nav-link">Analisa</a></li>
						<li class="nav-item"><a href="perhitungan" class="nav-link">Perhitungan</a></li>
					</ul>
				</div>
			</div>
		</nav>
    <!-- Static navbar -->
    <!-- <div class="navbar navbar-default">
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
            <li><a href="/">Home</a></li>
            <li><a href="kriteria">Data Kriteria</a></li>
            <li><a href="alternatif">Data Alternatif</a></li>
            <li><a href="analisa">Analisa</a></li>
            <li><a href="perhitungan">Perhitungan</a></li>
          </ul>
        </div><!--/.nav-collapse
      </div><!--/.container-fluid
    </div> -->
      @show

        <div class="container">
            @yield('content')
        </div>

    </body>
</html>
