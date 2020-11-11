<?php
session_start();

$email = $_POST['email'];
$senha = md5($_POST['senha']);

if(strlen($email) > 3 && strlen($senha)>3){
    //$conn = mysqli_connect('localhost', 'root', "", "sistema");

    //$sql = "select * from usuarios";

    //$resultado_consulta = $conn->query("select * from usuarios");

    //$usuarios = mysqli_fetch_all($resultado_consulta);

    //echo '<pre>';
    //print_r($usuarios);
    //echo '<pre>';

    $conn = mysqli_connect("localhost", "root", "", "sistema");

    // Execução da instrução SQL
    $resultado_consulta = $conn->query("SELECT * from usuarios");

    // $usuarios recebe a lista de usuários
    $usuarios = mysqli_fetch_all($resultado_consulta);

    $_SESSION['nome'] = $usuarios[0][1];
    $_SESSION['email'] = $usuarios[0][2];
    $_SESSION['senha'] = $usuarios[0][3];
    //echo '<pre>';
    //print_r($usuarios);
    //echo '</pre>';

    header('location:home.php');

}else{
    echo"
        <script>
            alert('Email ou senha invalida')
            location.href = 'index.php'
        </script>
    ";
}