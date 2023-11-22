<!DOCTYPE html>
<html>
	<head>
		<title>Dekstop - 1</title>
		<meta charset="utf-8">
	</head>
	<body>
		<!--Баннер-->
		<div class="banner_h">
			<div class="banner_inner_h">
				<?php
							$query6="SELECT * FROM hotels";
							$result=$link->query($query6);
							while($hotels=$result->fetch_assoc()){
							echo'
								<div class="banner_nav">
									<div class="banner_preview">
										<img src="'.$hotels['preview'].'" class="preview">
									</div>
									<div class="banner_info">
										<div class="banner_info1">
											<div class="banner_info_logo">'.$hotels['name'].'</div>
											<div class="banner_info_text"><a href="'.$hotels['place'].'" class="geo"><div class="plane"></div>'.$hotels['place_name'].'</a></div>
										</div>	
										<div class="banner_info2">
										<div class="banner_info2_star"></div>
										<div class="banner_info_sell_h">
											<div class="banner_info_sell1_h">'.$hotels['fprice'].'</div>
											<div class="banner_info_sell2_h">'.$hotels['price'].'</div>
											<div class="banner_info_sell3_h"><a href="?page=hotel&id='.$hotels['id'].'" class="banner_link">Подробнее</a></div>
										</div>
										</div>
									</div>
								</div>
							';}
						
				?>
			</div>
		</div>
	</body>
</html>


































