<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <style>
        
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>sno.</th>
                <th>name</th>
                <th>email</th>
                <th>password</th>
                <th>delete</th>
                <th>update</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $hosting = 'localhost';
                $user = 'root';
                $password = '';
                $database = 'signup';

                $con = mysqli_connect($hosting, $user, $password, $database);
                if (!$con) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $q = "SELECT * FROM data";
                $run = mysqli_query($con, $q);

                while ($row = mysqli_fetch_array($run)) {
                    echo "<tr>
                        <td>$row[0]</td>
                        <td>$row[1]</td>
                        <td>$row[2]</td>
                        <td>$row[3]</td>
                        <td><a href='delete.php?sno=$row[0]'>delete</a></td>
                        <td><a href='update.php?id=$row[0]'>update</a></td>
                    </tr>";
                }

                mysqli_close($con);
            ?>
        </tbody>
    </table>
</body>
</html>
