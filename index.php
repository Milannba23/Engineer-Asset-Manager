<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Engineer Asset Manager</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h2>💻 Engineer Asset Manager</h2>
        
        <form action="add.php" method="POST">
            <input type="text" name="naziv" placeholder="Equipment Name (e.g. Dell Monitor)" required>
            <input type="text" name="zaduzio" placeholder="Responsible Engineer" required>
            <button type="submit">Assign Asset</button>
        </form>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Equipment</th>
                    <th>Assigned To</th>
                    <th>Date & Time</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Fetch all data from the 'equipment' table
                $sql = "SELECT * FROM equipment ORDER BY id DESC";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>#".$row["id"]."</td>
                                <td><strong>".$row["name"]."</strong></td>
                                <td>".$row["engineer"]."</td>
                                <td>".date('M d, Y H:i', strtotime($row["created_at"]))."</td>
                                <td>
                                    <a href='release.php?id=".$row["id"]."' 
                                       class='release-btn'
                                       onclick=\"return confirm('Are you sure you want to release this asset?')\">
                                       Release
                                    </a>
                                </td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5' class='no-data'>No assets currently assigned.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>