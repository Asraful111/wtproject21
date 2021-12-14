 

 <?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: signin.php");
	
}

?>
 
 <!--- /header ---->
 <?php include 'packageheader.php'; ?>

 <link rel="stylesheet" href="package.css">
 <div class="container">
 	<div class="holiday">

 		<h3>Package-List</h3>

 		<!--- /sikkim ---->

 		<div class="rom-btm">
 			<div class="col-md-3 room-left">
 				<img src="sikkim.jpg" class="img-responsive" alt="">
 			</div>
 			<div class="col-md-6 room-midle">
 				<h4>Package Name: Sikkim Holidays - Darjeeling & Gangtok - Himalayan Beauty Special</h4>
 				<h6>Package Type : Single Package</h6>
 				<p><b>Package Location :</b> Sikkim</p>
 				<p><b>Features</b> Free Pickup and drop facility, Free Wi-fi , Free professional guide </p>
 			</div>
 			<div class="col-md-3 room-right">
 				<h5>USD 1500</h5>
 				<a href="detailsikkim.php" class="view">Details</a>
 			</div>
 			<div class="clearfix"></div>
 		</div>

 		<!--- /Sudney ---->

 		<div class="rom-btm">
 			<div class="col-md-3 room-left">
 				<img src="Sudney.jpg" class="img-responsive" alt="">
 			</div>
 			<div class="col-md-6 room-midle">
 				<h4>Package Name: Sudney Holidays - Opera House Special</h4>
 				<h6>Package Type : Group Package</h6>
 				<p><b>Package Location :</b>Sudney</p>
 				<p><b>Features</b> Breakfast, Accommodation » Pick-up » Drop » Sightseeing</p>
 			</div>
 			<div class="col-md-3 room-right">
 				<h5>USD 4000</h5>
 				<a href="detailsudney.php" class="view">Details</a>
 			</div>
 			<div class="clearfix"></div>
 		</div>

 		<!--- /bali---->

 		<div class="rom-btm">
 			<div class="col-md-3 room-left">
 				<img src="bali.jpg" class="img-responsive" alt="">
 			</div>
 			<div class="col-md-6 room-midle">
 				<h4>Package Name: Bali Holidays - Kintamani Volcano & Waterfall Tour Special</h4>
 				<h6>Package Type : Family Package </h6>
 				<p><b>Package Location :</b>Bali</p>
 				<p><b>Features</b> Free Breakfast, Free Pick up drop facility</p>
 			</div>
 			<div class="col-md-3 room-right">
 				<h5>USD 1500</h5>
 				<a href="detailbali.php" class="view">Details</a>
 			</div>
 			<div class="clearfix"></div>
 		</div>

 		<!--- /swissparis ---->

 		<div class="rom-btm">
 			<div class="col-md-3 room-left">
 				<img src="swissparis.jpg" class="img-responsive" alt="">
 			</div>
 			<div class="col-md-6 room-midle">
 				<h4>Package Name: swissparis Holidays - Eiffel Tower and Lake Geneva Special</h4>
 				<h6>Package Type : Group Package</h6>
 				<p><b>Package Location :</b> swissparis</p>
 				<p><b>Features</b>  Round trip Economy class airfare valid for the duration of the holiday - Airport taxes - Accommodation for 3 nights in Paris and 3 nights in scenic Switzerland - Enjoy continental breakfasts every morning  </p>
 			</div>
 			<div class="col-md-3 room-right">
 				<h5>USD 7000</h5>
 				<a href="detailswissparis.php" class="view">Details</a>
 			</div>
 			<div class="clearfix"></div>
 		</div>

 		<!--- /ratarghul ---->

 		<div class="rom-btm">
 			<div class="col-md-3 room-left">
 				<img src="ratarghul.jpg" class="img-responsive" alt="">
 			</div>
 			<div class="col-md-6 room-midle">
 				<h4>Package Name: Ratarghul Holidays - Baishtilla point and Swamp Forest view point Special</h4>
 				<h6>Package Type : Family Package</h6>
 				<p><b>Package Location :</b> Ratarghul</p>
 				<p><b>Features</b> Free Pickup and drop facility, Free Wi-fi , Free professional guide </p>
 			</div>
 			<div class="col-md-3 room-right">
 				<h5>USD 300</h5>
 				<a href="detailratargul.php" class="view">Details</a>
 			</div>
 			<div class="clearfix"></div>
 		</div>


		 




 		