<?php
// Created by Professor Wergeles for CS2830 at the University of Missouri

	/*
		We covered 3 ways to clear cookies: 
			1: Closing the browser(session cookeis get deleted)
			
			2: Manually clearint the cache (all cookies get deleted)

			3: Setting a cookie's expiration date to some time in the past
	*/
	
	setcookie('flavor', '', time() - 3600);
	
	setcookie('flavor', '', 1);
	
	print "The cookie was cleared.<br>\n";
?>