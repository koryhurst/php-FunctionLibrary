<?php

//This should be generalized to print multi dimensional arrays.
function Print2DArray($a2DArray)
{
	
	foreach($a2DArray as $aSubArray)
	{
		echo '<br>';
		//change this to custom printing with padding.
		//make it ultra readable
		print_r($aSubArray);
	}	
}

?>