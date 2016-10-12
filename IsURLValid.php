<?php

function IsURLValid($PossibleURL)
{
	$TestValidity = True ;
	if (substr($PossibleURL, 0, 1)=='/') $TestValidity = False ; // Disregard local links?
	//if (substr($PossibleURL, strlen($PossibleURL)-4, 4)<>'html') $TestValidity = False ;
	// Double check valid URL ending
	//need to test the whole range of valid ending to be a true general function
	//Actually cant test them all, as some URLS have GET parameters on the end.
	return $TestValidity ;
}

?>