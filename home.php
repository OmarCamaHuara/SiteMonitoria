<?php
    session_start();

    if(!isset($_SESSION['nome'])){
        header('location:index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    <h1>Ola, <?php echo $_SESSION['nome']?></h1>
    <a href="<?php session_destroy()?>">sair</a>
</body>
</html>