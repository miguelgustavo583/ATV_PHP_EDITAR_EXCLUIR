<?php
    
    include_once("conexao.php");

    if(isset($_GET['id'])){ 

        $id = $_GET['id']; 

        $sql = "DELETE FROM clientes WHERE id = $id"; 

        
        $result = $PDO->query($sql);

       
        if($result){
            header("Location: tabelaDados.php");
        }

    } 

?>
