<?php
if(isset($_GET["sumbit"])){
if(isset($_GET["number1"])&& isset($_GET["number2"]))
{
	$number1=$_GET["number1"];
	$number2=$_GET["number2"];
	$res=$number1+$number2;

}
}
	if(isset($_GET["sumbit1"])){
if(isset($_GET["number1"])&& isset($_GET["number2"]))
{
	$number1=$_GET["number1"];
	$number2=$_GET["number2"];
	$res=$number1-$number2;
}
}
if(isset($_GET["sumbit2"])){
if(isset($_GET["number1"])&& isset($_GET["number2"]))
{
	$number1=$_GET["number1"];
	$number2=$_GET["number2"];
	$res=$number1*$number2;
}
}
if(isset($_GET["sumbit3"])){
if(isset($_GET["number1"])&& isset($_GET["number2"]))
{
	$number1=$_GET["number1"];
	$number2=$_GET["number2"];
	$res=$number1/$number2;
}
}
if(isset($_GET["sumbit4"])){
if(isset($_GET["number1"])&& isset($_GET["number2"]))
{
	$number1=$_GET["number1"];
	$number2=$_GET["number2"];
	$res=$number1%$number2;
}
}
?>

<html>
<form method="GET">
<table>
<tr>
   <td>
     <label>First number:</label>
     <input type="text"name="number1">
   </td>
</tr>
<tr>
   <td>
  <label>Second number:</label>
  <input type="text"name="number2">
  </td>
</tr>
<tr>
   <td>
  <button type="submit" name="sumbit">+</button>
   <button type="submit" name="sumbit1">-</button>
    <button type="submit" name="sumbit2">*</button>
	 <button type="submit" name="sumbit3">/</button>
	  <button type="submit" name="sumbit4">%</button><br> 
  <br>Result:<input type='text' value="<?php echo $res; ?>"><br>
  </td>
</tr>
</table>
</form>
</body>
</html>