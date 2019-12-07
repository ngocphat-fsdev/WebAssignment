<?php
$conn = mysqli_connect('localhost', 'root', '', 'webdatabase');
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}
$sql = 'SELECT * FROM restaurant';
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    echo "<table id=\"user_data\"><tr><th>ID</th><th>Name</th><th>Addr</th><th>Rating</th><th>Work</th><th></th><th></th></tr>";
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr id=\"tr".$row["ResID"]."\"><td contenteditable class=\"id-data\">" . $row["ResID"] . "</td>";
        echo "<td contenteditable class=\"name-data\">" . $row["Name"] . "</td>";
        echo "<td contenteditable class=\"addr-data\">" . $row["Address"] . "</td>";
        echo "<td contenteditable class=\"rating-data\">" . $row["Rating"] . "</td>";
        echo "<td contenteditable class=\"work-data\">" . $row["WorkTime"] . "</td>";
        echo "<td><button id=\"".$row["ResID"]."\" class=\"edit\">Edit</button></td>";
        echo "<td><button id=\"".$row["ResID"]."\" class=\"delete\">Delete</button></td></tr>";
    }
    echo "<tr><td contenteditable id=\"data1\"></td>";
    echo "<td contenteditable id=\"data2\"></td>";
    echo "<td contenteditable id=\"data3\"></td>";
    echo "<td contenteditable id=\"data4\"></td>";
    echo "<td contenteditable id=\"data5\"></td>";
    echo "<th colspan=\"2\"><button id=\"add\">Add</button></th></tr>";
    echo "</table>";
} else {
    echo "<table id=\"user_data\"><tr><th>ID</th><th>Name</th><th>Addr</th><th>Rating</th><th>Work</th><th></th><th></th></tr>";
    echo "<tr><td contenteditable id=\"data1\"></td>";
    echo "<td contenteditable id=\"data2\"></td>";
    echo "<td contenteditable id=\"data3\"></td>";
    echo "<td contenteditable id=\"data4\"></td>";
    echo "<td contenteditable id=\"data5\"></td>";
    echo "<th colspan=\"2\"><button id=\"add\">Add</button></th></tr>";
    echo "</table>";
}