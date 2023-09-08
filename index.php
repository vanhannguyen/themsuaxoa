<?php
    require "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" align="center">
        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Address</th>
                <th>them</th>
            </tr>
        </thead>
        <?php
            $sql = "SELECT * FROM hocsinh";
            $qr = mysql_query($sql);
            while ($row = mysql_fetch_array($qr)){
        ?>
        <tbody>
            <tr>
                <td><?php echo $row[username]; ?></td>
                <td><?php echo $row[email]; ?></td>
                <td><?php echo $row[address]; ?></td>
                <td>Sua | xua</td>
            </tr>
        </tbody>
        <?php } ?> 
    </table>

    
</body>
</html>