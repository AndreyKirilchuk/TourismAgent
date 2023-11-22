<?php
	session_start();
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Tourism Agent</title>
		<link rel="stylesheet" href="index.css">
		<meta charset="utf-8">
		<style>
			html{
				scroll-behavior:smooth;
			}
			body {
                    display: block;
                    margin: 0px;
                }
		</style>
	</head>
		<script>
			function getCookie(name) {
				let matches = document.cookie.match(new RegExp(
				"(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
				));
				return matches ? decodeURIComponent(matches[1]) : undefined;
			}

			const handleChange = (isChecked) => {
				if (isChecked) {
					document.body.setAttribute('white', '');
					document.cookie = "theme=dark";
				} else {
					document.body.removeAttribute('white');
					document.cookie = "theme=white";
				}
			}

				// Устанавливаем тему при загрузке страницы
				const theme = getCookie('theme');
				if (theme === 'dark') {
					document.body.setAttribute('dark', '');
				}

		</script>
	<body>
		<?php
			$host='localhost';
			$db_name='z611';
			$login='z611';
			$pass='HPyhHDAcPWp3DpwX';
			$link=new mysqli($host,$login,$pass,$db_name);
			include('incl/header.php');
			if(isset($_GET['page'])){
				if ($_GET['page'] == 'trend') {include('incl/trend.php');}
				if ($_GET['page'] == 'hotels') {include('incl/hotels.php');}
				if ($_GET['page'] == 'hotel') {include('incl/hotel.php');}
				if ($_GET['page'] == 'form') {include('incl/form.php');}
				if ($_GET['page'] == 'all_hotels') {include('incl/all_hotels.php');}
				if ($_GET['page'] == 'about') {include('incl/about.php');}
				if ($_GET['page'] == 'conventor') {include('incl/conventor.php');}
				if ($_GET['page'] == 'conventor_Usd_to_Rub') {include('incl/conventor_Usd_to_Rub.php');}
				if ($_GET['page'] == 'conventor_Rub_to_Usd') {include('incl/conventor_Rub_to_Usd.php');}
			}else{
				include('incl/main.php');
			}
			include('incl/footer.php');
		?>

		
	</body>
</html>