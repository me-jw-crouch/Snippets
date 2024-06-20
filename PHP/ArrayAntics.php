// Inserting items into an array
$names = array();
array_push($names, 'Me', 'Sarah');
// Or...
$names = array();
$names[] = 'Me';
$names[] = 'Alex';

// Remove item from an array.
unset($names['Me']);
// Or...
unset($names[0]);

// Reindex the values after you have removed an item:
$names = array_values($names);

// Reverse an array:
$reversed = array_reverse($names);

// Merge two or more arrays:
$merged_array = array_merge($array1, $array2);

// Return only the array keys:
$keys = array_keys(array('name' => 'Me', 'age' => 34));

// Sort an array in ascending order:
sort($names);

// Sort an array in reverse order:
rsort($names);

// Check if an item exists in an array:
if (in_array('Me', $names)) {
	// item exists
}

// Check if key exists in an array:
if (array_key_exists('name', array('name' => 'Me', 'age' => 34))) {
	// key exists
}

// Count the number of items in an array:
count($names);

// Convert comma-separated list to array:
$array = explode(',', 'Me,Abby,Sarah,Alex');
