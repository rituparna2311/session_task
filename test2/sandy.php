
<html>
	
	<body>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		Enter a String:	<input type="text" name= "name">
		<input type="submit" name="submit">
	</body>
</html>

<?php
			echo "<br>";
			if(isset($_POST['submit'])) 
			{
				$s=$_POST["name"];
				$s1=strrev($s);
				if($s==$s1)
				{
					echo $s." is a palindrome";
				}
				else
				{
					echo $s." is not a palindrome";
				}
			}
?>
