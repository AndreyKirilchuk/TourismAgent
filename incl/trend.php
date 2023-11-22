<!DOCTYPE html>
<html>
	<head>
		<title>Trend</title>
		<meta charset="utf-8">
	</head>
	<body>
		<!--Баннер-->
		<div class="banner">
			<div class="banner_inner">
				<div class="banner_logo">Trend<div class="banner_fire"></div> - are hot tours for today!</div>
				<?php
						$query="SELECT * FROM countrys";
						$result=$link->query($query);
						while($country=$result->fetch_assoc()){
							echo'
								<div class="banner_nav">
									<div class="banner_preview">
										<img src="'.$country['img'].'" class="preview">
									</div>
									<div class="banner_info">
										<div class="banner_info1">
											<div class="banner_info_logo">'.$country['name'].'</div>
											<div class="banner_info_text"><a href="'.$country['place'].'" class="geo"><div class="plane"></div>'.$country['place_name'].'</a></div>
										</div>	
										<div class="banner_info2">
										<div class="banner_info2_star"></div>
										<div class="banner_info_sell">
											<div class="banner_info_sell2">'.$country['price'].'</div>
											<div class="banner_info_sell3"><a href="?page=hotels&id='.$country['id'].'" class="banner_link">Подробнее</a></div>
										</div>
										</div>
									</div>
								</div>
							';
						}
				?>
			</div>
		</div>
	</body>
</html>	