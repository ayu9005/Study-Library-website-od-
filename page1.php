<?php include("connections.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>php crudpower operation</title>
</head>
<body>
    <div class="container">
        <form action="#" method="POST">
        <div class="title">
            Registration form 
</div>
<div class="Form">
    <div class="input_field">
        <label>First Name</label>
        <input type="text" class="input" name="fname" required>
</div>
<div class="input_field">
        <label>Last Name</label>
        <input type="text" class="input" name="lname" required>
</div>
<div class="input_field">
        <label>Gender</label>
        <select name="gender" required>
            <option>Select</option>
            <option>Male</option>
            <option>Female</option>
</select>
</div>

<div class="input_field">
        <label>Email</label>
        <input type="text" class="input" name="email" required>
</div>
<div class="input_field">
        <label>Phone Number</label>
        <input type="text" class="input" name="phone" required>
</div>
<div class="input_field">
        <label>Address</label>
        <textarea class="textarea" name="address" required></textarea>
</div>
<div class="input_field terms">
    <label class="check">
        <input type="checkbox">
        <span class="checkmark"></span>
</label>
<p> Agree to terms and conditions</p>
</div>

<div class="input_field">
    <input type="submit" value="register" class="btn" name="register">
</div>
</div>
</form>
</div>
    </body>
</html>

<?php
if($_POST['register'])
{
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $gender= $_POST['gender'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $address= $_POST['address'];

   $query = "INSERT INTO form values('$fname','$lname','$gender','$email','$phone','$address')";
   $data = mysqli_query($conn,$query);

   if($data)
   {
   // echo "Data Inserted into Database";
   }
   else{
    echo "Failed";
   }
}

?>