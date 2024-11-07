<!DOCTYPE html>
<html>
    <head>

        <title>Monte seu café da manhã</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="../styles/main.css">
        <link rel="stylesheet" href="../styles/form-quiz.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;531;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid:wght@100;300;400;900&display=swap" rel="stylesheet">
    </head>

    <body>
        
        <audio src='../audio/background.mp3' autoplay loop></audio>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="menu-nav">
            
            <a class="navbar-brand mr-auto" href="../index.html"><img id="logo" src="../img/nav-logo.png" alt=""></a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ml-auto">
                    
                    <li class="nav-item active dropdown mr-5">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Quiz
                        </a>
                        <div class="dropdown-menu" id="drop-quiz" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item " id="drop-itens" href="../letsbreakfast.html">Monte o seu café da manhã</a>
                            <a class="dropdown-item" id="drop-itens" href="../letslunch.html">Monte o seu almoço</a>
                            <a class="dropdown-item" id="drop-itens" href="../letsdinner.html">Monte o seu jantar</a>
                        </div>
                    </li>
                    <li class="nav-item active mr-5">
                        <a class="nav-link" href="../feed.html">Alimentação <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mr-5 active">
                        <a class="nav-link" href="../about_us.html">Quem somos <span class="sr-only">(current)</span></a>
                    </li>
                    <li>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </li>
                </ul>
            </div>
                
            
        </nav>
        <form class="mb-2" method="POST" action="api/result.php" id="form-quiz">
            <input type="text" display="none" name="meal" value="B">
            <div class="container first-content" id="boy-or-girl">
                <div class="row">
                    <p class="title-box mr-auto ml-auto my-0">Você é menino ou menina?</p>
                </div>
                <div class="row">

                    <div class="form-check form-check-inline ml-auto">
                        <div class="card mt-3">

                            <label class="mb-0" for="boy"><img class="card-img-top img-boy-or-girl" src="../img/boy.png" alt=""></label>
                            <input class="checkbox-input-boy" type="radio" name="gender" id="boy" value="M">
                            <label class="checkbox-label mb-0" for="boy">
                                <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Menino</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="form-check form-check-inline mr-auto">
                        <div class="card mt-4">

                            <label class="mb-0" for="girl"><img class="card-img-top img-boy-or-girl" src="../img/girl.png" alt=""></label>
                            <input class="checkbox-input-girl" type="radio" name="gender" id="girl" value="F">
                            <label class="checkbox-label mb-0" for="girl">
                            <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Menina</p>
                                </div>
                            </label>
                        </div>
                        
                        
                    </div>
                </div>
                <div class="form-group row">
                    <input type="button" class="btn ml-auto mt-4 button-next" id="button-gender" value="Próximo" />
                </div>
            </div>
            <div class="container first-content" id="how-old">
                <div class="row">
                    <p class="title-box mr-auto ml-auto mt-2">Quantos anos você tem?</p>
                </div>
                <div class="row">
                    
                    <div class="mx-auto" id="age">
                        <img src="../img/1.png" alt="">
                        <span id="age-box">
                            <span class="my-1">
                                <input class="form-check-input ml-4" type="radio" name="age" id="adult" value="18+">
                                <label class="ml-5 mt-auto" for="adult">Mais de 18 anos</label><br>
                            </span>
                            <span class="my-1">
                                <input class="form-check-input ml-4" type="radio" name="age" id="teen" value="12-18">
                                <label class="ml-5" for="teen">Entre 12 e 18 anos</label><br>
                            </span>
                            <span class="my-1">
                                <input class="form-check-input ml-4" type="radio" name="age" id="children" value="6-12">
                                <label class="ml-5" for="children">Entre 6 e 12 anos</label><br>
                            </span>
                            <span class="my-1">
                                <input class="form-check-input ml-4" type="radio" name="age" id="baby" value="0-6">
                                <label class="ml-5" for="baby">Entre 0 e 6 anos</label>
                            </span>
                        </span>
                    </div>
                </div>
            
            
                <div class="form-group row">
                    <input type="button" class="btn ml-auto mt-4 button-next" id="button-age" value="Próximo" />
                </div>
            </div>
            <div class="container first-content" id="food-page">
                <div class="row">
                    <p class="title-box mr-auto ml-auto mt-2">O que costuma comer no café da manhã?</p>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-6 col-lg-3 col-xl-2 mb-2">
                        <div class="card">
                            <label class="mb-0" for="pao"><img src="../img/food/pao.png" alt="Pão" class="card-img-top"></label>
                            <input type="checkbox" name="food[]" id="pao" class="checkbox-input" value="pao"/>
                            <label for="pao" class="checkbox-label mb-0">
                                <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Pão</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 col-xl-2 mb-2">
                        <div class="card">
                            <label class="mb-0" for="manteiga"><img src="../img/food/manteiga.png" alt="Manteiga" class="card-img-top"></label>
                            <input type="checkbox" name="food[]" id="manteiga" class="checkbox-input" value="manteiga"/>
                            <label for="manteiga" class="checkbox-label mb-0">
                                <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Manteiga</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 col-xl-2 mb-2">
                        <div class="card">
                            <label class="mb-0" for="queijo"><img src="../img/food/queijo.png" alt="Queijo" class="card-img-top"></label>
                            <input type="checkbox" name="food[]" id="queijo" class="checkbox-input" value="queijo"/>
                            <label for="queijo" class="checkbox-label mb-0">
                                <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Queijo</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 col-xl-2 mb-2">
                        <div class="card">
                            <label class="mb-0" for="presunto"><img src="../img/food/presunto.png" alt="Presunto" class="card-img-top"></label>
                            <input type="checkbox" name="food[]" id="presunto" class="checkbox-input" value="presunto"/>
                            <label for="presunto" class="checkbox-label mb-0">
                                <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Presunto</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 col-xl-2 mb-2">
                        <div class="card">
                            <label class="mb-0" for="salame"><img src="../img/food/salame.png" alt="Salame" class="card-img-top"></label>
                            <input type="checkbox" name="food[]" id="salame" class="checkbox-input" value="salame"/>
                            <label for="salame" class="checkbox-label mb-0">
                                <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Salame</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 col-xl-2 mb-2">
                        <div class="card">
                            <label class="mb-0" for="ovo"><img src="../img/food/ovo.png" alt="Ovos" class="card-img-top"></label>
                            <input type="checkbox" name="food[]" id="ovo" class="checkbox-input" value="ovo"/>
                            <label for="ovo" class="checkbox-label mb-0">
                                <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Ovos</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 col-xl-2 mb-2">
                        <div class="card">
                            <label class="mb-0" for="omelete"><img src="../img/food/omelete.png" alt="Omelete" class="card-img-top"></label>
                            <input type="checkbox" name="food[]" id="omelete" class="checkbox-input" value="omelete"/>
                            <label for="omelete" class="checkbox-label mb-0  ">
                                <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Omelete</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 col-xl-2 mb-2">
                        <div class="card">
                            <label class="mb-0" for="biscoito"><img src="../img/food/biscoito.png" alt="Biscoito" class="card-img-top"></label>
                            <input type="checkbox" name="food[]" id="biscoito" class="checkbox-input" value="biscoito"/>
                            <label for="biscoito" class="checkbox-label mb-0">
                                <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Biscoito</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 col-xl-2 mb-2">
                        <div class="card">
                            <label class="mb-0" for="biscoitoR"><img src="../img/food/biscoitoR.png" alt="Biscoito Recheado" class="card-img-top"></label>
                            <input type="checkbox" name="food[]" id="biscoitoR" class="checkbox-input" value="biscoitoR"/>
                            <label for="biscoitoR" class="checkbox-label mb-0">
                                <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Biscoito Recheado</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 col-xl-2 mb-2">
                        <div class="card">
                            <label class="mb-0" for="salgadinho"><img src="../img/food/salgadinho.png" alt="Salgadinhos" class="card-img-top"></label>
                            <input type="checkbox" name="food[]" id="salgadinho" class="checkbox-input" value="salgadinho"/>
                            <label for="salgadinho" class="checkbox-label mb-0">
                                <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Salgadinhos</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 col-xl-2 mb-2">
                        <div class="card">
                            <label class="mb-0" for="salgado"><img src="../img/food/salgado.png" alt="Salgados" class="card-img-top"></label>
                            <input type="checkbox" name="food[]" id="salgado" class="checkbox-input" value="salgado"/>
                            <label for="salgado" class="checkbox-label mb-0">
                                <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Salgados</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 col-xl-2 mb-2">
                        <div class="card">
                            <label class="mb-0" for="bolo"><img src="../img/food/bolo.png" alt="Bolo" class="card-img-top"></label>
                            <input type="checkbox" name="food[]" id="bolo" class="checkbox-input" value="bolo"/>
                            <label for="bolo" class="checkbox-label mb-0">
                                <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Bolo</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 col-xl-2 mb-2">
                        <div class="card">
                            <label class="mb-0" for="boloP"><img src="../img/food/boloP.png" alt="Bolo Pronto Bauducco" class="card-img-top"></label>
                            <input type="checkbox" name="food[]" id="boloP" class="checkbox-input" value="boloP"/>
                            <label for="boloP" class="checkbox-label mb-0  ">
                                <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Bolo Pronto</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 col-xl-2 mb-2">
                        <div class="card">
                            <label class="mb-0" for="cereal"><img src="../img/food/cereal.png" alt="Cereal" class="card-img-top"></label>
                            <input type="checkbox" name="food[]" id="cereal" class="checkbox-input" value="cereal"/>
                            <label for="cereal" class="checkbox-label mb-0">
                                <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Cereal</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 col-xl-2 mb-2">
                        <div class="card">
                            <label class="mb-0" for="cerealN"><img src="../img/food/cerealN.png" alt="Cereal Natural" class="card-img-top"></label>
                            <input type="checkbox" name="food[]" id="cerealN" class="checkbox-input" value="cerealN"/>
                            <label for="cerealN" class="checkbox-label mb-0">
                                <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Cereal Natural</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 col-xl-2 mb-2">
                        <div class="card">
                            <label class="mb-0" for="fruta"><img src="../img/food/fruta.png" alt="Frutas" class="card-img-top"></label>
                            <input type="checkbox" name="food[]" id="fruta" class="checkbox-input" value="fruta"/>
                            <label for="fruta" class="checkbox-label mb-0">
                                <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Frutas</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 col-xl-2 mb-2">
                        <div class="card">
                            <label class="mb-0" for="granola"><img src="../img/food/granola.png" alt="Granola" class="card-img-top"></label>
                            <input type="checkbox" name="food[]" id="granola" class="checkbox-input" value="granola"/>
                            <label for="granola" class="checkbox-label mb-0">
                                <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Granola</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 col-xl-2 mb-2">
                        <div class="card">                        
                            <label class="mb-0" for="nadaC"><img src="../img/food/nonef.png" alt="Prato Vazio" class="card-img-top"></label>
                            <input type="checkbox" name="food[]" id="nadaC" class="checkbox-input" value="nonef"/>
                            <label for="nadaC" class="checkbox-label mb-0">
                                <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Não como nessa refeição</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                </div>

                <div class="form-group row">
                    <input type="button" class="btn ml-auto mt-4 button-next" id="button-food" value="Próximo" />
                </div>
            </div>
            <div class="container first-content" id="drink-page">
                <div class="row">
                    <p class="title-box mr-auto ml-auto mt-2">E para beber?</p>
                </div>
                <div class="row mb-2">
                <div class="col-sm-6 col-lg-3 mb-2">
                        <div class="card">
                            <label class="mb-0" for="agua"><img src="../img/food/agua.png" alt="Água" class="card-img-top"></label>
                            <input type="checkbox" name="drink[]" id="agua" class="checkbox-input" value="agua"/>
                            <label for="agua" class="checkbox-label mb-0">
                                <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Água</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-2">
                        <div class="card">
                            <label class="mb-0" for="iogurte"><img src="../img/food/iogurte.png" alt="Iogurte" class="card-img-top"></label>
                            <input type="checkbox" name="drink[]" id="iogurte" class="checkbox-input" value="iogurte"/>
                            <label for="iogurte" class="checkbox-label mb-0">
                                <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Iogurte</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-2">
                        <div class="card">
                            <label class="mb-0" for="achocolatado"><img src="../img/food/toddy.png" alt="Achocolatado" class="card-img-top"></label>
                            <input type="checkbox" name="drink[]" id="achocolatado" class="checkbox-input" value="toddy"/>
                            <label for="achocolatado" class="checkbox-label mb-0">
                                <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Achocolatado</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-2">
                        <div class="card">
                            <label class="mb-0" for="cafe"><img src="../img/food/cafe.png" alt="Café" class="card-img-top"></label>
                            <input type="checkbox" name="drink[]" id="cafe" class="checkbox-input" value="cafe"/>
                            <label for="cafe" class="checkbox-label mb-0">
                                <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Café</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-2">
                        <div class="card">
                            <label class="mb-0" for="leite"><img src="../img/food/leite.png" alt="Leite" class="card-img-top"></label>
                            <input type="checkbox" name="drink[]" id="leite" class="checkbox-input" value="leite"/>
                            <label for="leite" class="checkbox-label mb-0">
                                <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Leite</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-2">
                        <div class="card">
                            <label class="mb-0" for="sucoI"><img src="../img/food/sucoC.png" alt="Suco de caixinha" class="card-img-top" value="-1"></label>
                            <input type="checkbox" name="drink[]" id="sucoI" class="checkbox-input" value="sucoC"/>
                            <label for="sucoI" class="checkbox-label mb-0">
                                <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Suco de caixinha</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-2">
                        <div class="card">
                            
                            <label class="mb-0" for="sucoN"><img src="../img/food/sucoF.png" alt="Suco da fruta" class="card-img-top"></label>
                            <input type="checkbox" name="drink[]" id="sucoN" class="checkbox-input" value="sucoF"/>
                            <label for="sucoN" class="checkbox-label mb-0">
                                <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Suco da Fruta</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-2">
                        <div class="card">
                            <label class="mb-0" for="vitamina"><img src="../img/food/vitamina.png" alt="Vitamina de Frutas" class="card-img-top"></label>
                                <input type="checkbox" name="drink[]" id="vitamina" class="checkbox-input" value="vitamina"/>
                            <label for="vitamina" class="checkbox-label mb-0">
                                <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Vitamina de Frutas</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-2">
                        <div class="card">
                            <label class="mb-0" for="refrigerante"><img src="../img/food/refri.png" alt="Refrigerante" class="card-img-top"></label>
                            <input type="checkbox" name="drink[]" id="refrigerante" class="checkbox-input" value="refri"/>
                            <label for="refrigerante" class="checkbox-label mb-0">
                                <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Refrigerante</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-2 ">
                        <div class="card">
                            <label class="mb-0" for="nadaB"><img src="../img/food/noned.png" alt="Copo vazio" class="card-img-top"></label>
                            <input type="checkbox" name="drink[]" id="nadaB" class="checkbox-input" value="noned"/>
                            <label for="nadaB" class="checkbox-label mb-0">
                                <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Não bebo nada</p>
                                </div>
                            </label>
                        </div>
                    </div>

                </div>
                <div class="form-group row">
                    <input type="button" class="btn ml-auto mt-4 button-next" id="button-submit" value="Finalizar" />
                </div>
                
            </div>
        </form>



<!--   MODAL   -->
        <div class="modal fade" id="genderModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ops!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Você precisa escolher uma alternativa!
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="ageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ops!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Precisamos saber quanto anos você tem!
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="foodModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ops!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Você precisa escolher uma alternativa! Caso não coma nada, selecione a última opção.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="drinkModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ops!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Você precisa escolher uma alternativa! Caso não beba nada, selecione a última opção.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <script src="../default.js"></script>
        <script src="../quiz.js"></script>
    </body>
</html>