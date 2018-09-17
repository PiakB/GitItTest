<html>
<head>
</head>
<body>
<?php
echo "welk fruit past bij jou? <br>";
echo "welke kleur fruit?";
?>

<form action="option_get.php" method="get">
  <select name="color">
    <option value="red"> red </option>
    <option value="yellow"> yellow </option>
    <option value="green"> green </option>
  </select>
  <select name="size">
    <option value="small"> small </option>
    <option value="medium"> medium </option>
    <option value="big"> big </option>
  </select>
  <select name="flavor">
    <option value="sweet"> sweet </option>
    <option value="bitter/sour"> bitter/sour </option>
  </select>
  <input type="submit" value="submit">
</form>
<?php
?>
</body>
</html>
