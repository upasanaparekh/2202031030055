<?php
  if(isset($_GET["submit"])){
    if(isset($_GET["n1"])&& isset($_GET["n2"])){
    $n1=$_GET["n1"];
    $n2=$_GET["n2"];
    $res=$n1+$n2;
  }
}
?>
<html>
<h1 align="center">Simple Calculator</h1><br>
<body>
<form align="center" method="GET" action="#">
First Number:<input type="text"name="n1" value=""><br><br><br>
Second Number:<input type="text" name="n2" value=""><br><br>
<button type="submit" name="submit">submit</button> <br><br>
<br>Result: <input type='number' value="<?php echo $res; ?>"><br>
</form>
</body>
</html>

