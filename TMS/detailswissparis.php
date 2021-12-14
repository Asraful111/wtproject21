<!--- /header ---->
<?php include 'packageheader.php'; ?>
<!--- /css ---->
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="pckdetail.css">
<link rel="stylesheet" href="package.css">

</section>

<form method="post" action="bookingcontroller.php">

    <div class="selectroom_top">
        <div class="container">
            <div class="col-md-3 room-left">
                <img src="swissparis.jpg" class="img-responsive" alt="">
            </div>

            <div class="col-md-6 room-midle">
                <h2> Swissparis Holidays - Eiffel Tower and Lake Geneva Special</h2>
                <p><b>Package Name:</b> Paris Holidays</p>
                <p><b>Package Type:</b> Group Package</p>
                <p><b>Package Location :</b> SwissParis </p>
                <p><b>Features : </b> Round trip Economy class airfare valid for the duration of the holiday - Airport taxes - Accommodation for 3 nights in Paris and 3 nights in scenic Switzerland - Enjoy continental breakfasts every morning - Enjoy 5 Indian dinners in Mainland Europe - Exp </p>


                <input hidden="" type="text" name="useremail" value="jamal@gmail.com">
                <input hidden="" type="text" name="packgeid" value="8">

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
                <h5>USD 7000</h5>
            </div>

            <div>
                <h3><b>Package Details</b></h3>
                <p>
                    Eiffel Tower excursion | Lake Geneva visting| 3 nights in Paris and 3 nights in scenic Switzerland | Night stay in Paris
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