<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Mendeley Demo</title>
<meta name="description" content="Demo of a redesigned Mendeley">
<!-- css styles... -->
<link rel="stylesheet" type="text/css" href="demo2.css">
<!-- javascript -->
<script type="text/javascript" src="demo.js"></script>
</head>
<body>
<header>
<div id="corner">
<p>Badges</p>
<p><a href="index.html">Go Back</a></p>
</div>
<div id="returnhome">
<p>
<a href="index.html">Return Home</a>
</p>
</div>
<p>
My Library
</p>
</header>
<p>Your favorites live here.<br />
<br />
Choose a document to read:</p>
<div id="articles">
<ul>
<?php
$fav =;
echo "You have selected the ID: ";
echo "<br />";
echo $gene;
$cmd = `python database.py '$gene'`;
echo "<br /><br />";
echo $cmd;
?>
</ul>
</div>
</body>
</html>