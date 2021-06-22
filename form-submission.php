<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
 $FnameErr = $LnameErr = $emailErr = $genderErr = $docErr = $usernameErr = $passwordErr = "";
$Fname = $Lname = $email = $gender = $doc =  $username = $password = " ";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Fname"])) {
    $FnameErr = "First Name is required";
  } else {
    $Fname = test_input($_POST["Fname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$Fname)) {
      $FnameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["Lname"])) {
    $LnameErr = "Last Name is required";
  } else {
    $name = test_input($_POST["Lname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$Lname)) {
      $LnameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
    
      }
  if (empty($_POST["doc"])) {
    $docErr = "Date of birth is required";
  } else {
    $doc = test_input($_POST["doc"]);
    
      
      
  }
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  
  
  if (empty($_POST["username"])) {
    $usernameErr = "UserName is required";
  } else {
    $username = test_input($_POST["username"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $usernameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
    
    }
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<p><span class="error"><h3>Form Submission</h3></span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    <fieldset>
    <legend><label>***Basic Information***</label></legend>
  First Name: <input type="text" name="Fname">
  <span class="error">* <?php echo $FnameErr;?></span>
  <br><br>
  Last Name: <input type="text" name="Lname">
  <span class="error">* <?php echo $LnameErr;?></span>
  
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>

  Date of Birth: <input type="date" name="doc"
            min="1990-01-01" max="2050-12-31">
            <span class="error">* <?php echo $docErr;?></span>

       <br><br> 
        Select Religion: 
           <select>  
           <option value = "Islam"> Islam  
           </option>  
           <option value = "Hindus"> Hindus   
           </option>  
           <option value = "Others"> Others  
           </option> 
       </select>

       </fieldset>
       <br><br>
    <fieldset>
      <legend><label>***Contact Information***</label></legend>

Present Address:
    <textarea id="comment1" name="comment1"></textarea>

    <br><br>

Permanent Address:</label>
    <textarea id="comment2" name="comment2"></textarea>

    <br><br>
    
    Phone Number:      <input type="tel" id="phone" name="phone"

    <br><br>
    
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <a href="your website link">Visit Github Account!</a>

  <br><br>
  
   
  </fieldset>
  <br><br>

  <fieldset>
    <legend><label>***Account Information***</label></legend>
    UserName: <input type="text" name="username">
  <span class="error">* <?php echo $usernameErr;?></span>
  
  <br><br>
  
  Password: <input type="password"  name="password">
    <span class="error">* <?php echo $passwordErr;?></span>

  </fieldset>
    <input type="submit" name="submit" value="Submit"> 


</form>




</body>
</html>