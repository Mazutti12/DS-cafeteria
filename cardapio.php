<?php

require_once('jquery/index.php');
require_once('connection.php');
require_once('class.php');

?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio</title>
</head>

<body>

    <!--- Cabeçalho -->

    <!--- Cabeçalho -->
  <header class="p-3 bg-dark text-white sticky">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start ">
        <a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none ">
          <img src="/coffee/style/img/icone_header.png" alt="icone da imagem" class="icone-header"><svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
            <use xlink:href="#bootstrap" />
          </svg>
        </a>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 ">
          <li><a href="index.php" class="nav-link px-2 text-secunday ">Início</a></li>
          <li><a href="cardapio.php" class="nav-link px-2 text-white ">Cardápio</a></li>
          <li><a href="about.php" class="nav-link px-2 text-white ">About</a></li>
          <li><a href="forum.php" class="nav-link px-2 text-white ">Fórum</a></li>
        </ul>
        <div class="text-end">
          <a href="login.php" type="button" class="btn btn-outline-light me-2">Login</a>
          <a href="register.php" type="button" class="btn btn-warning">Sign-up</a>
          <a hidden href="meus-pedidos.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-cart" viewBox="0 0 16 16">
              <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </header>

    <!--- Produtos Bebidas --->

    <div class="div-center">

        <h2 class="h2-homepage">Bebidas</h2>
        <!--- Café Preto --->
        <div class="card card-cardapio-image" style="width: 18rem;">
            <img src="style/img/cafe-preto.jpg" class="card-img-top cardapio-image" alt="Café Preto">
            <div class="card-body">
                <h5 class="card-title">Café Preto</h5>
                <p class="card-text"> Café a base de coca<br> R$ 3,30</p>
                <input type="text" name="nome" value="Café Preto" hidden>
                <input type="number" step="0.01" name="preco" value="3.30" hidden>
                <button class="btn button-favorite">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                    </svg>
                </button>

            </div>
        </div>
        <!--- Capuccino --->
        <div class="card card-cardapio-image" style="width: 18rem;">
            <img src="style/img/capuccino.jpg" class="card-img-top cardapio-image" alt="Capuccino">
            <div class="card-body">
                <h5 class="card-title">Capuccino</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <input type="text" name="nome" value="capuccino" hidden>
                <input type="number" step="0.01" name="preco" value="4.30" hidden>
                <button class="btn button-favorite">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                    </svg>
                </button>
            </div>
        </div>
        <!--- Café Expresso --->
        <div class="card card-cardapio-image" style="width: 18rem;">
            <img src="style/img/cafe-expresso.jpg" class="card-img-top cardapio-image" alt="Café Expresso">
            <div class="card-body">
                <h5 class="card-title">Café Expresso</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button class="btn button-favorite">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                    </svg>
                </button>
            </div>
        </div>
        <!--- Café com leite --->
        <div class="card card-cardapio-image" style="width: 18rem;">
            <img src="style/img/cafe-com-leite.jpg" class="card-img-top cardapio-image" alt="Café com Leite">
            <div class="card-body">
                <h5 class="card-title">Café com Leite</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button class="btn button-favorite">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                    </svg>
                </button>
            </div>
        </div>
        <!--- Café Gelado --->
        <div class="card card-cardapio-image" style="width: 18rem;">
            <img src="style/img/cafe-gelado.jpeg" class="card-img-top cardapio-image" alt="Café Gelado">
            <div class="card-body">
                <h5 class="card-title">Café Gelado</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button class="btn button-favorite">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                    </svg>
                </button>
            </div>
        </div>
        <!--- Chá --->
        <div class="card card-cardapio-image" style="width: 18rem;">
            <img src="style/img/cha.jpg" class="card-img-top cardapio-image" alt="Chá">
            <div class="card-body">
                <h5 class="card-title">Chá</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button class="btn button-favorite">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!--- Produtos Lanches --->

    <div class="div-center">

        <h2 class="h2-homepage">Lanches</h2>
        <!--- Café Preto --->
        <div class="card card-cardapio-image" style="width: 18rem;">
            <img src="style/img/misto-quente.jpeg" class="card-img-top cardapio-image" alt="Misto Quente">
            <div class="card-body">
                <h5 class="card-title">Misto Quente</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button class="btn button-favorite">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                    </svg>
                </button>
            </div>
        </div>
        <!--- Coxinha --->
        <div class="card card-cardapio-image" style="width: 18rem;">
            <img src="style/img/coxinha.jpg" class="card-img-top cardapio-image" alt="Coxinha">
            <div class="card-body">
                <h5 class="card-title">Coxinha</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button class="btn button-favorite">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                    </svg>
                </button>
            </div>
        </div>
        <!--- Pão de Queijo --->
        <div class="card card-cardapio-image" style="width: 18rem;">
            <img src="style/img/pao-de-queijo.jpg" class="card-img-top cardapio-image" alt="Pão de Queijo">
            <div class="card-body">
                <h5 class="card-title">Pão de Queijo</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button class="btn button-favorite">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                    </svg>
                </button>
            </div>
        </div>
        <!--- Panqueca --->
        <div class="card card-cardapio-image" style="width: 18rem;">
            <img src="style/img/panqueca-americana.jpg" class="card-img-top cardapio-image" alt="Panqueca">
            <div class="card-body">
                <h5 class="card-title">Panqueca</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button class="btn button-favorite">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                    </svg>
                </button>
            </div>
        </div>
        <!--- Pastel de Forno --->
        <div class="card card-cardapio-image" style="width: 18rem;">
            <img src="style/img/pastel-de-forno.jpg" class="card-img-top cardapio-image" alt="Pastel de Forno">
            <div class="card-body">
                <h5 class="card-title">Pastel de Forno</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button class="btn button-favorite">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                    </svg>
                </button>
            </div>
        </div>
        <!--- Torta de Limão --->
        <div class="card card-cardapio-image" style="width: 18rem;">
            <img src="style/img/torta-de-limao.jpg" class="card-img-top cardapio-image" alt="Torta de Limão">
            <div class="card-body">
                <h5 class="card-title">Torta de Limão</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button class="btn button-favorite">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>


    <!------- Inserir dados na tabela ----->
    <div id="cadastro" name="cadastro">

        <?php

        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        $pedidoAlteracao = null;
        $msg = "";
        //Caso tenha sido feito um POST da página
        if ($_POST) {
            //Verifica campos obrigatórios
            if (!empty($_POST["nome"])) {
                //Cria uma instância da classe Cliente
                $pedido = new pedido();
                // Passa dados do formulário para a classe
                $pedido->setId($_POST["id"]);
                $pedido->setNome($_POST["nome"]);
                $pedido->setpreco($_POST["preco"]);

                //Se não existir id, então é para inserir cliente
                if (empty($_POST["id"])) {
                    //Chama o método para inserir um cliente no banco
                    $msg = $pedido->salvar();
                } else {
                    //Senão, devemos atualizar um cliente existente
                    $msg = $pedido->atualizar();
                }
            } else {
                $msg =  "<div class='aviso'>Por favor, verifique os campos obrigatórios</div>";
            }
        } elseif ($_GET) { // Caso os dados sejam enviados via GET
            //Se operação = excluir
            if ($_GET["op"] == "exc") {
                //Cria uma instância da classe Cliente
                $pedido = new pedido();
                // Passa dados do formulário para a classe
                $pedido->setId($_GET["id"]);
                //Chama o método para excluir um cliente no banco
                $msg = $pedido->excluir();
            } elseif ($_GET["op"] == "alt") {
                //Se operação = alterar 

                //Cria uma instância da classe Cliente
                $pedido = new pedido();
                // Passa dados do formulário para a classe
                $pedido->setId($_GET["id"]);

                //crio um array 
                $pedidosAlteracao = array();
                //Chamo a função para pesquisa específica pelo ID
                $pedidosAlteracao = $pedido->listar($msg);

                if (is_array($pedidosAlteracao)) {
                    $pedidoAlteracao = $pedidosAlteracao[0]; //Pega o primeiro cliente do array 
                    // O $clienteAlteracao será utilizado no formulário para preencher os dados do cliente 
                    // que foram pesquisados no banco de dados
                }
            }
        }

        //Imprime as mensagens
        if ($msg !== "") {
            echo "<div id='msg' name='msg' >" . $msg . "</div>";
            $msg = "";
        }
        ?>

        <form name="formulario" action="<?= $_SERVER["PHP_SELF"] ?>" method="POST">
            <input type="hidden" name="id" id="id" value="<?= isset($pedidoAlteracao) ? $pedidoAlteracao->getId() : ""; ?>" />
            <fieldset>
                <div class="campo">
                    <label for="nome">Nome do Pedido:</label><br>
                    <input type="text" size="50" name="nome" id="nome" placeholder="Informe o nome" value="<?= isset($pedidoAlteracao) ? $pedidoAlteracao->getNome() : ""; ?>" />
                </div>
                <div class="campo">
                    <label for="preco">Preço:</label><br>
                    <input type="number" step="0.01" name="preco" id="preco" placeholder="Informe o preço" required value="<?= isset($pedidoAlteracao) ? $pedidoAlteracao->getpreco() : ""; ?>" />
                </div>
                <button class="botao" type="submit" name="cadastrar" id="cadastrar">Inserir/Atualizar</button>
            </fieldset>
        </form>
    </div>


    <!--- Footer -->

    <footer class="p-3 bg-dark text-white size-footer">
        <div class="icone-footer">
            <a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <img src="/coffee/style/img/icone_header.png" alt="icone do caffee" class="icone-caffee-footer"><svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>
            <a href="https://www.instagram.com/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram icone-footer-right" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                </svg>
            </a>
            <a href="https://pt-br.facebook.com/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook icone-footer-right" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg>
            </a>
        </div>
    </footer>

</body>

</html>