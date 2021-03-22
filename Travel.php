<?php

/*
 * Original Files: https://github.com/DonVictor/PHP-Dijkstra
 * Modified for guide to show how to implement a user form - https://ncjsvr.co.uk/shortest-path-dijkstra-algorithm-with-user-input-in-php-html/
 */

$a = $_GET["from"];
$b = $_GET["to"];

require("Dijkstra.php");

	$g = new Graph();
/*
 * Towns to Boats
 */
$g->addedge("A", "B", 5);
$g->addedge("A", "C", 7);
$g->addedge("B", "A", 5);
$g->addedge("C", "A", 7);
$g->addedge("C", "D", 4);
$g->addedge("C", "E", 9);
$g->addedge("D", "C", 4);
$g->addedge("E", "C", 9);

	list($distances, $prev) = $g->paths_from("$a");
	
	$path = $g->paths_to($prev, "$b");
	

?>

<html>
<head>

</head>

<body>

<form method="GET"><div ><h2>Enter Location and Destination</h2></div>
	<div><label></label><div>
	<select id="from" name="from">
<option value="" disabled selected>Select city</option>
  <option value="A">A</option>
  <option value="B">B</option>
  <option value="C">C</option>
  <option value="D">D</option>
  <option value="E">E</option>
  </select>
	<div><label></label><div>
	<select id="to" name="to">
	<option value="" disabled selected>Select city</option>
  <option value="A">A</option>
  <option value="B">B</option>
  <option value="C">C</option>
  <option value="D">D</option>
  <option value="E">E</option>
</select>
	<p>The shortest route between <?php echo $a; ?> and <?php echo $b; ?> is:<br><?php echo implode(" <br>▼<br> ",$path); ?></p>
<div><input type="submit" value="Submit"/></div></form>



  
</body>
</html>