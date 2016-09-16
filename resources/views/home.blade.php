<!DOCTYPE html>
<html>
<head>
	<title>Training bootstrap</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-material-design.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/ripples.css">
	<script type="text/javascript" src="js/material.js"></script>
	<script type="text/javascript" src="js/ripples.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-nav">
				<a class="navbar-brand" href="#">Training Bootstrap</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="/profile">Profile</a></li>
				<li><a href="/contact">Contact</a></li> 
			</ul>
		</div>
	</nav>	
	<div class="container">
    <div class="row">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      	<!-- Carousel Indikator -->
        <ol class="carousel-indicators">
        	<li data-target="carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="carousel-example-generic" data-slide-to="1"></li>
        </ol>
        
        <!-- Wrapper for Slide -->
        <div class="carousel-inner">
        	<div class="item active">
            	<img src="images/slide1.jpg" alt="Slide 1">
                <div class="carousel-caption">
                	<h3>Slide 1</h3>
                </div>
            </div>
            <div class="item">
            	<img src="images/slide2.jpg" alt="Slide 1">
                <div class="carousel-caption">
                	<h3>Slide 1</h3>
                </div>
            </div>
        </div>
        
        <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      <div class="row">
		  <div class="col-md-6">
        <br>Hello saya Riku dan saya saat ini akan lulus dari kuliah, salam kenal ya. Berikut contoh dari hasil design gambar yang saya buat.
      </div>
		  <div class="col-md-3"></div>
			  <div class="col-md-3"><br>
			  	Facebook : riku@mail.com<br>
			  	Twitter : riku@mail.com<br>
			  	Telpon : 022-232392<br>
			  	Alamat : Jl. Harapan Bangsa no. 23 Bandung, Indonesia
			  </div>
	  </div>
    </div>
  </div>
  <script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
