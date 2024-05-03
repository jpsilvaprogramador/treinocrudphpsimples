<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- Link CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Link CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <id id="site container">

<!-- HEADER -->
    <?php 
        require_once ('assets/html/header.html');
    ?>
<!-- Fim do HEADER -->

<!-- MAIN -->
      <main class="container pb-5 bg-body-tertiary">

<section>
<!-- CARDS -->
                <div class="row ">
    
<!-- card 01 produtos cadastrados -->
                    <div class="col-4">
                        <div class="card card1 mt-3 mb-3">
                            <div class="row">
                                <div class="col text-center">
                                    <div class="card-body">
                                        <h5 class="card-title">Produtos Cadastrados:</h5>
                                        <p class="card-text">Nenhum item cadastrado</p>
                                    </div>
                                </div>
                                <div class="col-12 d-flex align-items-center justify-content-center" style="font-size:35px;">
                                    <p>00</p>
                                </div>
                            </div>
                        </div>
                    </div>
    
<!-- card 02 primeiro cadastro -->                
                    <div class="col-4">
                        <div class="card mt-3 mb-3">
                            <div class="row">
                                <div class="col text-center">
                                    <div class="card-body">
                                        <h5 class="card-title">Primeiro cadastro:</h5>
                                        <p class="card-text">Nenhum item encontrado</p>
                                    </div>
                                </div>
                                <div class="col-12 d-flex align-items-center justify-content-center" style="font-size:35px;">
                                    <p>00</p>
                                </div>
                            </div>
                        </div>
                    </div>
    
<!-- card 03 último cadastro -->
                    <div class="col-4">
                        <div class="card mt-3 mb-3">
                            <div class="row g-0">
                                <div class="col text-center">
                                    <div class="card-body">
                                        <h5 class="card-title">Último cadastro:</h5>
                                        <p class="card-text">Nenhum item encontrado</p>
                                    </div>
                                </div>
                                <div class="col-12 d-flex align-items-center justify-content-center" style="font-size:35px;">
                                    <p>00</p>
                                </div>
                            </div>
                        </div>
                    </div>
        
                </div>
<!-- fim dos cards -->
</section>

<section class="bg-white p-3 rounded-2 border border-1">
<!-- FORMULÁRIO -->
    <form class="row mt-4">
<!-- Título do Formulário -->
        <div class="col-12">
            <div class="h4 pb-2 mb-4 text-dark border-bottom border-primary">
                Cadastro de Produtos
            </div>
        </div>
        
    <!-- Campo código -->
                    <div class="col-2">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Código:</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                    </div>
    
<!-- Campo produto -->       
                    <div class="col-7">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Produto:</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                    </div>
    
    <!-- Campo marca -->
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Marca:</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                    </div>
    
<!-- BOTÕES -->
<!-- Botão Cadastrar -->
                    <div class="botao-form col-1 mt-2">
                        <button type="submit" class="btn btn-primary me-2">Cadastrar</button>
                    </div>
<!-- Botão Resetar -->
                    <div class="botao-form col-1 mt-2">
                        <button type="reset" class="btn btn-primary ms-2">Resetar</button>
                    </div>
                </form>
             
            </main>
<!-- Final do Main -->
</section>

<!-- FOOTER -->
        <?php
            require_once "assets/html/footer.html";
        ?>
<!-- Final do FOOTER -->

    </id>

<!-- Código JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>