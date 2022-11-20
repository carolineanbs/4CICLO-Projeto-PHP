<?php
    $conn = mysqli_connect("127.0.0.1", "admin", "admin") or die ("falha na coexão!");    //servidor, usuário, senha

    mysqli_select_db($conn, 'meubancophp');                                             //base de dados

?>