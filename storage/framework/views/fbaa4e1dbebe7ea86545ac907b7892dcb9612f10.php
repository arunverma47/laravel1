<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Book Your Star</title>
<link rel="icon" type="image/x-icon" href="/images/favicon.ico" />

<!-- Bootstrap-->

<link href="/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="all" href="/css/bootstrap-datetimepicker.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<link href="/css/hover.css" rel="stylesheet">
<link href="/css/animation.css" rel="stylesheet">
<link href="/css/style.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<?php echo $__env->yieldContent('content'); ?>

<footer>
	<div class="container">
		<div class="footer-logo"> <a href="index.html"><img src="images/logo.png" alt="..."></a> </div>
		<div class="social">
			<ul>
				<li><a href="javascript:void(0);" class="effect-pop"><i class="fa fa-facebook"></i></a></li>
				<li><a href="javascript:void(0);" class="effect-pop"><i class="fa fa-twitter"></i></a></li>
				<li><a href="javascript:void(0);" class="effect-pop"><i class="fa fa-instagram"></i></a></li>
				<li><a href="javascript:void(0);" class="effect-pop"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="javascript:void(0);" class="effect-pop"><i class="fa fa-google-plus"></i></a></li>
			</ul>
		</div>
		<div class="footer-links">
			<ul>
				<li><a href="javascript:void(0);">Privacy Policy</a></li>
				<li><a href="javascript:void(0);">Terms and Conditions</a></li>
				<li><a href="javascript:void(0);">Copyright Infringement Policy</a></li>
				<li><a href="javascript:void(0);">Code of Conduct</a></li>
			</ul>
		</div>
		<div class="copyright">
			<p>All Rights Reserved <a href="javascript:void(0);">BookYourStar</a> 2015</p>
		</div>
	</div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<!--<script src="js/jquery.fadethis.js"></script>-->
<script src="js/jquery.unveilEffects.js"></script>
<script type="text/javascript" src="js/moment-with-locales.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript">
$(function () {
	$('#datetimepicker1').datetimepicker({
	 format: 'DD/MM/YYYY'
	});
});

$('.social a').hover(
function(){$(this).toggleClass('in');}
);
        </script>
</body>
</html>
