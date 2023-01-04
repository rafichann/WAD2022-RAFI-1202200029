<html lang="en">
 
<head>
    <title>Method POST</title>
</head>
 
<body>
    <form action="" method="POST">
        <input type="text" name="nama"><br />
        <input type="number" name="nim"><br />
        <input type="submit" name="submit" value="Submit">
    </form>
 
    <?php
    if ($_POST) {
        echo "Nama: " . $_POST["nama"];
        echo "<br/>";
        echo "NIM: " . $_POST["nim"];
    }
    ?>
</body>
 
</html>