<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Registration Form</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>   
<div class="main">
<div class ="register">
	 <div class="logo">
	 <img src="logo.jpg">
	 </div>
<h2>हिन्दी दिवस </h2>
<form id="register" method="post" action=""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<div class="col-25">
<label>नाम ( User Name)</label>
</div>
<br>
<div class="col-75">
<input type="text" name="uname" id="name" required >          
</div>
<br><br>
<div class="col-25">
<label>अणुडाक(Email)</label>
</div>
<br>
<div class="col-75">
<input type="text"  name="email" id="name" required >
</div>
<br><br>
<div class="col-25">
<label>संपर्क सूत्र (Mobile No.)</label>
</div>
<br>
<div class="col-75"><input type="tel"  name="Mobile No." id="name">
</div>
<br><br>
<div class="col-25">
<label>अनुक्रमांक (Scholar No.)</label>
</div>
<br>
<div class="col-75">
<input type="text" name="Scholar No." id="name">
</div>
<br><br>
<div class="col-25">
<label>विभाग (Department)</label>
</div>
<br>
<div class="col-75">
<input type="text" name="department" id="name">
</div>
<br><br>
<div class="col-25">
<label>महाविद्यालय (College)</label>
</div>
<br>
<div class="col-75">
<input type="text" name="college"  id="name" value="" required >
</div>
<br><br>
<div class="col-25">
<label>प्रतियोगिता : </label>
</div>
<br>
<input type="checkbox" name="event" id="abhivyakti" >
<span id="abhivyakti">  अभिव्यक्ति </span>
<input type="checkbox" name ="event" id="dristikon">
<span id="dristikon">  दृष्टिकोण </span>
<br><br>
   <div class="modal-footer">
 <button type="button" class="btn-default" data-dismiss="modal">बंद करें</button>
 <button name="submit" id="submit" value="submit" type="submit" class="btn-primary">पंजीयन करें</button>
            </div>
</form>




</div>
</div>
<?php
$nameErr=$emailErr=$mobErr=$sclarErr=$departErr=$collegeErr="";
$name=$email=$mobile=$scholar=$department=$college="";

 if(emptyif ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "कृपया अपना नाम (User Name) भरें!";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
if (empty($_POST["email"])) {
    $emailErr = "कृपया सही अणुडाक (Email) भरे ! ";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
if(empty($_POST["moblie"])
{
 $moblie="";
}
else
{
$moblie=test_input($_POST["mobile"]);
}
if(empty($_POST["scholar"])
{
 $scholar="";
}
else
{
$scholar=test_input($_POST["scholar"]);
}
if(empty($_POST["department"])
{
 $department="";
}
else
{
$department=test_input($_POST["department"]);
}
if (empty($_POST["college"])) {
    $collegeErr = "कृपया अपना महाविद्यालय (college/school) भरें!";
  } else {
    $college = test_input($_POST["college"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$college)) {
      $collegeErr = "Only letters and white space allowed";
    }
  }
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
</body>
</html>