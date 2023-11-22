<div class="banner_f">
			<div class="banner_inner_f">
				<div class="banner_logo_f">Online-application</div>
				
				<?php
						if(isset($_GET['id'])){
							$get_id=$_GET['id'];
							$query4="SELECT * FROM hotels WHERE id='$get_id'";
							$result=$link->query($query4);
							$hotels=$result->fetch_assoc();
							echo'

					<form method="POST" name="add_form">

					<div class="banner_form1">
						<div class="input1">
							Your number or mail<br>
							<input type="text" class="name" placeholder="Enter" name="name">
						</div>
						<div class="input2">
							Number of person<br>
							<input type="number" class="old"  placeholder="1" name="number_of_person" min="1" max="2">
						</div>
					</div>
					<div class="line">
					
						<div class="line1"></div>
						<div class="line2"></div>
					</div>
					<div class="banner_form2">
						<div class="logo">Тариф</div>
						<div class="nav1">
							<div class="radio_name">
								<div class="radio_name1">
									<input type="radio" value="'.$hotels['standart'].'" class="radio" name="rate">
								</div>
								<div class="radio_name2"></div>
								Standart
								</div>
							<div class="price">'.$hotels['standart'].'</div>
						</div>
						<div class="nav1">
							<div class="radio_name">
								<div class="radio_name1">
									<input type="radio"  value="'.$hotels['comfort'].'" class="radio" name="rate">
								</div>
								<div class="radio_name2"></div>
								Comfort
								</div>
							<div class="price">'.$hotels['comfort'].'</div>
						</div>
						<div class="nav1">
							<div class="radio_name">
								<div class="radio_name1">
									<input type="radio"  value="'.$hotels['elite'].'" class="radio" name="rate">
								</div>
								<div class="radio_name2"></div>
								Elite
								</div>
							<div class="price">'.$hotels['elite'].'</div>
						</div>
					</div>
					<div class="banner_form3">
						Tour date: <input type="date" class="calendar" min="2023-01-26" name="datestour"><br>	
						<div class="line3"></div>
						<br>
						Amount of day: <input type="number" class="date" placeholder="7 - days" name="amount_of_day" max="7"><br>
						<div class="line3"></div>
					</div>
					<div class="banner_form4">
						<div class="comment">
							Comment:<br>
							<input type="text" class="comment" placeholder="Write your comment here" name="comment">
							<div class="line4"></div>
						</div>
					</div>
					<div class="submit">
						<input type="submit" placeholder="Submit an application" class="button" name="add_form">
					</div>

					</form>
					';}
					if(isset($_GET['id'])){
						$get_id=$_GET['id'];
					}
					
					if (isset($_POST['add_form'])) {
						$name = $_POST['name'];
						$number_of_person = $_POST['number_of_person'];
						$rate = $_POST['rate'];
						$date = $_POST['datestour'];
						$amount_of_day = $_POST['amount_of_day'];
						$comment = $_POST['comment'];
						$hotels_id = $get_id;
						
					
						$query5 = "INSERT INTO clients (name,number_of_person,rate,datestour,amount_of_day,comment,hotels_id) 
							VALUE ('$name','$number_of_person','$rate','$date','$amount_of_day','$comment','$hotels_id')";
						$link->query($query5);
					
						echo '<div class="message">Новость была успешно опубликована!</div>';}
						?>
				</div>
			</div>
		</div>