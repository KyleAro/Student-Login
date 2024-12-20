<?php
$dbcon = @mysqli_connect('localhost','kylearo','arokyle2311','kylearo')
OR die('Could not connect to MySQL. Error: ' .mysqli_connect_error());
mysqli_set_charset($dbcon, 'utf8');