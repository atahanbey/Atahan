<?php
setcookie("cookie_name","cookie_value",["samesite"=>"None"]);
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gelen Kutusu</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/fd62530fb9.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="cssdosyalari/mesajlarstyle.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
		<link rel="shortcut icon" type="image/jpg" href="img/fartech.png"/>
		<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    </head>
    <body>
        <div class="sidebar">
            <div class="sidebarLogo">
                <a href="main.php" class="logo">
                    <b>
                        FAR-<span id="TECH">TECH</span>
                    </b>
                </a>
            </div>
			<div class="profile">
				<img id="profile-pic" src="<?php echo $_SESSION["resim"] ?>">
				<span>
				<?php 
				$ad =$_SESSION["ad"];
				$soyad =$_SESSION["soyad"]; 
				echo $ad." ".$soyad;
				?>
				</span>
			</div>
			<ul class="side-menu">
				<li class="menu">
					<a href="main.php">
						<i class="fas fa-home"></i>
						<span>Ana Sayfa</span>
					</a>
				</li>
				<li class="menu">
					<a href="calisanlar.php">
						<i class="fas fa-briefcase"></i>
						<span>Personeller</span>
					</a>
				</li>
				<li class="menu">
					<a href="musteriler.php">
						<i class="fas fa-user"></i>
						<span>Müşteriler</span>
					</a>
				</li>
				<li class="menu">
					<a href="departmanlar.php">
						<i class="fas fa-city"></i>
						<span>Departmanlar</span>
					</a>
				</li>
				<li class="menu">
					<a href="gorevler.php">
						<i class="fas fa-tasks"></i>
						<span>Görevler</span>
					</a>
				</li>
			</ul>
			
        </div>
        <div class="content">
			<header class="header">
				<ul class="navbar">	
					<li class="navbar-item">
						<a href="mesajlar.php">
							<i class="fas fa-inbox"></i>
							<span class="bell-span">5</span>
						</a>

						
					</li>
				</ul>
				<a id="logout" href="index.php">Çıkış Yap</a>
			</header>
			<div class="mailContainer">
				<div class="emailInfo">
					<a id="mail-create" href="emailCreate.php"><i class="fa fa-pencil"></i>Mail Gönder</a>
					<ul class="email-navbar">
						<li class="li-inbox"><a href="mesajlar.php" ><i class="fa fa-inbox"></i>Gelen Kutusu<span>5</span></a></li>

						<li class="li-inbox"><a href="gidenMesajlar.php" ><i class="fa fa-inbox"></i>Giden Kutusu<span>3</span></a></li>

						<li class="li-inbox"><a href="onemliMesajlar.php"><i class="fas fa-exclamation"></i>Önemli Postalar<span>1</span></a></li>




					</ul>
				</div>
				<div class="inboxContainer">
					<div class="inbox-header">
						<span>Gelen Kutusu (5)</span>
					</div>
					<div class="inbox-body">
						<div class="mail-options">
						
							<div class="check-container">
								<input type="checkbox" id="check-mail" name="checkall" value="">
							</div>
							<div class="refresh-container">
								<a href="mesajlar.php"><i class=" fa fa-refresh"></i></a>
							</div>
						</div>
						<div class="mail-box">
							<table class="mail-table">
								<tr>
									<td>
										<a href="#"><input type="checkbox" class="mail-checkbox1"></a>
									</td>
									<td>
										<a href="#"><i class="fa fa-star mail-star"></i></a>
									</td>
									<td>
										<a href="#" class="mail-text">Ömer YILMAZ</a>
									</td>
									<td>
										<a href="#" class="mail-text">Yönetim kurulu toplantısı haftaya olacak.</a>
									</td>
									<td class="mail-paperclip">
										<a href="#"><i style="color:red;" class="fas fa-exclamation"></i><a>
									</td>
									<td class="mail-clock"><a href="#">12:30<a></td>
								</tr>
								<tr>
									<td>
										<a href="#"><input type="checkbox" class="mail-checkbox"></a>
									</td>
									<td>
										<a href="#"><i class="fa fa-star mail-star"></i></a>
									</td>
									<td>
										<a href="#" class="mail-text">Tayfun DAĞCI</a>
									</td>
									<td>
										<a href="#" class="mail-text">Merhaba Faruk Bey, bu hafta izin alabilir miyim? Kendimi çok hasta hissediyorum. COVID-19 testi olacağım.</a>
									</td>
									<td class="mail-paperclip">
										<a href="#"><a>
									</td>
									<td class="mail-clock"><a href="#">21 Aralık 2023<a></td>
								</tr>
								<tr>
									<td>
										<a href="#"><input type="checkbox" class="mail-checkbox"></a>
									</td>
									<td>
										<a href="#"><i class="fa fa-star mail-star"></i></a>
									</td>
									<td>
										<a href="#" class="mail-text">Merve YILMAZ</a>
									</td>
									<td>
										<a href="#" class="mail-text">Bu ayki satış gelirimiz hedeflenen gelirin altında. En yakın zamanda toplantı düzenlememiz gerek. </a>
									</td>
									<td class="mail-paperclip">
										<a href="#"><i class="fa fa-paperclip"></i><a>
									</td>
									<td class="mail-clock"><a href="#">20 Aralık 2023<a></td>
								</tr>
								<tr>
									<td>
										<a href="#"><input type="checkbox" class="mail-checkbox"></a>
									</td>
									<td>
										<a href="#"><i class="fa fa-star mail-star"></i></a>
									</td>
									<td>
										<a href="#" class="mail-text">LinkedIn</a>
									</td>
									<td>
										<a href="#" class="mail-text">İş arayışına hazırlanmak için bir iş ilanı uyarısı oluşturun.</a>
									</td>
									<td class="mail-paperclip">
										<a href="#"><a>
									</td>
									<td class="mail-clock"><a href="#">18 Aralık 2023<a></td>
								</tr>
								<tr>
									<td>
										<a href="#"><input type="checkbox" class="mail-checkbox"></a>
									</td>
									<td>
										<a href="#"><i class="fa fa-star mail-star"></i></a>
									</td>
									<td>
										<a href="#" class="mail-text">Facebook</a>
									</td>
									<td>
										<a href="#" class="mail-text">Yeni arkadaşlık isteği</a>
									</td>
									<td class="mail-paperclip">
										<a href="#"><a>
									</td>
									<td class="mail-clock"><a href="#">15 Aralık 2023<a></td>
								</tr>
								<tr class="read-mail">
									<td>
										<a href="#"><input type="checkbox" class="mail-checkbox1"></a>
									</td>
									<td>
										<a href="#"><i class="fa fa-star mail-star"></i></a>
									</td>
									<td>
										<a href="#" class="mail-text1">Facebook</a>
									</td>
									<td>
										<a href="#" class="mail-text1">Büşra ACAR duvarında bir şey paylaştı.</a>
									</td>
									<td class="mail-paperclip1">
										<a href="#"><a>
									</td>
									<td class="mail-clock1"><a href="#">9 Aralık 2023<a></td>
								</tr>
								<tr class="read-mail">
									<td>
										<a href="#"><input type="checkbox" class="mail-checkbox1"></a>
									</td>
									<td>
										<a href="#"><i class="fa fa-star mail-star1"></i></a>
									</td>
									<td>
										<a href="#" class="mail-text1">FAR-TECH</a>
									</td>
									<td>
										<a href="#" class="mail-text1">Şifrenizi başarıyla güncellediniz.</a>
									</td>
									<td class="mail-paperclip1">
										<a href="#"><i class="fa fa-paperclip"></i><a>
									</td>
									<td class="mail-clock1"><a href="#">11 Kasım 2023<a></td>
								</tr>
								<tr class="read-mail">
									<td>
										<a href="#"><input type="checkbox" class="mail-checkbox1"></a>
									</td>
									<td>
										<a href="#"><i class="fa fa-star mail-star1"></i></a>
									</td>
									<td>
										<a href="#" class="mail-text1">Umut	BİROL</a>
									</td>
									<td>
										<a href="#" class="mail-text1">Gelecekte planlanan projeler hakkında</a>
									</td>
									<td class="mail-paperclip1">
										<a href="#"><i class="fa fa-paperclip"></i><a>
									</td>
									<td class="mail-clock1"><a href="#">2 Kasım 2023<a></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
        </div>
        
    </body>
</html>