<!DOCTYPE html>
<html>
<head>
	<title>This is title</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<script  src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js" ></script>
</head>
<body>
	<!-- top nav ba -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="contianer">
		<a href="index.php" class="navbar-brand">moss's shop</a>
			<ul class="nav navbar-nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Men<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Shirts</a></li>
						<li><a href="#">Pants</a></li>
						<li><a href="#">Shoes</a></li>
						<li><a href="#">Accessories</a></li>
		
					</ul>
				</li>
				<li class="dropdown"></li>
				<li class="dropdown"></li>
			</ul>
		</div>
	</nav>

	<!-- Header -->
	<div id="headerWrapper">
		<div id="back-flower"></div>
		<div id="logotext"></div>
		<div id="fore-flower"></div>
	</div>

	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate perferendis obcaecati iste, culpa est eum, facere dolore nam mollitia, repudiandae eaque consequuntur quibusdam et laudantium dolorum, illo possimus ab incidunt.
	</p>

	<script type="text/javascript">
		
	jQuery(window).scroll(function(){
		var vscroll = jQuery(this).scrollTop();
		jQuery('#logotext').css({
			"tansform" : "translate(0px, "+vscroll/2+"px)"
		});

				var vscroll = jQuery(this).scrollTop();
		jQuery('#back-flower').css({
			"tansform" : "translate("+vscroll/5+"px, -"+vscroll/12+"px)"
		});

				var vscroll = jQuery(this).scrollTop();
		jQuery('#fore-flower').css({
			"tansform" : "translate(0px, -"+vscroll/2+"px)"
		});
	});

	</script>
</body>
</html>