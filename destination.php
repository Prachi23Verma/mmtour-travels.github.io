<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="viewport" content="width=divice-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/destination.css">
	<link rel="stylesheet" href="database/travel.sql">
	<link rel="stylesheet" 
	href="https://use.fontawesome.com/releases/v6.4.0/css/all.css">
	<title> M.M. Tour Destinations</title>
	<style type="text/css">
		.container .box .name-text input {
			font-weight: bold;
			position: relative;
			/* display: none; */
			background: gold;
			border: 0.1rem solid black;
			top: -2rem;
			color:black;
			text-decoration: none;
			transition: 0.6s ease;
			text-align: center;
		}
		.container2 .box2 .name-text input {
			font-weight: bold;
			position: relative;
			/* display: none; */
			background: gold;
			border: 0.1rem solid black;
			top: -2rem;
			color:black;
			text-decoration: none;
			transition: 0.6s ease;
			text-align: center;
		}

		.button {
			border-radius: 0.8rem;
		}

		.button :hover {
			border-radius: 0.8rem;
			box-shadow: orange 0.3rem 0.3rem 3rem inset;
		}

		.btn {
			padding: 0.5rem 4rem;
		}

		.btn1 {
			margin: 0rem -2rem;
			padding: 0.5rem 4rem;
		}

		.btn2 {
			padding: 0.5rem 6rem;
		}

		.btn3 {
			padding: 0.5rem 3.7rem;
			margin: 0rem -0.2rem;
		}

		.btn4 {
			padding: 0.5rem 5rem;
		}

		.btn5 {
			padding: 0.5rem 2.5rem;
		}

		.container .box:hover .name-text input {
			display: block;
			top: -2rem;
		}

		.container .box .name-text input:hover {
			background-color: orange;
			box-shadow: orangered 0.3rem 0.3rem 3rem inset;
			color: #000;
			font-weight: bold;
		}
		.container2 .box2:hover .name-text input {
			display: block;
			top: -2rem;
		}

		.container2 .box2 .name-text input:hover {
			background-color: orange;
			box-shadow: orangered 0.3rem 0.3rem 3rem inset;
			color: #000;
		}
	</style>
</head>

<body>
	<!-- <div class="luck"><a href="spin.html" class="while">Book your Singapor trip      click here</a></div> -->
	<header>
      <nav class="nav">
        <img src="images/logo/mainlogo.jpeg" class="logo" alt="logo" style="height:7rem;width:7rem;border-radius:50%;">
        <div class="search">
          <form method="POST" action="info.php">
            <input type="text" name="search_p" placeholder="Search.." size="50">
        
            <input type="image" name="submit_p" src="search_icon.png" alt="Search image" style="width:2rem;height:2rem; margin-left: 3.5rem;">
          </form>
      </div>

        <div class="hamburger">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
        </div>

        <div class="nav__link hide">
          <a href="mainPage.php">home</a>
          <a href="destination.php">destination</a>
          <a href="gallery.php">testimonials</a>
          <a href="grouptour.php">grouptour</a>
          <a href="index.php">logout</a>
        </div>
      </nav>
 </header>
	<script>
	       	const hamburger = document.querySelector('.hamburger');
const navLink = document.querySelector('.nav__link');

hamburger.addEventListener('click', () => {
  navLink.classList.toggle('hide');
});
</script>
	<h1 class="heading">Places To Visite</h1>
    
	<div class="container">
		<div class="box">
			<div class="imgBox">
				
				<img src="images//destination//goa1.jpg" alt="Goa Image"   style="width: auto;height: 27rem;">
		
			</div>
			<div class="name-text name-pading1 top1">
				<h1>Goa</h1>
				<form method="POST" action="info.php">
					<input type="submit" name="goa" class="btn1 button" value="Visit">
				</form>
			</div>
		</div>
		<div class="box">
			<div class="imgBox">
				<img src="images//destination//kerala1.jpg" alt="kerla Image" style="width: auto;height: 27rem;">
			</div>
			<div class="name-text name-pading2 top1">
				<h1>Kerala</h1>
				<form method="POST" action="info.php">
					<input type="submit" name="kerala" class="btn button" value="Visit">
				</form>
			</div>
		</div>
		<div class="box">
			<div class="imgBox">
				<img src="https://1.bp.blogspot.com/-C-2d1s5wqcM/V_cfXvOv64I/AAAAAAAABI0/mfiKynBBGS0xMTgMfvc-YN8zWFjSNFObQCLcB/s1600/Darjeeling%2B%2BLure%2Bof%2BBlack%2BTea.jpg" alt="shimla Image">
			</div>
			<div class="name-text name-pading3 top1">
				<h1>Shimla manali</h1>
				<form method="POST" action="info.php">
					<input type="submit" name="shimla" class="btn button" value="Visit">
				</form>
			</div>
		</div>
		<div class="box">
			<div class="imgBox">
				<img src="images//destination//ladakh1.jpg" alt="Ladakh Image">
			</div>
			<div class="name-text name-pading4 top1">
				<h1>leh Ladakh</h1>
				<form method="POST" action="info.php">
					<input type="submit" name="ladakh" class="btn button" value="Visit">
				</form>
			</div>
		</div>
		<div class="box">
			<div class="imgBox">
				<img src="https://www.nativeplanet.com/img/2020/01/cover-1579609724.jpg" alt="Kadhmir Image">
			</div>
			<div class="name-text name-pading5 top2">
				<h1>Kashmir</h1>
				<form method="POST" action="info.php">
					<input type="submit" name="kashmir" class="btn5 button" value="Visit">
				</form>
			</div>
		</div>
		<div class="box">
			<div class="imgBox">
				<img src="https://tse3.mm.bing.net/th?id=OIP.JkxqjXcLg1H7g0JSrjv2BQHaEC&pid=Api&P=0&h=180" alt="Hyderabad Image">
			</div>
			<div class="name-text name-pading6 top2">
				<h1>Hyderabad</h1>
				<form method="POST" action="info.php">
					<input type="submit" name="hyderabad" class="btn2 button" value="Visit">
				</form>
			</div>
		</div>
		<div class="box">
			<div class="imgBox">
				<img src="https://vedicfeed.com/wp-content/uploads/2020/12/Char-Dham-Yatra.jpg" alt="Chardham Image">
			</div>
			<div class="name-text name-pading7 top2">
				<h1>Chardham</h1>
				<form method="POST" action="info.php">
					<input type="submit" name="chardham" class="btn3 button" value="Visit">
				</form>
			</div>
		</div>
		<div class="box">
			<div class="imgBox">
				<img src="http://wallpapercave.com/wp/wp1857977.jpg" alt="Shreelanka Image">
			</div>
			<div class="name-text name-pading8 top2">
				<h1>Shreelanka</h1>
				<form method="POST" action="info.php">
					<input type="submit" name="shreelanka" class="btn2 button" value="Visit">
				</form>
			</div>
		</div>
		<div class="box">
			<div class="imgBox">
				<img src="https://tse2.mm.bing.net/th?id=OIP.NWuBcYbpQpdsqjLXFdtlrAHaFj&pid=Api&P=0&h=180" alt="maldives Image">
			</div>
			<div class="name-text name-pading9 top3">
				<h1>Maldives</h1>
				<form method="POST" action="info.php">
					<input type="submit" name="maldives" class="btn3 button" value="Visit">
				</form>
			</div>
		</div>
		<div class="box">
			<div class="imgBox">
				<img src="https://tse1.mm.bing.net/th?id=OIP.TLSFmHgxBKALKpdK8afUHQHaEx&pid=Api&P=0&h=180" alt="viyatnam Image">
			</div>
			<div class="name-text name-pading10 top3">
				<h1>Viyatnam</h1>
				<form method="POST" action="info.php">
					<input type="submit" name="viyatnam" class="btn4 button" value="Visit">
				</form>
			</div>
		</div>
		<div class="box">
			<div class="imgBox">
				<img src="https://tse2.mm.bing.net/th?id=OIP.CunTUBCqRtdPPT9t5M7qEwHaEo&pid=Api&P=0&h=180" alt="UK Image">
			</div>
			<div class="name-text name-pading11 top3">
				<h1>UK</h1>
				<form method="POST" action="info.php">
					<input type="submit" name="uk" class="btn4 button" value="Visit">
				</form>
			</div>
		</div>
		<div class="box">
			<div class="imgBox">
				<img src="https://tse1.mm.bing.net/th?id=OIP.k1cUJfLyuniDkc_hVKSQVQHaE8&pid=Api&P=0&h=180" alt="US Image">
			</div>
			<div class="name-text name-pading12 top3">
				<h1>US</h1>
				<form method="POST" action="info.php">
					<input type="submit" name="us" class="btn2 button" value="Visit">
				</form>
			</div>
		</div>
	</div>



	<h1 class="heading">International Popular Places</h1>
	<div class="container2">
		<div class="box2">
			<div class="imgBox">
				<img src="https://tse3.mm.bing.net/th?id=OIP.3Fxjlo7lFCa4F50OHRZQmwHaE8&pid=Api&P=0&h=180" alt="Almaty Image" style="width: auto;height: 27rem;">
			</div>
			<div class="name-text name-pading13 top4">
				<h1>Almaty Itinerary</h1>
				<form method="POST" action="info.php">
					<input type="submit" name="almaty" class="btn1 button" value="Visit">
				</form>
			</div>
		</div>
		<div class="box2">
			<div class="imgBox">
				<img src="http://www.hdnicewallpapers.com/Walls/Big/Island/Andaman_and_Nicobar_Islands_Wallpaper.jpg" alt="Andman Image" style="width: auto;height: 27rem;">
			</div>
			<div class="name-text name-pading14 top4">
				<h1>Andman</h1>
				<form method="POST" action="info.php">
					<input type="submit" name="andman" class="btn1 button" value="Visit">
				</form>
			</div>
		</div>
		<div class=" box2">
			<div class="imgBox">
				<img src="https://tse1.mm.bing.net/th?id=OIP.sNm_a217T_ulLdylCcuZHAHaJ4&pid=Api&P=0&h=180" alt="Bali Image" style="width: 40rem;height: 27rem;">
			</div>
			<div class="name-text name-pading15 top4">
				<h1>Bali</h1>
				<form method="POST" action="info.php">
					<input type="submit" name="bali" class="btn1 button" value="Visit">
				</form>
			</div>
		</div>
		<div class="box2">
			<div class="imgBox">
				<img src="https://tse1.mm.bing.net/th?id=OIP.1Rtm1kzVE19TVhv3hOqLQAHaE6&pid=Api&P=0" alt="Dubai Image" style="width: auto;height: 27rem;">
			</div>
			<div class="name-text name-pading16 top4">
				<h1>Dubai</h1>
				<form method="POST" action="info.php">
					<input type="submit" name="dubai" class="btn1 button" value="Visit">
				</form>
			</div>
		</div>
		<div class="box2">
			<div class="imgBox">
				<img src="https://tse4.mm.bing.net/th?id=OIP.al4OOfv2hnpRYzr6CenhkgHaE7&pid=Api&P=0&h=180" alt="Batam Image" style="width: auto;height: 27rem;">
			</div>
			<div class="name-text name-pading17 top5">
				<h1>Batam</h1>
				<form method="POST" action="info.php">
					<input type="submit" name="batam" class="btn1 button" value="Visit">
				</form>
			</div>
		</div>
		<div class="box2">
			<div class="imgBox">
				<img src="https://tse1.mm.bing.net/th?id=OIP.v-e4QBJZGIwcC4LN96IXIgHaF-&pid=Api&P=0" alt="Thai Land Image" style="width: auto;height: 27rem;">
			</div>
			<div class="name-text name-pading18 top5">
				<h1>Thai Land</h1>
				<form method="POST" action="info.php">
					<input type="submit" name="thailand" class="btn1 button" value="Visit">
				</form>
			</div>
		</div>
		<div class="box2">
			<div class="imgBox">
				<img src="https://tse1.mm.bing.net/th?id=OIP.sk8xR620eiQ7uSUY_C1EBwHaEo&pid=Api&P=0" alt="singapore Image" style="width: auto;height: 27rem;">
			</div>
			<div class="name-text name-pading19 top5">
				<h1>singapore</h1>
				<form method="POST" action="info.php">
					<input type="submit" name="singapore" class="btn1 button" value="Visit">
				</form>
			</div>
		</div>
		<div class="box2">
			<div class="imgBox">
				<img src="https://tse2.mm.bing.net/th?id=OIP.XZFOPIyimnGQbe4bhzkrWQHaE4&pid=Api&P=0" alt="Paris Image" style="width: auto;height: 27rem;">
			</div>
			<div class="name-text name-pading20 top5">
				<h1>Swiss paris</h1>
				<form method="POST" action="info.php">
					<input type="submit" name="paris" class="btn1 button" value="Visit">
				</form>
			</div>
		</div>
		<div class="box2">
			<div class="imgBox">
				<img src="https://tse1.mm.bing.net/th?id=OIP.xlnw2EN_aqIkThPT_tX4swHaE8&pid=Api&P=0&h=180" alt="Phuket Image" style="width: auto;height: 27rem;">
			</div>
			<div class="name-text name-pading21 top6">
				<h1>Phuket</h1>
				<form method="POST" action="info.php">
					<input type="submit" name="phuket" class="btn1 button" value="Visit">
				</form>
			</div>
		</div>
		<div class="box2">
			<div class="imgBox">
				<img src="https://tse2.mm.bing.net/th?id=OIP.dCff3nDD91dBWYLVd93DjAHaDq&pid=Api&P=0&h=180" alt="Malayshia Image" style="width: auto;height: 27rem;">
			</div>
			<div class="name-text name-pading22 top6">
				<h1>Malayshia</h1>
				<form method="POST" action="info.php">
					<input type="submit" name="malayshia" class="btn1 button" value="Visit">
				</form>
			</div>
		</div>
		<div class="box2">
			<div class="imgBox">
				<img src="https://balitripplanner.com/wp-content/uploads/2020/12/best-moments-for-honeymoon-trip-1400x1750.jpg" alt="Honeymoon Image" style="width: 40rem;height: 27rem;">
			</div>
			<div class="name-text name-pading23 top6">
				<h1>Honeymoon spacial</h1>
				<form method="POST" action="info.php">
					<input type="submit" name="honeymoon" class="btn1 button" value="Visit">
				</form>
			</div>
		</div>
		<div class="box2">
			<div class="imgBox">
				<img src="https://www.darjeeling-tourism.com/darj_i000387.jpg" alt="Dejeeling Image" style="width: auto;height: 27rem;">
			</div>
			<div class="name-text name-pading24 top6">
				<h1>Darjeeling</h1>
				<form method="POST" action="info.php">
					<input type="submit" name="darjeeling" class="btn1 button" value="Visit">
				</form>
			</div>
		</div>
	</div>
</body>


</html>