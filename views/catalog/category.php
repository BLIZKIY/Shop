<?php include ROOT.'/views/layouts/header.php'; ?>
	
	<!-- Main -->
	<div id="main">
		<div class="cl">&nbsp;</div>
		
		<!-- Content -->
		<div id="content">
			
			<!-- Content Slider -->
			<div id="slider" class="box">
				<div id="slider-holder">
					<ul>
					    <li><a href="#"><img src="../template/images/slide1.jpg" alt="" /></a></li>
					    <li><a href="#"><img src="../template/images/slide1.jpg" alt="" /></a></li>
					    <li><a href="#"><img src="../template/images/slide1.jpg" alt="" /></a></li>
					    <li><a href="#"><img src="../template/images/slide1.jpg" alt="" /></a></li>
					</ul>
				</div>
				<div id="slider-nav">
					<a href="#" class="active">1</a>
					<a href="#">2</a>
					<a href="#">3</a>
					<a href="#">4</a>
				</div>
			</div>
			<!-- End Content Slider -->


			
			<!-- Products -->
			<div class="products">
				<div class="cl">&nbsp;</div>
				<ul>
				    <?php foreach($categoryProducts as $item) { ?>
				    <li class="last">
				    	<a href="/product/<?php echo $item['id']; ?>"><img src="/upload/images/products/<?php echo $item['id']; ?>.jpg" alt="" /></a>
				    	<div class="product-info">
				    		<h3><?php echo $item['name']; ?></h3>
				    		<div class="product-desc">
								<p><a href="/cart/add/<?php echo $item['id']; ?>" class="add-to-cart">в корзину</a></p>
								<!--	<p>--><?php //echo $item['description']; ?><!--</p>-->
				    			<strong class="price"><?php echo $item['price'] ?> грн.</strong>

				    		</div>
				    	</div>
			    	</li>
		    	
		    		<?php } ?>
		    		
				</ul>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- End Products -->
			
		</div>
		<!-- End Content -->


		
		<!-- Sidebar -->
		<div id="sidebar">
			
			<!-- Search -->
			<div class="box search">
				<h2>Search by <span></span></h2>
				<div class="box-content">
					<form action="" method="post">
						
						<label>Keyword</label>
						<input type="text" class="field" />
						
						<label>Category</label>
						<select class="field">
							<option value="">-- Select Category --</option>
						</select>
						
						<div class="inline-field">
							<label>Price</label>
							<select class="field small-field">
								<option value="">$10</option>
							</select>
							<label>to:</label>
							<select class="field small-field">
								<option value="">$50</option>
							</select>
						</div>
						
						<input type="submit" class="search-submit" value="Search" />
						
						<p>
							<a href="#" class="bul">Advanced search</a><br />
							<a href="#" class="bul">Contact Customer Support</a>
						</p>
	
					</form>
				</div>
			</div>
			<!-- End Search -->
			
			<!-- Categories -->
			<div class="box categories">
				<h2>Categories <span></span></h2>
				<div class="box-content">
					<ul>
						
						<?php foreach($categories as $categoryItem) : ?>
					    	<li>
					    		<a href="/category/<?php echo $categoryItem['id']; ?>"
					    			class="<?php if($categoryId == $categoryItem['id']) echo 'active'; ?>"

					    			>

					    			<?php echo $categoryItem['name']; ?>
					    				
					    		</a>
					    	</li>
						<?php endforeach; ?>					
					    
					</ul>
				</div>
			</div>
			<!-- End Categories -->
			
		</div>
		<!-- End Sidebar -->

		<!-- Постраничная навигация -->
		<div>
			<?php echo $pagination->get(); ?>
		<div/>
                    		
	<!-- End Main -->
		
		<div class="cl">&nbsp;</div>


	</div>


	
	<!-- Side Full -->
	<div class="side-full">
		
		
		
		<!-- Text Cols -->
		<div class="cols">
			<div class="cl">&nbsp;</div>
			<div class="col">
				<h3 class="ico ico1">Donec imperdiet</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet, metus ac cursus auctor, arcu felis ornare dui.</p>
				<p class="more"><a href="#" class="bul">Lorem ipsum</a></p>
			</div>
			<div class="col">
				<h3 class="ico ico2">Donec imperdiet</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet, metus ac cursus auctor, arcu felis ornare dui.</p>
				<p class="more"><a href="#" class="bul">Lorem ipsum</a></p>
			</div>
			<div class="col">
				<h3 class="ico ico3">Donec imperdiet</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet, metus ac cursus auctor, arcu felis ornare dui.</p>
				<p class="more"><a href="#" class="bul">Lorem ipsum</a></p>
			</div>
			<div class="col col-last">
				<h3 class="ico ico4">Donec imperdiet</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet, metus ac cursus auctor, arcu felis ornare dui.</p>
				<p class="more"><a href="#" class="bul">Lorem ipsum</a></p>
			</div>
			<div class="cl">&nbsp;</div>
		</div>
		<!-- End Text Cols -->

		
		
	</div>
	<!-- End Side Full -->
	
	

</div>	
<!-- End Shell -->

<?php include ROOT.'/views/layouts/footer.php'; ?>
	
	
</body>
</html>