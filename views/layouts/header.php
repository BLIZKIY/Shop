<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>My E-Shop</title>
	<link rel="stylesheet" href="../../template/css/style.css" type="text/css" media="all" />
	<!--[if lte IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
		
	<!-- JS -->
	<script src="template/js/jquery-1.4.1.min.js" type="text/javascript"></script>	
	<script src="template/js/jquery.jcarousel.pack.js" type="text/javascript"></script>	
	<script src="template/js/jquery-func.js" type="text/javascript"></script>

	<!-- End JS -->
	
</head>
<body>
	
<!-- Shell -->	
<div class="shell">
	
	<!-- Header -->	
	<div id="header">
		<h1 id="logo"><a href="#">shoparound</a></h1>	
		
		<!-- Cart -->
		<div id="cart">
			<a href="/cart/" class="cart-link">Your Shopping Cart</a>
			(<span id="cart-count"><?php echo Cart::countItems();?></span>)
			<div class="cl">&nbsp;</div>
			<span>Articles: <strong>4</strong></span>
			&nbsp;&nbsp;
			<span>Cost: <strong>250$</strong></span>
		</div>
		<!-- End Cart -->
		
		<!-- Navigation -->
		<div id="navigation">
			<ul>
				<li><a href="/" >Home</a></li>
				<li><a href="/catalog/">Catalog</a></li>
				<?php if(User::isGuest()): ?>
					<li><a href="/user/register/">Registration</a></li>
					<li><a href="/user/login/">Log in</a></li>
				<?php else: ?>
				<li><a href="/user/logout/">Log out</a></li>
			    <li><a href="/cabinet/">Cabinet</a></li>
				<?php endif; ?>
			    <li><a href="#">Contact</a></li>
			</ul>
		</div>
		<!-- End Navigation -->
	</div>
	<!-- End Header -->