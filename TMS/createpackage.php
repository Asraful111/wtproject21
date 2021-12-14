   <!-----adminheader----->
   <?php include 'adminheader.php'; ?>
   <!-----CSS ----->
   <link rel="stylesheet" href="my.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>

   <body>

     <div class="con">
       <div class="grid-form1">
         <h3> Create Package </h3>

         <form id="formaction" method="post">
         <div class="row">
           <div class="col-25">
             <label for="focusedinput">Package Name</label>
           </div>
           <div class="col-75">
             <input type="text" id="pname" name="PackageName" placeholder="Create Package">
           </div>
         </div>
         <div class="row">
           <div class="col-25">
             <label for="focusedinput">Package Type</label>
           </div>
           <div class="col-75">
             <input type="text" id="ptype" name="PackageType" placeholder="Package Type - Family Package / Couple Package">
           </div>
         </div>
         <div class="row">
           <div class="col-25">
             <label for="focusedinput">Package Location</label>
           </div>
           <div class="col-75">
             <input type="text" id="plocation" name="PackageLocation" placeholder="Package Location">
           </div>
         </div>

         <div class="row">
           <div class="col-25">
             <label for="focusedinput">Package Price in USD</label>
           </div>
           <div class="col-75">
             <input type="text" id="pprize" name="PackagePrice" placeholder="Package Price in USD">
           </div>
         </div>
         <div class="row">
           <div class="col-25">
             <label for="focusedinput">Package Features</label>
           </div>
           <div class="col-75">
             <input type="text" id="pfeatures" name="PackageFetures" placeholder="Package Features -free Pickup-drop facility">
           </div>
         </div>
       </div>


       <div class="row">
         <div class="col-25">
           <label for="focusedinput">Package Details</label>
         </div>
         <div class="col-75">
           <textarea id="pdeatils" name="PackageDetails" placeholder="Package Details." style="height:200px"></textarea>
         </div>
       </div>

       <div class="row">
         <div class="col-25">
           <label for="focusedinput"></label>
         </div>

         <div class="btn">
           <input type="submit" value=" Create" name="submit">
         </div>

       </div>

     </div>

  </form>

  <script type="text/javascript">
    let form=document.getElementById('formaction');
    let PackageName=document.getElementById('pname');
    let PackageType=document.getElementById('ptype');
    let PackageLocation=document.getElementById('plocation');
    let PackagePrice=document.getElementById('pprize'); 
    let PackageFetures=document.getElementById('pfeatures');
    let PackageDetails=document.getElementById('pdeatils');   

    form.addEventListener('submit', (event) => {
      if (PackageName.value=='') {
        alert("Input your PackageName.");
      }
      else if (PackageType.value=='') {
        alert("Input your PackageType.");
      }
      else if (PackageLocation.value=='') {
        alert("Input your PackageLocation.");
      }
      else if (PackagePrice.value=='') {
        alert("Input your PackagePrice.");
      }
      else if (PackageFetures.value=='') {
        alert("Input your PackageFetures.");
      }
      else if (PackageDetails.value=='') {
        alert("Input your PackageDetails.");
      }          
      else{
        form.action="creatvali.php";
      }

    });
  </script>
     <!-----footer----->
     <?php include 'footer.php'; ?>
   </body>

   </html>