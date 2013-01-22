<!-- header -->
<header class="header">
	<div class="shell">
		<div class="header-top">
			<h1 id="logo"><a href="#">Digy</a></h1>
			<nav id="navigation">
				<a href="#" class="nav-btn">Home<span></span></a>
				<ul>
					<li class="active home"><a href="#">Home</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="#">Projects</a></li>
					<li><a href="#">Solutions</a></li>
					<li><a href="#">Jobs</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Contacts</a></li>
				</ul>
			</nav>
			<div class="cl">&nbsp;</div>
		</div>
		<div class="slider">
			<div id="bg"></div>
			<div id="carousel">
				<!-- Slider Mulai -->
				<?php 
//				foreach($head_data as $item):
				?>
				<div>
					<h5>Produk Paling HOT</h5>
					<h3><?php echo $merk;?></h3>
					<p><?php echo $deskripsi;?></p>
					<a href="#" class="green-btn">Order Sekarang!</a>
<!--					<img class="img-front" src="css/images/front-img.png" alt="dot1" width="263" height="436" /> --> 
					<img class="img-mid" src="css/images/img-mid.png" alt="dot2" width="230" height="363" />
					<img class="img-back" src="css/images/img-back.png" alt="dot3" width="195" height="304" />
				</div>	
				<?php //endforeach;?>					
			</div>
			<div class="pagination"></div>
			<a id="prev" href="#"></a>
			<a id="next" href="#"></a>
		</div>
	</div>
</header>

<!-- end of header -->
<div class="shell">
			<!-- main -->
			<div class="main">