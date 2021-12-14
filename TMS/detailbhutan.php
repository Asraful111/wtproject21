<!--- /header ---->
<?php include 'packageheader.php'; ?>


<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="pckdetail.css">
<link rel="stylesheet" href="package.css">

</section>


<form method="post" action="bookingcontroller.php">


<div class="selectroom_top"> 
    <div class="container">
        <div class="col-md-3 room-left">
            <img src="bhutan.jpg" class="img-responsive" alt="">
        </div>

        <div class="col-md-6 room-midle">
            <h2>Bhutan Holidays - Thimphu and Paro Special</h2>
            <p><b>Package Name:</b> Bhutan Holidays</p>
            <p><b>Package Type:</b> Family Package</p>
            <p><b>Package Location :</b> Bhutan</p>
            <p><b>Features : </b> Free Breakfast, Free Pickup and drop facility </p>
         
            <input hidden="" type="text" name="useremail" value="testuser@gmail.com">
            <input hidden="" type="text" name="packgeid" value="1">
          
            <div class="birthdayfrom">
                <label for="birthday">From:</label>
                <input type="date" id="birthday" class="birthdayfrom" name="fromdate">
            </div>

            <div class="birthdayto">
                <label for="birthday">To:</label>
                <input type="date" id="birthday" class="birthdayto" name="todate">
            </div>
        </div>

        <div class="col-md-3 room-right">
            <p>Grand Total</p>
            <h5>USD 2000</h5>
        </div>

        <div>
            <h3><b>Package Details</b></h3>
            <p>
            Changu Lakeand New Baba Mandir excursion | Thimphu and Paro visting| Yumthang Valley tour | Gurudongmar Lake excursion | Night stay in Lachen
            </p>
        </div>

        <div class="selectroom_top">
            <div class="container comment01">
                <h2>Travels</h2>
                <br>

                <label class="inputLabel">Comment</label><br>
                <input class="special" type="text" name="comment" required="">
                
                <h5> <input type="submit" name="submit" value="Book" class="submit-btn"></h5>
                
        </div>

</form>

</body>
</html>