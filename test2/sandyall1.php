<html>
<head>
	<title></title>
</head>
<body>
<form name="frm" action="" method="POST">
	<label>Please enter odd value:</label>
	<input type="number" name="odd" placeholder="Enter odd Number only" value="<?php if(isset($_POST)){ echo $_POST['odd']; }?>" required>
	<input type="submit" name="submit" value="OK">
</form>

<?php

if($_POST){
	$n=$_POST['odd'];
//$t=($n+1)/2;



  for($i=1;$i<=$n;$i++)
    {
        for($j=1;$j<=($n-$i);$j++)
        {
            echo "&nbsp";
            echo "&nbsp";
        }
        for($k=1;$k<($i*2);$k++)
        {
                echo "*";
                echo "&nbsp";
                
        }
        echo "<br>";
    }
    for($i=($n-1);$i>=1;$i--)
    {
        for($j=$n;$j>$i;$j--)
        {
                echo "&nbsp";
                echo "&nbsp";
        }
        for($k=1;$k<($i*2);$k++)
        {
                echo "*";
                echo "&nbsp";
        }
        echo "<br>";
	}
}
?>
</body>
</html>
