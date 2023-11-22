<!DOCTYPE html>
<html>
	<head>
		<title>Dekstop - 1</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
		<!-- Link Swiper's CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
		<style>
				.swiper-button-next{
					color:white;
				}
				.swiper-button-prev{
					color:white;;	
				}
				.swiper-pagination-bullet-active{
					background:white ;
				}
		</style>
	</head>
	<body>
		<!--Баннер-->
		<div class="banner">
			<div class="banner_inner_k">
				<?php
						if(isset($_GET['id'])){
							$get_id=$_GET['id'];
							$query3="SELECT * FROM hotels WHERE id='$get_id'";
							$result=$link->query($query3);
							$hotels=$result->fetch_assoc();
							echo'
				<div class="banner_inner2_k">
					<div class="banner_logo_k">
						<div class="banner_logo1_k">'.$hotels['name'].'</div>
						<div class="swiper mySwiper">
							<div class="swiper-wrapper">';
                                $query4="SELECT * FROM image WHERE hotels_id='$get_id'";
                                $result4=$link->query($query4);
                                while($image=$result4->fetch_assoc()){
                                echo'
                                    <div class="swiper-slide"><img src="'.$image['img'].'"></div>
                                ';}
                                
                            
                                echo'
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
						    </div>
					    </div>
					<div class="banner_nav_k">
						<div class="banner_iz_k">
							<div class="banner_star_k">							
								<div class="rating-mini_k">
									<span class="active"></span><br>
									<span class="active"></span><br>
									<span class="active"></span><br>   
									<span class="active"></span><br>
									<span ></span><br>    
								</div>
							</div>
						</div>
						<div class="price_k">'.$hotels['price'].'</div>
						<div class="banner_line_k"></div>
						<div class="banner_order_k"><a href="?page=form&id='.$hotels['id'].'"class="oder_k">Apply online</a></div>
					</div>
				</div>
				<div class="banner_inner3_k">
					<div class="banner_inner3_logo_k">'.$hotels['postscript'].'</div>
					<div class="banner_inner3_info_k">
						<div class="info_k">
                            '.$hotels['about'].'
						</div>
					</div>
				</div>
			</div>
		</div>
		  <!-- Swiper JS -->
		  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

		  <!-- Initialize Swiper -->
		  <script>
			var swiper = new Swiper(".mySwiper", {
			  cssMode: true,
			  navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			  },
			  pagination: {
				el: ".swiper-pagination",
			  },
			  mousewheel: true,
			  keyboard: true,
			});
		  </script>
				  <!-- Swiper JS -->
				  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

				  <!-- Initialize Swiper -->
				  <script>
					var swiper = new Swiper(".mySwiper", {
					  cssMode: true,
					  navigation: {
						nextEl: ".swiper-button-next",
						prevEl: ".swiper-button-prev",
					  },
					  pagination: {
						el: ".swiper-pagination",
					  },
					  mousewheel: true,
					  keyboard: true,
					});
				  </script>
							';
						}
				?>
			</div>
		</div>
	</body>
</html>
