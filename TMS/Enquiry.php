<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Tourism Management System</title>
    <link rel="stylesheet" href="Enquiry.css">
</head>
<body>
   <!---header--->
   <?php include'header.php';?>
  
<div class="formpage">
    <h1 style="text-decoration: none; color:#209db3;">Enquiry Form</h1>
    <form id="formaction" method="post">
      
      <div class="formfield"><label>Full Name  <input type="text" id="name"  name="name"></<label>
      <label>E-mail <input type="email" id="email" name="email"></label>
      <label>Phone Number  <input type="text" id="phone" name="phone"></label>
      <label>Subject  <input type="text" id="subject" name="subject"></label>
      <label>Discription <textarea name="comment" id="comment" rows="7" cols="60"></textarea></label></div>
      <div class="submitbutton"><input type="submit" id="submit" name="submit"></div>
      
    </form>
</div>

  <script type="text/javascript">
    let form=document.getElementById('formaction');
    let name=document.getElementById('name');
    let email=document.getElementById('email');
    let phone=document.getElementById('phone');
    let subject=document.getElementById('subject');
    let comment=document.getElementById('comment');

    form.addEventListener('submit', (event) => {
      if (name.value=='') {
        alert("Input your name.");
      }
      else if (email.value=='') {
        alert("Input your email.");
      }
      else if (phone.value=='') {
        alert("Input your phone.");
      }
      else if (subject.value=='') {
        alert("Input your subject.");
      }
      else if (comment.value=='') {
        alert("Input your comment.");
      }
      else{
        form.action="validation.php";
      }

    });
  </script>

    <!--- /footer ---->
    <?php include'footer.php';?>
    
</body>
</html>