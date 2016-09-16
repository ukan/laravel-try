<!DOCTYPE html>
<html>
<head>
	 <title>Training bootstrap</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="css/bootstrap-material-design.css">
   <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="css/ripples.css">
   <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
   <script type="text/javascript" src="js/material.js"></script>
   <script type="text/javascript" src="js/ripples.js"></script>


   <script>
      $.material.init();
    </script>
    <script>
      $(function () {
        $.material.init();
        $(".shor").noUiSlider({
          start: 40,
          connect: "lower",
          range: {
            min: 0,
            max: 100
          }
        });
        $(".svert").noUiSlider({
          orientation: "vertical",
          start: 40,
          connect: "lower",
          range: {
            min: 0,
            max: 100
          }
        });
      });
    </script>	 

</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-nav">
				<a class="navbar-brand" href="#">Training Bootstrap</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="/home">Home</a></li>
        <li><a href="/profile">Profile</a></li> 
				<li class="active"><a href="#">Contact</a></li>
			</ul>
		</div>
	</nav>	
	<div class="container">
    <div class="row">
      <div class="row">
		  <div class="col-md-3">
        <h3>Riku Kiranatama</h3>
        <img src="images/ban.jpg" alt="slide 1" class="img-circle">
      </div>
		  <div class="col-md-1"></div>
			  <div class="col-md-8"><br>
          <div class="form-group">
            <input type="email" class="form-control col-sm-8" placeholder="Email">
          </div>
          <div class="form-group">
            <textarea id="t1" class="form-control col-sm-8" placeholder="Messages"></textarea>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="sample1" value="option1" checked="">
              Men
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="sample1" value="option1">
              Women
            </label>
          </div>
          <div class="form-group">
            <button onclick="#" id="save" type="submit" name="save" class="btn btn-primary-edit">Submit</button>
          </div>
			  </div>
	  </div>
    </div>
  </div>
</body>
</html>
