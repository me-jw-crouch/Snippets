// Connect to MySQL
// TODO: Change parameters.
$mysqli = mysqli_connect('localhost', 'DATABASE_USERNAME', 'DATABASE_PASSWORD', 'DATABASE_NAME');


// Output each row of a database.
$result = $mysqli->query('SELECT * FROM this_table');
while ($row = $result->fetch_assoc()) {
	echo $row['column_name'] . '<br>';
}

// Output the number of rows from the $result (object?).
$result->num_rows;

// Insert a record.
$mysqli->query('INSERT INTO this_table (column_name) VALUES ("ValueA")');

// Retrieve the number of affected rows after a change.
$mysqli->affected_rows;

// Escape Special Characters in a String (NEEDED if not using prepared statements.)
$mysqli->real_escape_string($user_input_text);

// Prepare a Statment (to prevent SQL injection.
$name = 'Me';
$limit = 1;
      // Prepare query
$stmt = $mysqli->prepare('SELECT age, address FROM students WHERE name = ? LIMIT ?');
      // data types: i = integer, s = string, d = double, b = blog
$stmt->bind_param('si', $name, $limit);
      // Execute query
$stmt->execute();
      // Bind the result
$stmt->bind_result($age, address);

// Close the query and database connection.
$stmt->close();
$mysqli->close();
