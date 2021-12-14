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
                <img src="sikkim.jpg" class="img-responsive" alt="">
            </div>

            <div class="col-md-6 room-midle">
                <h2>Sikkim Holidays - Darjeeling & Gangtok - Himalayan Beauty Special</h2>
                <p><b>Package Name:</b> Sikkim Holidays</p>
                <p><b>Package Type:</b>Single Package</p>
                <p><b>Package Location :</b> Sikkim</p>
                <p><b>Features : </b> Free Pickup and drop facility, Free Wi-fi , Free professional guide </p>


                <input hidden="" type="text" name="useremail" value="tamim@gmail.com">
                <input hidden="" type="text" name="packgeid" value="7">

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
                <h5>USD 1500</h5>
            </div>

            <div>
                <h3><b>Package Details</b></h3>
                <p>
                    Darjeeling visiting | Gangtook excursion | Sikkim visting| Yumthang Valley tour | Night stay in Lachen
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