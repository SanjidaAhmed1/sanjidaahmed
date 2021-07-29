<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8">
<title>JavaScript  Validation using a sample registration form</title>
<meta name="keywords" content="example, JavaScript  Validation, Sample registration form" />
<meta name="description" content="This document is an example of JavaScript Validation using a sample registration form. " />
<link rel='stylesheet' href='js-validation.css' type='text/css' />
<script src="sample-registration-form-validation.js"></script>
</head>
<body onload="document.registration.userid.focus();">
<h1>Registration Form</h1>
Use tab keys to move from one input field to the next.
<form name='registration' onSubmit="return formValidation();">
<ul>
<li><label for="passid">Password:</label></li>
<li><input type="password" name="passid" size="12" /></li>

<li><label for="username">Name:</label></li>
<li><input type="text" name="username" size="50" /></li>

<li><label for="address"> Parmanent Address:</label></li>
<li><input type="text" name="address" size="50" /></li>

<li><label for="address"> Present Address:</label></li>
<li><input type="text" name="address" size="50" /></li>

<li><label for="email">Email:</label></li>
<li><input type="text" name="email" size="50" /></li>

<li><label for="Dob">Date of birth:</label></li>
<li><input type="date" name="birthday" class="error" /></li>

<li><label id="gender">Gender:</label></li>
<li><input type="radio" name="msex" value="Male" /><span>Male</span></li>
<li><input type="radio" name="fsex" value="Female" /><span>Female</span></li>

<li><label for="religion">religion:</label></li>
<li><select name="religion">
<option selected="" value="Default">(Please select your religion)</option>
<option value="Islam">Islam</option>
<option value="Hindus">Hindus</option>
<option value="Others">Others</option>


<li><input type="submit" name="submit" value="Submit" /></li>
</ul>
</form>
</body>
</html>