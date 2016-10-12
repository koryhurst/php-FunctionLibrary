<?php

//This is for printing returns from reg exp. extracts
//the print_r function seems to work better at some of them
//sometimes the return doesn't even seem to be an array
function ReturnAllMatches($matches)
{
	echo "<table class=\"QueryResults\">" . $GLOBALS['NewLine'] ; 

	foreach($matches as $match) 
  {
		echo "<tr>" . $GLOBALS['NewLine'] ;
		echo "<td>0-" . $match[0] . "</td>" . "\n" . $GLOBALS['NewLine'] ;
		echo "<td>1-" . $match[1] . "</td>" . "\n" . $GLOBALS['NewLine'] ;
		echo "<td>2-" . $match[2] . "</td>" . "\n" . $GLOBALS['NewLine'] ;
		echo "</tr>" . $GLOBALS['NewLine'] ;
	}
	echo "</table>" . $GLOBALS['NewLine'] ;	
}


?>