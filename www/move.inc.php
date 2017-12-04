<?php
session_start();

if(isset($_GET['update'])) {

    include 'dbh.inc.php';
    
    $id = $_GET['id'];
    $status = $_GET['status'];

    $sql = "UPDATE 'bills' SET 'status' = 1 WHERE 'id' = '$id'";
    mysqli_query($conn, $sql);
    header("Location: index.php?update-bill=success");
    exit();
}
else if(isset($_GET['delete'])) {
    
        include 'dbh.inc.php';
        
        $sql = "DELETE FROM bills WHERE id='$id' "; 
        if ($conn->query($sql) === TRUE) {
            header("Location: index.php?update-bill=success");
        } else {
            echo "Erro removendo usuário: " . $conn->error;
        }
        echo "<a href='listar.php'>Listar Usuários</a>";
        $conn->close();
        
    }

    