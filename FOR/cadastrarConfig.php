<?php
    
    include_once("conexao.php");

    if(isset($_POST['cadastrar'])){
        
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $cep = $_POST['cep'];

        
        $sql = "INSERT INTO clientes (nome, endereco, bairro, cidade, estado, cep) 
        VALUES (:nome, :endereco, :bairro, :cidade, :estado, :cep)";

       
        $stmt = $PDO->prepare($sql);

        
        $stmt->execute(['nome' => $nome, 'endereco' => $endereco, 'bairro' => $bairro, 'cidade' => $cidade, 'estado' => $estado, 'cep' => $cep]);

        if($stmt){
            header("Location: tabelaDados.php");
        }else{
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Não foi possivel cadastrar o cliente.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                   </div>';
        }
    }
    
?>
