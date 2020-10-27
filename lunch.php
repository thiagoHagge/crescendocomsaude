<!DOCTYPE html>
<html>
    <head>
        <title>Monte seu almoço</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="styles/main.css">
        <link rel="stylesheet" href="styles/form-quiz.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;531;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid:wght@100;300;400;900&display=swap" rel="stylesheet">
    </head>

    <body>
        

        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="menu-nav">
            
            <a class="navbar-brand mr-auto" href="index.html"><img id="logo" src="img/nav-logo.png" alt=""></a>
            
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
                            <a class="dropdown-item " id="drop-itens" href="letsbreakfast.html">Monte o seu café da manhã</a>
                            <a class="dropdown-item" id="drop-itens" href="letslunch.html">Monte o seu almoço</a>
                            <a class="dropdown-item" id="drop-itens" href="letsdinner.html">Monte o seu jantar</a>
                        </div>
                    </li>
                    <li class="nav-item active mr-5">
                        <a class="nav-link" href="feed.html">Alimentação <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mr-5 active">
                        <a class="nav-link" href="about_us.html">Quem somos <span class="sr-only">(current)</span></a>
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

        <form class="mb-2" method="POST" action="result.html" id="form-quiz">
            <input type="text" display="none" name="meal" value="L">
            <div class="container first-content" id="boy-or-girl">
                <div class="row">
                    <p class="title-quiz mr-auto ml-auto mt-2">Você é menino ou menina?</p>
                </div>
                <div class="row">

                    <div class="form-check form-check-inline ml-auto">
                        <div class="card mt-4">

                            <label class="mb-0" for="boy"><img class="card-img-top img-boy-or-girl" src="img/boy.png" alt=""></label>
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

                            <label class="mb-0" for="girl"><img class="card-img-top img-boy-or-girl" src="img/girl.png" alt=""></label>
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
                    <p class="title-quiz mr-auto ml-auto mt-2">Quantos anos você tem?</p>
                </div>
                <div class="row">
                    
                    <div class="mx-auto" id="age">
                        <img src="img/1.png" alt="">
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
                    <p class="title-quiz mr-auto ml-auto mt-2">O que costuma comer no café da manhã?</p>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-6 col-lg-3 col-xl-2 mb-2">
                        <div class="card">
                            <label class="mb-0" for="feijao"><img src="img/food/feijao.png" alt="Feijão" class="card-img-top"></label>
                            <input type="checkbox" name="food" id="feijao" class="checkbox-input" value="feijao"/>
                            <label for="feijao" class="checkbox-label mb-0  ">
                                <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Feijão</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 col-xl-2 mb-2">
                        <div class="card">
                            <label class="mb-0" for="arroz"><img src="img/food/arroz.png" alt="Arroz" class="card-img-top"></label>
                            <input type="checkbox" name="food" id="arroz" class="checkbox-input" value="arroz"/>
                            <label for="arroz" class="checkbox-label mb-0  ">
                                <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Arroz</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 col-xl-2 mb-2">
                        <div class="card">
                            <label class="mb-0" for="batataF"><img src="img/food/batataF.png" alt="Batata Frita" class="card-img-top"></label>
                            <input type="checkbox" name="food" id="batataF" class="checkbox-input" value="batataF"/>
                            <label for="batataF" class="checkbox-label mb-0  ">
                                <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Batata Frita</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 col-xl-2 mb-2">
                        <div class="card">
                            <label class="mb-0" for="hamburger"><img src="img/food/hamburguer.png" alt="Hambúrguer" class="card-img-top"></label>
                            <input type="checkbox" name="food" id="hamburger" class="checkbox-input" value="hamburguer"/>
                            <label for="hamburger" class="checkbox-label mb-0  ">
                                <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Hambúrguer</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 col-xl-2 mb-2">
                        <div class="card">
                            <label class="mb-0" for="nugget"><img src="img/food/nugget.png" alt="Nugget" class="card-img-top"></label>
                            <input type="checkbox" name="food" id="nugget" class="checkbox-input" value="nugget"/>
                            <label for="nugget" class="checkbox-label mb-0  ">
                                <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Nugget</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 col-xl-2 mb-2">
                        <div class="card">
                            <label class="mb-0" for="carne"><img src="img/food/carne.png" alt="Bife" class="card-img-top"></label>
                            <input type="checkbox" name="food" id="carne" class="checkbox-input" value="carne"/>
                            <label for="carne" class="checkbox-label mb-0  ">
                                <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Carne</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 col-xl-2 mb-2">
                        <div class="card">
                            <label class="mb-0" for="frango"><img src="img/food/frango.png" alt="Frango" class="card-img-top"></label>
                            <input type="checkbox" name="food" id="frango" class="checkbox-input" value="frango"/>
                            <label for="frango" class="checkbox-label mb-0  ">
                                <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Frango</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 col-xl-2 mb-2">
                        <div class="card">
                            <label class="mb-0" for="salada"><img src="img/food/salada.png" alt="Salada" class="card-img-top"></label>
                            <input type="checkbox" name="food" id="salada" class="checkbox-input" value="salada"/>
                            <label for="salada" class="checkbox-label mb-0  ">
                                <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Salada</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 col-xl-2 mb-2">
                        <div class="card">
                            <label class="mb-0" for="bolo"><img src="img/food/macarrao.png" alt="Macarrão" class="card-img-top"></label>
                            <input type="checkbox" name="food" id="bolo" class="checkbox-input" value="macarrao"/>
                            <label for="bolo" class="checkbox-label mb-0  ">
                                <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Macarrão</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 col-xl-2 mb-2">
                        <div class="card">                        
                            <label class="mb-0" for="nadaC"><img src="img/food/nonef.png" alt="Prato vazio" class="card-img-top"></label>
                            <input type="checkbox" name="food" id="nadaC" class="checkbox-input" value="nonef"/>
                            <label for="nadaC" class="checkbox-label mb-0  ">
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
                    <p class="title-quiz mr-auto ml-auto mt-2">E para beber?</p>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-6 col-lg-3 mb-2">
                        <div class="card">
                            <label class="mb-0" for="refri"><img src="img/food/refri.png" alt="Refrigerante" class="card-img-top"></label>
                            <input type="checkbox" name="drink" id="refri" class="checkbox-input" value="refri"/>
                            <label for="refri" class="checkbox-label mb-0">
                                <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Refrigerante</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-lg-3 mb-2">
                        <div class="card">
                            <label class="mb-0" for="sucoF"><img src="img/food/sucoF.png" alt="Suco da Fruta" class="card-img-top"></label>
                            <input type="checkbox" name="drink" id="sucoF" class="checkbox-input" value="sucoF"/>
                            <label for="sucoF" class="checkbox-label mb-0">
                                <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Suco da Fruta</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-2">
                        <div class="card">
                            <label class="mb-0" for="sucoC"><img src="img/food/sucoC.png" alt="Suco de caixinha" class="card-img-top" value="-1"></label>
                            <input type="checkbox" name="drink" id="sucoC" class="checkbox-input" value="sucoC"/>
                            <label for="sucoC" class="checkbox-label mb-0">
                                <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Suco de caixinha</p>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3 mb-2">
                        <div class="card">
                            <label class="mb-0" for="agua"><img src="img/food/agua.png" alt="Água" class="card-img-top"></label>
                            <input type="checkbox" name="drink" id="agua" class="checkbox-input" value="agua"/>
                            <label for="agua" class="checkbox-label mb-0">
                                <div class="card-body checkbox-text">
                                    <p class="checkbox-text--title">Água</p>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3 mb-2">
                        <div class="card">
                            <label class="mb-0" for="nadaB"><img src="img/food/noned.png" alt="Copo vazio" class="card-img-top"></label>
                            <input type="checkbox" name="drink" id="nadaB" class="checkbox-input" value="noned"/>
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
            
            </div>
        </form>
        



        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script src="quiz.js"></script>
    </body>
</html>