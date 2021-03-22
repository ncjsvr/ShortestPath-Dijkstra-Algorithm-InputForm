<?php

/*
 * Author: doug@neverfear.org
 */

$a = $_GET["from"];
$b = $_GET["to"];

require("Dijkstra.php");

	$g = new Graph();
/*
 * Towns to Boats
 */
$g->addedge("Ab'Dendriel", "Ab'Dendriel Boat", 67);
$g->addedge("Carlin", "Carlin Boat", 57);
$g->addedge("Thais", "Thais Boat", 65);
$g->addedge("Venore", "Venore Boat", 83);
$g->addedge("Ankrahmun", "Ankrahmun Boat", 86);
$g->addedge("Darashia", "Darashia Boat", 74);
$g->addedge("Edron", "Edron Boat", 68);
$g->addedge("Liberty Bay", "Liberty Bay Boat", 75);
$g->addedge("Port Hope", "Port Hope Boat", 87);
$g->addedge("Svargrond", "Svargrond Boat", 88);
$g->addedge("Yalahar", "Yalahar Boat", 68);
$g->addedge("Cormaya", "Cormaya Steamship", 68);
$g->addedge("Farmine", "Farmine Steamship", 68);
$g->addedge("Kazordoon", "Kazordoon Steamship", 1);
$g->addedge("Thais", "Thais Steamship", 68);
$g->addedge("Cormaya", "Cormaya Boat", 68);
$g->addedge("Roshamuul", "Roshamuul Boat", 68);
$g->addedge("Oramund", "Oramund Boat", 68);
$g->addedge("Krailos", "Krailos Boat", 68);
$g->addedge("Issavi", "Issavi Boat", 68);

/*
 * Boats to Towns
 */
$g->addedge("Ab'Dendriel Boat", "Ab'Dendriel", 67);
$g->addedge("Carlin Boat", "Carlin", 57);
$g->addedge("Thais Boat", "Thais", 65);
$g->addedge("Venore Boat", "Venore", 83);
$g->addedge("Ankrahmun Boat", "Ankrahmun", 86);
$g->addedge("Darashia Boat", "Darashia", 74);
$g->addedge("Edron Boat", "Edron", 68);
$g->addedge("Liberty Bay Boat", "Liberty Bay", 75);
$g->addedge("Port Hope Boat", "Port Hope", 87);
$g->addedge("Svargrond Boat", "Svargrond", 88);
$g->addedge("Yalahar Boat", "Yalahar", 68);
$g->addedge("Cormaya Steamship", "Cormaya", 68);
$g->addedge("Farmine Steamship", "Farmine", 68);
$g->addedge("Kazordoon Steamship", "Kazordoon", 1);
$g->addedge("Thais Steamship", "Thais", 68);
$g->addedge("Cormaya Boat", "Cormaya", 68);
$g->addedge("Roshamuul Boat", "Roshamuul", 68);
$g->addedge("Oramund Boat", "Oramund", 68);
$g->addedge("Krailos Boat", "Krailos", 68);
$g->addedge("Issavi Boat", "Issavi", 68);

/*
 * Boats to Boats
 */
 
$g->addedge("Ab'Dendriel Boat", "Carlin Boat", 1);
$g->addedge("Ab'Dendriel Boat", "Edron Boat", 1);
$g->addedge("Ab'Dendriel Boat", "Thais Boat", 1);
$g->addedge("Ab'Dendriel Boat", "Venore Boat", 1);
$g->addedge("Ab'Dendriel Boat", "Yalahar Boat", 1);
$g->addedge("Ankrahmun Boat", "Darashia Boat", 1);
$g->addedge("Ankrahmun Boat", "Edron Boat", 2);
$g->addedge("Ankrahmun Boat", "Liberty Bay Boat", 2);
$g->addedge("Ankrahmun Boat", "Port Hope Boat", 2);
$g->addedge("Ankrahmun Boat", "Venore Boat", 2);
$g->addedge("Ankrahmun Boat", "Yalahar Boat", 2);
$g->addedge("Carlin Boat", "Ab'Dendriel Boat", 2);
$g->addedge("Carlin Boat", "Edron Boat", 2);
$g->addedge("Carlin Boat", "Svargrond Boat", 2);
$g->addedge("Carlin Boat", "Thais Boat", 2);
$g->addedge("Carlin Boat", "Venore Boat", 2);
$g->addedge("Carlin Boat", "Yalahar Boat", 2);
$g->addedge("Darashia Boat", "Ankrahmun Boat", 2);
$g->addedge("Darashia Boat", "Liberty Bay Boat", 2);
$g->addedge("Darashia Boat", "Port Hope Boat", 2);
$g->addedge("Darashia Boat", "Venore Boat", 2);
$g->addedge("Darashia Boat", "Yalahar Boat", 2);
$g->addedge("Edron Boat", "Ab'Dendriel Boat", 2);
$g->addedge("Edron Boat", "Ankrahmun Boat", 2);
$g->addedge("Edron Boat", "Carlin Boat", 2);
$g->addedge("Edron Boat", "Liberty Bay Boat", 2);
$g->addedge("Edron Boat", "Port Hope Boat", 2);
$g->addedge("Edron Boat", "Thais Boat", 2);
$g->addedge("Edron Boat", "Venore Boat", 2);
$g->addedge("Edron Boat", "Cormaya Boat", 2);
$g->addedge("Edron Boat", "Edron Boat", 2);
$g->addedge("Yalahar Boat", "Ab'Dendriel Boat", 2);
$g->addedge("Yalahar Boat", "Ankrahmun Boat", 2);
$g->addedge("Yalahar Boat", "Carlin Boat", 2);
$g->addedge("Yalahar Boat", "Darashia Boat", 2);
$g->addedge("Yalahar Boat", "Liberty Bay Boat", 2);
$g->addedge("Yalahar Boat", "Port Hope Boat", 2);
$g->addedge("Yalahar Boat", "Thais Boat", 2);
$g->addedge("Yalahar Boat", "Venore Boat", 2);
$g->addedge("Liberty Bay Boat", "Ankrahmun Boat", 2);
$g->addedge("Liberty Bay Boat", "Darashia Boat", 2);
$g->addedge("Liberty Bay Boat", "Edron Boat", 2);
$g->addedge("Liberty Bay Boat", "Port Hope Boat", 2);
$g->addedge("Liberty Bay Boat", "Thais Boat", 2);
$g->addedge("Liberty Bay Boat", "Benore Boat", 2);
$g->addedge("Liberty Bay Boat", "Yalahar Boat", 2);
$g->addedge("Port Hope Boat", "Ankrahmun Boat", 2);
$g->addedge("Port Hope Boat", "Darashia Boat", 2);
$g->addedge("Port Hope Boat", "Edron Boat", 2);
$g->addedge("Port Hope Boat", "Liberty Bay Boat", 2);
$g->addedge("Port Hope Boat", "Thais Boat", 2);
$g->addedge("Port Hope Boat", "Venore Boat", 2);
$g->addedge("Port Hope Boat", "Yalahar Boat", 2);
$g->addedge("Svargrond Boat", "Carlin Boat", 2);
$g->addedge("Svargrond Boat", "Thais Boat", 2);
$g->addedge("Svargrond Boat", "Venore Boat", 2);
$g->addedge("Thais Boat", "Ab'Dendriel Boat", 2);
$g->addedge("Thais Boat", "Carlin Boat", 2);
$g->addedge("Thais Boat", "Edron Boat", 2);
$g->addedge("Thais Boat", "Liberty Bay Boat", 2);
$g->addedge("Thais Boat", "Port Hope Boat", 2);
$g->addedge("Thais Boat", "Svargrond Boat", 2);
$g->addedge("Thais Boat", "Venore Boat", 2);
$g->addedge("Thais Boat", "Yalahar Boat", 2);
$g->addedge("Thais Boat", "Roshamuul Boat", 2);
$g->addedge("Roshamuul Boat", "Thais Boat", 2);
$g->addedge("Venore Boat", "Ab'Dendriel Boat", 2);
$g->addedge("Venore Boat", "Ankrahmun Boat", 2);
$g->addedge("Venore Boat", "Carlin Boat", 2);
$g->addedge("Venore Boat", "Darashia Boat", 2);
$g->addedge("Venore Boat", "Edron Boat", 2);
$g->addedge("Venore Boat", "Liberty Bay Boat", 2);
$g->addedge("Venore Boat", "Port Hope Boat", 2);
$g->addedge("Venore Boat", "Scargrond Boat", 2);
$g->addedge("Venore Boat", "Thais Boat", 2);
$g->addedge("Venore Boat", "Yalahar Boat", 2);
$g->addedge("Cormaya Boat", "Edron Boat", 2);
$g->addedge("Oramund Boat", "Edron Boat", 2);
$g->addedge("Oramund Boat", "Port Hope Boat", 2);
$g->addedge("Oramund Boat", "Thais Boat", 2);
$g->addedge("Oramund Boat", "Venore Boat", 2);
$g->addedge("Oramund Boat", "Krailos Boat", 2);
$g->addedge("Oramund Boat", "Issavi Boat", 2);
$g->addedge("Edron Boat", "Oramund Boat", 2);
$g->addedge("Port Hope Boat", "Oramund Boat", 2);
$g->addedge("Thais Boat", "Oramund Boat", 2);
$g->addedge("Venore Boat", "Oramund Boat", 2);
$g->addedge("Krailos Boat", "Oramund Boat", 2);
$g->addedge("Issavi Boat", "Oramund Boat", 2);
$g->addedge("Krailos Boat", "Darashia Boat", 2); 
$g->addedge("Krailos Boat", "Edron Boat", 2);
$g->addedge("Krailos Boat", "Venore Boat", 2);
$g->addedge("Krailos Boat", "Issavi Boat", 2);
$g->addedge("Darashia Boat", "Krailos Boat", 2); 
$g->addedge("Edron Boat", "Krailos Boat", 2);
$g->addedge("Venore Boat", "Krailos Boat", 2);
$g->addedge("Issavi Boat", "Krailos Boat", 2);
$g->addedge("Issavi Boat", "Darashia Boat", 2);
$g->addedge("Issavi Boat", "Venore Boat", 2);
$g->addedge("Darashia Boat", "Issavi Boat", 2);
$g->addedge("Venore Boat", "Issavi Boat", 2);

 /*
 * Steamship Travel
 * 
 */
 
$g->addedge("Cormaya Steamship", "Farmine Steamship", 2);
$g->addedge("Cormaya Steamship", "Kazordoon Steamship", 2);
$g->addedge("Farmine Steamship", "Cormaya Steamship", 2);
$g->addedge("Farmine Steamship", "Kazordoon Steamship", 2);
$g->addedge("Kazordoon Steamship", "Cormaya Steamship", 2);
$g->addedge("Kazordoon Steamship", "Farmine Steamship", 2);
$g->addedge("Kazordoon Steamship", "Thais Steamship", 2);
$g->addedge("Thais Steamship", "Kazordoon Steamship", 2);



 /*
 * None Boat Travel
 * 
 */
 
$g->addedge("Carlin", "Kazordoon", 6);
$g->addedge("Kazordoon", "Carlin", 6);

	list($distances, $prev) = $g->paths_from("$a");
	
	$path = $g->paths_to($prev, "$b");
	

?>

<html>
<head>
<link rel="stylesheet" href="formoid-solid-blue.css" type="text/css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>


<style>
p { color: #000000; font-family: 'Helvetica Neue', sans-serif; font-size: 14px; line-height: 24px; margin: 0 0 24px; text-align: center; text-justify: inter-word; padding-left: 10px; padding-right: 10px; padding-top: 5px; }
</style>
</head>

<body>

<form class="formoid-solid-blue" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="GET"><div class="title"><h2>Enter Location and Destination</h2></div>
	<div class="element-input"><label class="title"></label><div class="item-cont">
	<select id="from" name="from">
<option value="" disabled selected>Select city</option>
  <option value="Ab'Dendriel">Ab'Dendriel</option>
  <option value="Ankrahmun">Ankrahmun</option>
  <option value="Carlin">Carlin</option>
  <option value="Cormaya">Cormaya</option>
  <option value="Darashia">Darashia</option>
  <option value="Edron">Edron</option>
  <option value="Farmine">Farmine</option>
  <option value="Issavi">Issavi</option>
  <option value="Kazordoon">Kazordoon</option>
  <option value="Krailos">Krailos</option>
  <option value="Liberty Bay">Liberty Bay</option>
   <option value="Oramund">Oramund</option>
  <option value="Port Hope">Port Hope</option>
   <option value="Roshamuul">Roshamuul</option>
  <option value="Svargrond">Svargrond</option>
  <option value="Thais">Thais</option>
  <option value="Venore">Venore</option>
  <option value="Yalahar">Yalahar</option>
</select>
	<span class="icon-place"></span></div></div>
	<div class="element-input"><label class="title"></label><div class="item-cont">
	<select id="to" name="to">
	<option value="" disabled selected>Select city</option>
  <option value="Ab'Dendriel">Ab'Dendriel</option>
  <option value="Ankrahmun">Ankrahmun</option>
  <option value="Carlin">Carlin</option>
  <option value="Cormaya">Cormaya</option>
  <option value="Darashia">Darashia</option>
  <option value="Edron">Edron</option>
  <option value="Farmine">Farmine</option>
  <option value="Issavi">Issavi</option>
  <option value="Kazordoon">Kazordoon</option>
  <option value="Krailos">Krailos</option>
  <option value="Liberty Bay">Liberty Bay</option>
   <option value="Oramund">Oramund</option
  <option value="Port Hope">Port Hope</option>
  <option value="Roshamuul">Roshamuul</option>
  <option value="Svargrond">Svargrond</option>
  <option value="Thais">Thais</option>
  <option value="Venore">Venore</option>
  <option value="Yalahar">Yalahar</option>
</select>
	<span class="icon-place"></span></div></div>
 <p align="center">The shortest route between <?php echo $a; ?> and <?php echo $b; ?> is: <?php echo implode(" - ",$path); ?>.</p>
<div class="submit"><input type="submit" value="Submit"/></div></form>





  
</body>
</html>