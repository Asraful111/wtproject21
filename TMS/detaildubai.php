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
                <img src="dubai.jpg" class="img-responsive" alt="">
            </div>

            <div class="col-md-6 room-midle">
                <h2>Dubai Holidays - Bhuj khalifa Special</h2>
                <p><b>Package Name:</b> Dubai Holidays</p>
                <p><b>Package Type:</b> Group Package</p>
                <p><b>Package Location :</b> Dubai </p>
                <p><b>Features : </b> Free Breakfast, Free Pick up drop facility </p>


                <input hidden="" type="text" name="useremail" value="taskin@gmail.com">
                <input hidden="" type="text" name="packgeid" value="2">

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
                <h5>USD 5000</h5>
            </div>

            <div>
                <h3><b>Package Details</b></h3>
                <p>
                    Dubai City visiting | Bhuj khalifa visiting | Jam jam tower visiting.
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