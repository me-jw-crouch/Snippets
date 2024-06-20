<?php
	// Replace a word in a string.
	str_replace('Apple', 'Orange', 'My favourite fruit is an Apple.');
	
	// Replace multiple words in a string.
	str_replace(array('fruit', 'Apple'), array('Vegetable', 'Carrot'), 'My favourite fruit is an Apple.');
	
	// Check if a string contains a specific word.
	if (str_contains('My name is Me.', 'Me')) {
	  // True
	}
	
	// If older than PHP8
	if (strpos('My name is Me.', 'Me') !== false) {
		// True
	}
?>
