<!DOCTYPE HTML>
<?php session_start(); ?>
<html>
	<head>
		<title>카페드림 | EricaCafe</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<link rel="stylesheet" type="text/css" href="cafe_info.css">
		<link rel="shortcut icon" type="image/png" href="../favicon.png" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-loading">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

					<header id="header" style="padding-bottom: 50px;">
						<a href="../cafe.php" class="logo">Cafe Finder</a>
					</header>

				<div id="main">

					<section class="post">
						<!-- 즐겨찾기 -->
						<?php
							if(isset($_SESSION['user_id'])){
								$db = new PDO("mysql:dbname=ericacafe; host=localhost; port=3306", "root", "a12345");
								$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
								$rows = $db->query("SELECT * FROM user_favorite");
								$result = $rows->fetchAll();
		
								$flag = 0;
		
								for($i = 0; $i<count($result); $i++){
									if($result[$i]["id"] == $_SESSION['user_id'] and $result[$i]["cafe"] == "cafe_20"){
										$flag = 1;
										echo "<form action=\"../delFav.php\" method=\"post\">
													<button type='submit' name='del' id='del' value='cafe_20'>Delete Bookmark</button>
											  </form>";
									break;
									}
								}
								if($flag != 1){
									echo "<form action=\"../addFav.php\" method=\"post\">
												<button type='submit' name='add' id='add' value='cafe_20'>Add Bookmark</button>
										  </form>";
								}
							}
						?>	
					  	<header class="major">
					  		<h1>카페드림 학생복지관점</h1>
					  		<h3>cafe dream</h3>
					  	</header>

						<div class="basic_info">
							<h2 style="font-size: 35px;">Details</h2>

							<img src="icon/location.png" width="30px" height="30px"><strong>Location</strong>
						  	<p>경기 안산시 상록구 한양대학로 55 학생복지관 1층 (우)15588</p>
							<p>지번 : 사동 1271</p>
							<div></div>

						  	<img src="icon/clock.png" width="30px" height="30px"><strong>Business hours</strong>
						  	<div></div>

						  	<img src="icon/website.png" width="30px" height="30px"><strong>Website</strong>
						  	<p><a href="http://www.cafedream.co.kr/" title="cafedream">www.cafedream.co.kr</a></p>
						  	<div></div>

						  	<img src="icon/call.png" width="30px" height="30px"><strong>Call</strong>
						  	<p>031-400-4541</p>

						</div>

						<div class="menu_info">
						  	<h2 style="font-size: 35px;">Menu</h2>

						  	<ul>
						  		<li>
						  			<strong>아메리카노
						  			・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・ 
						  			<div class="price">4,000</div></strong>
						  		</li>
						  		<li>
						  			<strong>카페모카
						  			・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・ 
						  			<div class="price">4,500</div></strong>
						  		</li>
						  		<li>
						  			<strong>카라멜 마끼아또
						  			・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・ 
						  			<div class="price">5,000</div></strong>
						  		</li>
						  		<li>
						  			<strong>카라멜 라떼
						  			・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・・ 
						  			<div class="price">4,000</div></strong>
						  		</li>
						  		<strong>* ice 음로 기준 가격입니다!</strong>
						  	</ul>


							<div style="margin-left: 20px;">
						  		<a href="http://www.cafedream.co.kr/?module=Board&action=SiteBoard&iBrdNo=1&sMode=SELECT_FORM"><strong>Detail menu ▶</strong></a>	
						  	</div>

						</div>

					</section>

				</div>
  


				
			  <!-- Copyright -->
				<div id="copyright">
					<ul><li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">디자인</a></li></ul>
				</div>
  
			</div>
				


		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>

	</body>
</html>