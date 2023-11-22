		<!--Баннер-->
		<div class="banner_m">
			<a href="#main" class="banner_info_m">Start the journey!</a>
		</div>
		<!--Мэйн-->
		<div class="main" id="main">
			<div class="main_inner">
				<div class="main_logo">Immerse yourself in an unforgettable adventure - with us!</div>
                <?php
						$query="SELECT * FROM countrys
                        ORDER BY id DESC
                        LIMIT 1,3";
						$result=$link->query($query);
						while($country=$result->fetch_assoc()){
							echo'
                                <div class="main_nav">
                                    <div class="banner_preview_main">
                                        <img src="'.$country['img'].'" class="preview_main">
                                        <div class="banner_img_text_main">
                                            <a href="?page=hotels&id='.$country['id'].'" class="banner_link">More...</a>
                                        </div>
                                    </div>
                                    <div class="main_info">
                                        <div class="main_info_logo">'.$country['name'].'</div>
                                        <div class="main_info_text"><a href="'.$country['place'].'" class="geo"><div class="plane"></div>'.$country['place_name'].'</a></div>
                                    </div>
                                </div>
							';
						}
				?>
				</div>
			</div>
		</div>