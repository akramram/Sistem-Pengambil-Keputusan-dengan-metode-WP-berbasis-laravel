
<html>
	<head>
		<title></title>
		  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/animate.css') }}">

		<!-- <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}"> -->

		<link rel="stylesheet" href="{{ asset('css/aos.css') }}">

		<link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">

		<link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
		<link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">

		<link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
		<link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">

	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
			<div class="container">
				<a class="navbar-brand" href="index.html">K<span>PR</span></a>
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

		<section class="home-slider owl-carousel">
		      <div class="slider-item" style="background-image:url({{ asset('images/bg1.jpg') }});">
		      	<div class="overlay"></div>
		        <div class="container">
		          <div class="row no-gutters slider-text align-items-md-end align-items-center justify-content-end">
		          <div class="col-md-6 text p-4 ftco-animate">
		            <h1 class="mb-3">Florida 5, Pinecrest, FL</h1>
		            <span class="location d-block mb-3"><i class="icon-my_location"></i> Melbourne, Vic 3004</span>
		            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		            <span class="price">$28,000</span>
		          </div>
		        </div>
		        </div>
		      </div>

		      <div class="slider-item" style="background-image:url({{ asset('images/bg_2.jpg') }});">
		      	<div class="overlay"></div>
		        <div class="container">
		          <div class="row no-gutters slider-text align-items-md-end align-items-center justify-content-end">
		          <div class="col-md-6 text p-4 ftco-animate">
		            <h1 class="mb-3">3015 Grand Avenue, CocoWalk</h1>
		            <span class="location d-block mb-3"><i class="icon-my_location"></i> Melbourne, Vic 3004</span>
		            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		            <span class="price">$28,000</span>
		          </div>
		        </div>
		        </div>
		      </div>
		    </section>

		    <section class="ftco-search">
		    	<div class="container">
			    	<div class="row">
							<div class="col-md-12 search-wrap">
								<h2 class="heading h5 d-flex align-items-center pr-4"><span class="ion-ios-search mr-3"></span> Search Property</h2>
								<form action="#" class="search-property">
			        		<div class="row">
			        			<div class="col-md align-items-end">
			        				<div class="form-group">
			        					<label for="#">Keyword</label>
			          				<div class="form-field">
			          					<div class="icon"><span class="icon-pencil"></span></div>
					                <input type="text" class="form-control" placeholder="Keyword">
					              </div>
				              </div>
			        			</div>
			        			<div class="col-md align-items-end">
			        				<div class="form-group">
			        					<label for="#">Location</label>
			          				<div class="form-field">
			          					<div class="icon"><span class="icon-pencil"></span></div>
					                <input type="text" class="form-control" placeholder="City/Locality Name">
					              </div>
				              </div>
			        			</div>
			        			<div class="col-md align-items-end">
			        				<div class="form-group">
			        					<label for="#">Property Type</label>
			        					<div class="form-field">
			          					<div class="select-wrap">
			                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
			                      <select name="" id="" class="form-control">
			                      	<option value="">Type</option>
			                        <option value="">Commercial</option>
			                        <option value="">- Office</option>
			                        <option value="">Residential</option>
			                        <option value="">Villa</option>
			                        <option value="">Condominium</option>
			                        <option value="">Apartment</option>
			                      </select>
			                    </div>
					              </div>
				              </div>
			        			</div>
			        			<div class="col-md align-items-end">
			        				<div class="form-group">
			        					<label for="#">Property Status</label>
			        					<div class="form-field">
			          					<div class="select-wrap">
			                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
			                      <select name="" id="" class="form-control">
			                      	<option value="">Type</option>
			                        <option value="">Rent</option>
			                        <option value="">Sale</option>
			                      </select>
			                    </div>
					              </div>
				              </div>
			        			</div>
			        			<div class="col-md align-items-end">
			        				<div class="form-group">
			        					<label for="#">Agents</label>
			        					<div class="form-field">
			          					<div class="select-wrap">
			                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
			                      <select name="" id="" class="form-control">
			                      	<option value="">Any</option>
			                        <option value="">Jonh Doe</option>
			                        <option value="">Doe Mags</option>
			                        <option value="">Kenny Scott</option>
			                        <option value="">Emily Storm</option>
			                      </select>
			                    </div>
					              </div>
				              </div>
			        			</div>
			        		</div>

			        		<div class="row">
			        			<div class="col-md align-items-end">
			        				<div class="form-group">
			        					<label for="#">Min Beds</label>
			        					<div class="form-field">
			          					<div class="select-wrap">
			                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
			                      <select name="" id="" class="form-control">
			                      	<option value="">1</option>
			                        <option value="">2</option>
			                        <option value="">3</option>
			                        <option value="">4</option>
			                        <option value="">5</option>
			                      </select>
			                    </div>
					              </div>
				              </div>
			        			</div>
			        			<div class="col-md align-items-end">
			        				<div class="form-group">
			        					<label for="#">Min Bathroom</label>
			        					<div class="form-field">
			          					<div class="select-wrap">
			                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
			                      <select name="" id="" class="form-control">
			                      	<option value="">1</option>
			                        <option value="">2</option>
			                        <option value="">3</option>
			                        <option value="">4</option>
			                        <option value="">5</option>
			                      </select>
			                    </div>
					              </div>
				              </div>
			        			</div>
			        			<div class="col-md align-items-end">
			        				<div class="form-group">
			        					<label for="#">Min Price</label>
			        					<div class="form-field">
			          					<div class="select-wrap">
			                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
			                      <select name="" id="" class="form-control">
			                      	<option value="">Min Price</option>
			                        <option value="">$1,000</option>
			                        <option value="">$5,000</option>
			                        <option value="">$10,000</option>
			                        <option value="">$50,000</option>
			                        <option value="">$100,000</option>
			                        <option value="">$200,000</option>
			                        <option value="">$300,000</option>
			                        <option value="">$400,000</option>
			                        <option value="">$500,000</option>
			                        <option value="">$600,000</option>
			                        <option value="">$700,000</option>
			                        <option value="">$800,000</option>
			                        <option value="">$900,000</option>
			                        <option value="">$1,000,000</option>
			                      </select>
			                    </div>
					              </div>
				              </div>
			        			</div>
			        			<div class="col-md align-items-end">
			        				<div class="form-group">
			        					<label for="#">Min Price</label>
			        					<div class="form-field">
			          					<div class="select-wrap">
			                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
			                      <select name="" id="" class="form-control">
			                      	<option value="">Min Price</option>
			                        <option value="">$5,000</option>
			                        <option value="">$10,000</option>
			                        <option value="">$50,000</option>
			                        <option value="">$100,000</option>
			                        <option value="">$200,000</option>
			                        <option value="">$300,000</option>
			                        <option value="">$400,000</option>
			                        <option value="">$500,000</option>
			                        <option value="">$600,000</option>
			                        <option value="">$700,000</option>
			                        <option value="">$800,000</option>
			                        <option value="">$900,000</option>
			                        <option value="">$1,000,000</option>
			                        <option value="">$2,000,000</option>
			                      </select>
			                    </div>
					              </div>
				              </div>
			        			</div>
			        			<div class="col-md align-items-end">
			        				<div class="form-group">
			        					<label for="#">Min Area <span>(sq ft)</span></label>
			          				<div class="form-field">
			          					<div class="icon"><span class="icon-pencil"></span></div>
					                <input type="text" class="form-control" placeholder="Min Area">
					              </div>
				              </div>
			        			</div>
			        			<div class="col-md align-items-end">
			        				<div class="form-group">
			        					<label for="#">Max Area <span>(sq ft)</span></label>
			          				<div class="form-field">
			          					<div class="icon"><span class="icon-pencil"></span></div>
					                <input type="text" class="form-control" placeholder="Max Area">
					              </div>
				              </div>
			        			</div>
			        			<div class="col-md align-self-end">
			        				<div class="form-group">
			        					<div class="form-field">
					                <input type="submit" value="Search" class="form-control btn btn-primary">
					              </div>
				              </div>
			        			</div>
			        		</div>
			        	</form>
							</div>
			    	</div>
			    </div>
		    </section>
	</body>
	<script src="{{ asset('js/jquery.min.js') }}"></script>
		<script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
		<script src="{{ asset('js/popper.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
		<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
		<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
		<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('js/aos.js') }}"></script>
		<script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
		<script src="{{ asset('js/jquery.timepicker.min.js') }}"></script>
		<script src="{{ asset('js/scrollax.min.js') }}"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
		<script src="{{ asset('js/google-map.js') }}"></script>
		<script src="{{ asset('js/main.js') }}"></script>
</html>
