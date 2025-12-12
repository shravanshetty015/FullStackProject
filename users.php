<?php
include("database.php");

$sql = "SELECT id, name, email FROM users";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registered Users</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <h2>Registered Users</h2>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>" . $row['id'] . "</td>
                        <td>" . $row['name'] . "</td>
                        <td>" . $row['email'] . "</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No users found.</td></tr>";
        }
        mysqli_close($conn);
        ?>
    </table>
</div>

</body>
</html>
