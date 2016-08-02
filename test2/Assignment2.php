<html>
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script type="text/javascript">  
			function validateform()
			{  
				var name = document.myform.name;
				var email = document.myform.email;
				var gender = document.myform.gender;
				var contactno = document.myform.contactno;		
				var regex = /^[a-zA-Z ]*$/;		 
				var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/; 
				if (name.value == "" && email.value == "" && gender.value == "" && contactno.value == "" )
				{
					window.alert("FIELDS MISSING....");
					return false;
				}
				else if ((regex.test(name.value)) || (name.value == ""))
				{
					window.alert("Please enter your name.");
					name.focus();
					return false;
				}
				else if ((emailPattern.test(email.value)) && (email.value == ""))
				{
					window.alert("Please enter an e-mail address.");
					email.focus();
					return false;
				}
				else if ((isNaN(phone)) || (contactno.value.length!=10) || (contactno.value == ""))
				{
					window.alert("Please enter your contact details.");
					contactno.focus();
					return false;
				}	
				else if (gender.value== "") 
				{
					window.alert("Please enter your gender.");
					return false;
				}
				else
				{
					window.alert("READY TO INSERT....");
					return true ;
				}
			}
		</script>
	</head>
	<body>
		<form name="myform" method = "POST" action = "Assignment11.php" enctype="multipart/form-data" onsubmit="return validateform();">
			<table class=" table table-striped">
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Phone No:</td>
				<td><input type="text" name="contactno"></td>
			</tr>
			<tr>
				<td>E-mail:</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Gender:</td>
				<td>
					<input type="radio" name="gender" value="female">Female
					<input type="radio" name="gender" value="male">Male
				</td>
			</tr>
			<tr>
				<td>Select file</td>
				<td><input name="ufile" type="file" id="ufile" size="50"></td>
			</tr>
			<tr>
				<td align="center"><input type="submit" name="Submit" value="Submit" /></td>
			</tr>
			</table>
			
	</body>
</html>	
