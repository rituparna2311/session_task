<html>
<head>
	<title></title>
</head>
<body>
<form name="frm" action="" method="POST">
	<label>Please enter value:</label>
	<input type="number" name="odd" placeholder="Enter Number only" value="<?php if(isset($_POST)){ echo $_POST['odd']; }?>" required>
	<input type="submit" name="submit" value="OK">
</form>
<form name="frm1" action="" method="POST">
	<label>Please enter Range:</label>
	<input type="number" name="odd1" placeholder="Enter Number only" value="<?php if(isset($_POST['odd1'])){ echo $_POST['odd1']; }?>" required>
	<input type="number" name="odd2" placeholder="Enter Number only" value="<?php if(isset($_POST['odd2'])){ echo $_POST['odd2']; }?>" required>
	<input type="submit" name="submit" value="OK">
</form>
<?php
if(@$_POST['odd']){
$n=@$_POST['odd'];
$rev1=0;
$temp=0;
//echo "Enter a no";
$temp=$n;
while($temp != 0)
{
	$rev = $temp%10;
        $rev1 = $rev1*10 + $rev;
     $temp=(int)($temp/10);
}

if($n==$rev1)
{
	echo $n." is a palindrome";
}
else
{
	echo $n." is not a palindrome";
}
}



if(@$_POST['odd1']){
	for($no=$_POST['odd1'];$no<=$_POST['odd2'];$no++){
$n=$no;
$rev1=0;
$temp=0;
//echo "Enter a no";
$temp=$n;
while($temp != 0)
{
	$rev = $temp%10;
        $rev1 = $rev1*10 + $rev;
     $temp=(int)($temp/10);
}

if($n==$rev1)
{
	echo $n." is a palindrome <br/ >";
}

	}

}
?>
</body>
</html>
