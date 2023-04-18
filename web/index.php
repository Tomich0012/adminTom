<?php
$host = '192.168.100.7';
$user = 'user';
$password = 'userpassword';
$db = 'woodyToys';

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

$sql = 'SELECT id, name, email FROM users';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table border="1">';
    echo '<tr><th>ID</th><th>Name</th><th>Email</th></tr>';
    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo '0 results';
}

$conn->close();
?>
