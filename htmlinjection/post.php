<html>
<head>
<style>
body  {
    background-image: url("images/22.jpg");
    background-color: #cccccc;
}
</style>
</head>
<center>
<IMG SRC="images/header.png" width="700" height="120" alt="paa2"  >

<hr width="45%">
<body>
<h1> Test HTML injection </h1>
</br>

<?php

$name = $_POST['code'];
echo ($name);


// htmlentities, htmlspecialchars, strip_tags

?>
</center>
</html>