<html>
<head><title>Fruits Type</title>
<body>
<form action=listbox.php>
<h3> Types of Fruits, Select one </h3>
<select name=select>
<optgroup label="Simple Fruits">
<option value="Apple"> Apple</option>
<option value=Pear">Pear</option>
option value="Tomato">Tomato/option>
<option value="Peach"> Peach</option>
<option value="Cherry"> Cherry </option>
<option value="Bean">Bean</option>
<option value="Pea">Pea</option>
<option value="Coconut"> Coconut</option></optgroup>
<optgroup label="Aggregate Fruits">
<option value="Raspberry">Raspberry</option>
<option value="Blackberry">Blackberry</option>
<option value="Strawberry">Strawberry</option></optgroup>
<optgroup label="Multiple Fruits" >
<option value="Breadfruit">Breadfruit</option>
<option value="Pineapple">Pineapple</option>
<option value="Mulberry">Mulberry</option>
<option value="Jackfruit">Jackfruit
</option>
</optgroup></select>
<input type=submit name=submit value="Submit Your Choice" >
</form></body>

listbox.php
<html>
<head>
<title>Fruits Type</title>
</head>
<body>
<?php
echo "<h3>We think alike. Just like you ,I also like $_GET[select]</h3>";
?>
<hr><input type=button name=click value="SELECT ANOTHER" onclick="parent.location='listbox.html'">
</body>
</html>
