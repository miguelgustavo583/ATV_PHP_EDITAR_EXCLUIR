<?php
    
    include_once("conexao.php");
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="styleDados.css">
        <title>Consulta</title>
    </head>
    <body>
        <div class="container" id="container">
        <div class="row">
                    <div class="col">
                    <nav class="navbar navbar-expand-lg bg-body-tertiary, fundo">
                            <div class="container-fluid">
                                <a id="titleNav" class="navbar-brand" href="index.php">SISTEMA WEB</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="link-header" aria-current="page" href="index.php">Cadastrar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="tabelaDados.php">Consultar</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col titles">
                        <h1><strong>Consultar</h1></strong>
                    </div>
                </div>
            <div class="row">
                <div class="col boxDados">
                    <div class="table-responsive">
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr class="headerTable">
                                    <th scope="col titleTable">ID</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Endereço</th>
                                    <th scope="col">Bairro</th>
                                    <th scope="col">Cidade</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">CEP</th>
                                    <th scope="col">Função</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php
                                    $sql = "SELECT * FROM clientes";
                                    $result = $PDO->query($sql);
                                    $rows = $result->fetchAll();

                                    for($i=0; $i < count($rows); $i++){
                                        
                                        
                                        $id = $rows[$i]['id'];
                                        $nome = $rows[$i]['nome'];
                                        $endereco = $rows[$i]['endereco'];
                                        $bairro = $rows[$i]['bairro']; 
                                        $cidade = $rows[$i]['cidade']; 
                                        $estado = $rows[$i]['estado']; 
                                        $cep = $rows[$i]['cep'];   
                                        
                                        
                                        echo '<tr>
                                                 <td>'.$id.'</td>
                                                 <td>'.$nome.'</td>
                                                 <td>'.$endereco.'</td>
                                                 <td>'.$bairro.'</td>
                                                 <td>'.$cidade.'</td>
                                                 <td>'.$estado.'</td>
                                                 <td>'.$cep.'</td>
                                                 <td>
                                                    <button class="btn btn-primary"><a class="text-light" href="editar.php?id='.$id.'"><lord-icon
                                                    src="https://cdn.lordicon.com/qeberlkz.json"
                                                    trigger="hover"
                                                    colors="primary:#FFFFFFF"
                                                    style="width:30px; height:30px">
                                                </lord-icon>
                                                </a></button>
                                                    <button class="btn btn-danger"><a class="text-light" href="excluir.php?id='.$id.'"><lord-icon
                                                    src="https://cdn.lordicon.com/kfzfxczd.json"
                                                    trigger="morph"
                                                    colors="primary:#FFFFFF"
                                                    state="morph-fill"
                                                    style="width:30px;height:30px">
                                                </lord-icon>
                                                </a></button>
                                                </td>
                                              </tr>';
                                    }
                                ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p></p>
                </div>
            </div>
        </div>
    </body>
</html>
