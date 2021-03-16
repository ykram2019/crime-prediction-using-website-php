<html>
<head>
<link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css"> 
 <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
 <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script> 
<link rel="stylesheet" href= "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 


<style>
.navbar {
    transition: all 0.4s;

}

.navbar .nav-link {
    color: #fff;
}

.navbar .nav-link:hover,
.navbar .nav-link:focus {
    color: #fff;
    text-decoration: none;
}

.navbar .navbar-brand {
    color: #fff;
}


/* Change navbar styling on scroll */
.navbar.active {
    background: #fff;
    box-shadow: 1px 2px 10px rgba(0, 0, 0, 0.1);
}

.navbar.active .nav-link {
    color: #555;
}

.navbar.active .nav-link:hover,
.navbar.active .nav-link:focus {
    color: #555;
    text-decoration: none;
}

.navbar.active .navbar-brand {
    color: #555;
}


/* Change navbar styling on small viewports */
@media (max-width: 991.98px) {
    .navbar {
        background: #fff;
    }

    .navbar .navbar-brand, .navbar .nav-link {
        color: #555;
    }
}



.text-small {
    font-size: 0.9rem !important;
}


body {
    min-height: 120vh;
    background-color: #4ca1af;
    background-image: linear-gradient(135deg, #4ca1af 0%, #c4e0e5 100%);
	position:relative;
}

</style>
</head>

<body>

<header class="header">
  <nav class="navbar navbar-expand-lg fixed-top py-4">
    <div class="container"><a href="#" class="navbar-brand text-uppercase font-weight-bold"><h2>CRIME PREDICTION SYSTEM</h2></a>
      <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

      <div id="navbarSupportedContent" class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="dashboard.php" class="nav-link text-uppercase font-weight-bold">Dashboard <span class="sr-only">(current)</span></a></li>
          <li class="nav-item"><a href="fir.php" class="nav-link text-uppercase font-weight-bold">Register FIR</a></li>
          <li class="nav-item"><a href="nclassifier.php" class="nav-link text-uppercase font-weight-bold">Predict Crime</a></li>
          <li class="nav-item"><a href="search.php" class="nav-link text-uppercase font-weight-bold">Registered FIRs</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>

  



<script>
$(function () {
    $(window).on('scroll', function () {
        if ( $(window).scrollTop() > 10 ) {
            $('.navbar').addClass('active');
        } else {
            $('.navbar').removeClass('active');
        }
    });
});
</script>
</body>
<html>