<?php
    require_once('db.php');

    $score_list = Array(
        "agua" => [1, ''],
        "arroz" => [1, 'm'],
        "batataF" => [-2, 'g'],
        "bife" => [1, 'p'],
        "biscoito" => [-1, 'm'],
        "biscoitoR" => [-2, 'g'],
        "bolo" => [-1, 'm'],
        "boloP" => [-2, 'g'],
        "cafe" => [-1, ''],
        "carne" => [1, 'p'],
        "cereal" => [-1, 'm'],
        "cerealN" => [1, 'm'],
        "noned" => [0, ''],
        "nonef" => [-2, ''],
        "fruta" => [2, 'v'],
        "pao" => [1, 'm'],
        "queijo" => [1, 'l'],
        "presunto" => [-1, 'p'],
        "toddy" => [-2, 'g'],
        "paodequeijo" => [1, 'm'],
        "ovo" => [2, 'c'],
        "manteiga" => [-1, 'g'],
        "salgadinho" => [-2, 'g'],
        "salgado" => [-2, 'g'],
        "granola" => [2, 'm'],
        "salame" => [-2, 'g'],
        "refri" => [-2, 'g'],
        "sucoF" => [1, 'v'],
        "sucoC" => [-2, 'g'],
        "iogurte" => [1, 'l'],
        "vitamina" => [2, 'v'],
        "leite" => [1, 'l'],
        "feijao" => [1, 'le'],
        "macarrao" => [1, 'm'],
        "hamburguer" => [-1, 'g'],
        "nugget" => [-2, 'g'],
        "frango" => [1, 'p'],
        "salada" => [2, 'v'],
        "omelete" => [2, 'p'],
        "pizza" => [-2, 'g'],
        "verdura" => [2, 'v'],  
        "strogonoff" => [1, 'p'],  
        "farofa" => [0, 'm'],
        "sopa" => [1, 'v'],
        "miojo" => [-2, 'm'],
    );

    $meal = $_POST['meal'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $food_array = $_POST['food'];
    $drink_array = $_POST['drink'];
    $food = '';
    $drink = '';
    $score = 0;
    $checkType = false;
    $eatAll = false;
    $eatP = false;
    $eatV = false;
    $eatM = false;

    function checkIfEat($type) {
        global $eatP;
        global $eatV;
        global $eatM;
        
        if ($type == 'l' or $type == 'p' or $type == 'le') {
            $eatP = true;
        } elseif ($type == 'v') {
            $eatV = true;
        } elseif ($type == 'm') {
            $eatM = true;
        }
    }
    for($i = 0; $i < count($food_array); $i++)  {
        $score = $score + $score_list[$food_array[$i]][0];
        if($i < count($food_array) - 1) {
            $food = $food.$food_array[$i].', ';
        } else {
            $food = $food.$food_array[$i];
        }
        checkIfEat($score_list[$food_array[$i]][1]);
    }
    for($i = 0; $i < count($drink_array); $i++)  {
        $score = $score + $score_list[$drink_array[$i]][0];
        if($i < count($drink_array) - 1) {
            $drink = $drink.$drink_array[$i].', ';
        } else {
            $drink = $drink.$drink_array[$i];
        }
        checkIfEat($score_list[$drink_array[$i]][1]);
    };
    if($eatP and $eatV and $eatM) {
        $eatAll = true;
    }

    function eachImg($type) {
        global $food_array;
        global $drink_array;
        global $score_list;
        global $checkType;
        for($i = 0; $i < count($food_array); $i++) {
            if($score_list[$food_array[$i]][1] == $type) {
                echo '<img class="self-food" src="img/food/'.$food_array[$i].'.png" alt="'.$food_array[$i].'">';
                $checkType = false;
            }
        };
        for($i = 0; $i < count($drink_array); $i++) {
            if($score_list[$drink_array[$i]][1] == $type) {
                echo '<img class="self-food" src="img/food/'.$drink_array[$i].'.png" alt="'.$drink_array[$i].'">';
                $checkType = false;
            }
        };
    }
    function printImg($type) {
        global $checkType;
        $checkType = true;
        if(is_array($type)) {
            for ($i = 0; $i < count($type); $i++) {
                eachImg($type[$i]);
            }
        } else {
            eachImg($type);
        }
        if($checkType){
            echo '<img class="self-food" src="../img/food/null.png" alt="Nada">';
            
        }
    }
    function forMeal($b, $l, $d) {
        global $meal;
        if($meal == 'B') {
            echo $b;
        }   elseif ($meal == 'L') {
            echo $l;
        }   elseif ($meal == 'D') {
            echo $d;
        }
    }





    $objDb = new db();
    $link = $objDb->connect_mysql();
    $sql = " insert into alimentacao(refeicao, sexo, idade, comida, bebida, score) values ('$meal', '$gender', '$age', '$food', '$drink', '$score') ";

    mysqli_query($link, $sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Resultado - Crescendo com Saúde</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="../styles/quiz.css">
        <link rel="stylesheet" href="../styles/main.css">
        <link rel="stylesheet" href="../styles/result.css">
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

        <div class="container first-content">

            <div class="row main-title">
                    <h1 style="background: #ffffff98; display:inline">Resultados</h1>
            </div>
            <div class="row">
                
                    <?php 
                        if($score > 0 and $eatAll) {
                            echo "<h2 class='title-box mr-auto ml-auto' style='background-image: url(../img/confetti.gif); height: 4rem;font-size:40px;'>Parabéns! Sua alimentação está ótima</h2>";
                            echo "<audio src='../audio/yes.m4a' autoplay></audio>";
                        } else {
                            echo "<h2 class='title-box mr-auto ml-auto' style='font-size:40px;display:inline'>Podemos melhorar...</h2>";
                            echo "<audio src='../audio/no.mp3' autoplay></audio>";
                        }
                    ?>
                

            </div>
            
            <div class="card my-3 mr-auto ml-auto" style="background:#ffffffc8">
                <div class="row">
                    
                    <div class="card-body">
                        <h2>Você escolheu:</h2>

                        
                        <div class="col-12">

                            
                            <div class="food-line">
                                <h4>Gordura e açúcares</h4>
                                
                                <?php 
                                    printImg('g');
                                ?>
                            </div>
                        </div>
                        <div class="col-12 mt-2">
                            
                            
                            <div class="food-line">
                                <h4>Leite e seus derivados, carne, ovos e leguminosas (feijões)</h4>

                                <?php 
                                    printImg(['l', 'p', 'le']);
                                ?>
                            </div>   

                        </div>
                        <div class="col-12 mt-2">
                            
                            
                            <div class="food-line">
                                <h4>Frutas e verduras</h4>
                                
                                <?php 
                                    printImg('v');
                                ?>
                            </div>
                        </div>
                        <div class="col-12 mt-2">
                            
                            
                            <div class="food-line">
                                <h4>Cereais, tubérculos, raízes e massas</h4>
                                <?php 
                                    printImg('m');
                                ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="mt-2 d-block">
                <h3 class="title-box mr-auto ml-auto" style="width:90%">
                    <?php
                        $titleB = "O café da manhã é uma das principais refeições do dia e por isso é importante escolher bem e conhecer a respeito dos alimentos escolhidos!!";
                        $titleL = "O almoço é uma das principais refeições do dia e por isso é importante escolher bem e conhecer a respeito dos alimentos escolhidos!!";
                        $titleD = "O jantar é uma das principais refeições do dia e por isso é importante escolher bem e conhecer a respeito dos alimentos escolhidos!!";

                        forMeal($titleB, $titleL, $titleD);
                       
                    ?>
                </h3>
                <div class="row news">
                    <div class="card">
                        <div class="card-body">
                            <a href="#" data-toggle="modal" data-target="#imgPyramid">
                                <img class="f-left" src="../img/piramide.png" alt="Pirâmide alimentar" id="piramide">
                            </a>
                        
                            <p>
                                Para ter uma alimentação saudável, temos que comer todos os grupos alimentares no dia, distribuídos dentro das nossas refeições nas porções recomendadas para a nossa idade.
                            </p>
                            <p>
                                Quando comemos muito de um grupo e não comemos do outro, estamos deixando de adquirir nutrientes que são importantes para ficarmos grandes e saudáveis! 
                            </p>
                            <p>
                                Quando pensamos no que comer, devemos saber classificar os <a tabindex="0" type="button" class="badge badge-warning" data-toggle="popover" data-trigger="focus" data-placement="top" title="O que são alimentos naturais e pouco processados?" data-content="Alimentos naturais ou in natura são obtidos diretamente de plantas ou de animais e não sofrem qualquer alteração após deixar a natureza. Já os alimentos pouco processados são os alimentos in natura que passaram por processos diversos, mas que não tiveram outras substâncias acrescentadas.">alimentos naturais e pouco processados</a>, esses são os alimentos na sua forma mais natural, por isso têm mais nutrientes para nos dar mais força. Devemos sempre preferi-los.
                            </p>
                            <p>
                                Os chamados de <a tabindex="0" type="button" class="badge badge-warning" data-toggle="popover" data-trigger="focus" data-placement="top" title="O que são alimentos processados?" data-content="Os alimentos processados são fabricados a partir de alimentos naturais e tem sal ou açúcar ou outra substância para fazer com que durem mais tempo e sejam mais gostosos.">processados</a> tem açúcar e sal acrescentados a sua composição. Devemos consumir menos.
                            </p>
                            <p>
                                Já os <a tabindex="0" type="button" class="badge badge-warning" data-toggle="popover" data-trigger="focus" data-placement="top" title="O que são alimentos ultraprocessados?" data-content="Os alimentos ultraprocessados são alimentos industriais feitos praticamente só de substâncias como óleos, gorduras, açúcar, amido e proteínas; ou derivadas dessas substâncias, como gorduras hidrogenadas, amido modificado; eles também podem ser feitos de substâncias feitas em laboratório, como corantes, aromatizantes, realçadores de sabor e vários coisas que tornam o alimento mais colorido e saboroso.">ultraprocessados</a> são os alimentos em que são acrescentados o açúcar, sal, gordura e cores ou conservantes artificiais, além de outras coisas. Devemos evitar-los.
                            </p>
                            <small>Para entender melhor, clique nos nomes marcados.</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-3">
                <div class="row">
                    <div class="card-body">
                        <div class="col-12">
                            <h5>Exemplos de naturais ou pouco processados que devem ser preferidos:</h5>
                            <div class="example-line text-center">
                                <?php
                                    $exampleNB = '<img class="self-food" src="../img/food/fruta.png" alt="Fruta">
                                    <img class="self-food" src="../img/food/ovo.png" alt="Ovo">
                                    <img class="self-food" src="../img/food/leite.png" alt="Leite">';
                                    $exampleNL = '<img class="self-food" src="../img/food/verdura.png" alt="Verdura">
                                    <img class="self-food" src="../img/food/arroz.png" alt="Arroz">
                                    <img class="self-food" src="../img/food/feijao.png" alt="Feijão">';
                                    $exampleND = '<img class="self-food" src="../img/food/sucoF.png" alt="Suco de Fruta">
                                    <img class="self-food" src="../img/food/carne.png" alt="carne">
                                    <img class="self-food" src="../img/food/macarrao.png" alt="Macarrão">';
                                    forMeal($exampleNB, $exampleNL, $exampleND);
                                ?>
                               
                            </div>
                        </div>
                        <div class="col-12">
                            <h5>Exemplo de processados que devem ser comidos de vez em quando:</h5>
                            <div class="example-line text-center">
                                <?php
                                    $examplePB = '<img class="self-food" src="../img/food/pao.png" alt="pao">
                                    <img class="self-food" src="../img/food/queijo.png" alt="Queijo">
                                    <img class="self-food" src="../img/food/granola.png" alt="Granola">';
                                    $examplePL = '<img class="self-food" src="../img/food/pao.png" alt="Pão">
                                    <img class="self-food" src="../img/food/queijo.png" alt="Queijo">';
                                    $examplePD = '<img class="self-food" src="../img/food/pao.png" alt="Pão">
                                    <img class="self-food" src="../img/food/queijo.png" alt="Queijo">
                                    <img class="self-food" src="../img/food/paodequeijo.png" alt="Pão de Queijo">';
                                    forMeal($examplePB, $examplePL, $examplePD);
                                ?>
                            </div>
                        </div>
                        <div class="col-12">
                            <h5>Exemplo de ultraprocessados que devem ser evitados:</h5>
                            <div class="example-line text-center">
                                <?php
                                    $exampleUB = '<img class="self-food" src="../img/food/biscoitoR.png" alt="Biscoito Recheado">
                                    <img class="self-food" src="../img/food/toddy.png" alt="Toddy">
                                    <img class="self-food" src="../img/food/presunto.png" alt="Presunto">';
                                    $exampleUL = '<img class="self-food" src="../img/food/refri.png" alt="Refrigerante">
                                    <img class="self-food" src="../img/food/miojo.png" alt="Miojo">
                                    <img class="self-food" src="../img/food/nugget.png" alt="Nugget">';
                                    $exampleUD = '<img class="self-food" src="../img/food/salgadinho.png" alt="Salgadinho">
                                    <img class="self-food" src="../img/food/nugget.png" alt="Nugget">
                                    <img class="self-food" src="../img/food/refri.png" alt="Refrigerante">';
                                    forMeal($exampleUB, $exampleUL, $exampleUD);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-3" id="tip">
                <div class="row">
                    <div class="card-body">
                        <div class="row mx-2">

                        <?php
                            $tipB = "<h3>Dicas de pratos para o café da manhã:</h3>
                            <ul>
                                <li>Uma maçã, torrada com queijo e um copo de leite gelado.</li>
                                <li>Ovos mexidos com queijo e vegetais variados, bolachas integrais e suco de frutas ou iogurte com frutas picadas.</li>
                            </ul>";
                            $tipL = "<h3>Dicas de pratos para o almoço:</h3>
                            <ul>
                                <li>Arroz com ervilhas e cenoura, iscas de frango grelhadas, brócolis no vapor, e de sobremesa: laranja.</li>
                                <li>Arroz, feijão, bife de carne, salada de agrião e beterraba com molho de manga (manga, azeite, salsa, alho, cebola e sal), e de sobremesa: 1 kiwi.</li>
                            </ul>";
                            $tipD = "<h3>Dicas de pratos para o jantar:</h3>
                            <ul>
                                <li>Macarrão com legumes e frango assado, e de sobremesa: ½ pera com casca.</li>
                                <li>Salada de tomate, sopa de feijão com frango e legumes e pão (para acompanhamento), de sobremesa: ½ maçã com casca.</li>
                            </ul>";
                            forMeal($tipB, $tipL, $tipD)
                        ?>
                        </div>
                    </div>
                </div>
            </div>
                    <div>
                        <div class="row text-center mt-5">
                            <div class="col-12">

                                <h3 class="title-box mx-auto" style="width:90%">Para ter uma boa relação com a comida e ser saudável, além de prestar atenção nos alimentos, também é importante:</h3>
                            </div>
                            <?php
                                $tipFB = '<div class="col-md-4">
                                            <figure class="tip-family">
                                                <img src="../img/tip1B.png" alt="Família almoçando junta" style="width:100%">
                                                <figcaption>Comer preferencialmente em família</figcaption>
                                            </figure>
                                        </div>
                                        <div class="col-md-4">
                                            <figure class="tip-family">
                                                <img src="../img/tip2B.png" alt="Irmãs dividindo uma melancia" style="width:100%">
                                                <figcaption>Estimular repartição e compartilhamento dos alimentos</figcaption>
                                            </figure>
                                        </div>
                                        <div class="col-md-4">
                                            <figure class="tip-family">
                                                <img src="../img/tip3B.png" alt="Mãe e filhas cozinhando juntas" style="width:100%">
                                                <figcaption>Preparar as refeições em família e dividir tarefas</figcaption>
                                            </figure>
                                        </div>';
                                $tipFL = '<div class="col-md-4">
                                            <figure class="tip-family">
                                                <img src="../img/tip1L.png" alt="Família almoçando junta" style="width:100%">
                                                <figcaption>Comer preferencialmente em família</figcaption>
                                            </figure>
                                        </div>
                                        <div class="col-md-4">
                                            <figure class="tip-family">
                                                <img src="../img/tip2L.png" alt="Irmãs dividindo uma melancia" style="width:100%">
                                                <figcaption>Estimular repartição e compartilhamento dos alimentos</figcaption>
                                            </figure>
                                        </div>
                                        <div class="col-md-4">
                                            <figure class="tip-family">
                                                <img src="../img/tip3L.png" alt="Mãe e filhas cozinhando juntas" style="width:100%">
                                                <figcaption>Preparar as refeições em família e dividir tarefas</figcaption>
                                            </figure>
                                        </div>';
                                $tipFD = '<div class="col-md-4">
                                            <figure class="tip-family">
                                                <img src="../img/tip1D.png" alt="Família jantando junta" style="width:100%">
                                                <figcaption>Comer preferencialmente em família</figcaption>
                                            </figure>
                                        </div>
                                        <div class="col-md-4">
                                            <figure class="tip-family">
                                                <img src="../img/tip2D.png" alt="Irmãos dividindo um sanduíche" style="width:100%">
                                                <figcaption>Estimular repartição e compartilhamento dos alimentos</figcaption>
                                            </figure>
                                        </div>
                                        <div class="col-md-4">
                                            <figure class="tip-family">
                                                <img src="../img/tip3D.png" alt="Pai e mãe cozinhado junto com sua filhinha" style="width:100%">
                                                <figcaption>Preparar as refeições em família e dividir tarefas</figcaption>
                                            </figure>
                                        </div>';
                                forMeal($tipFB, $tipFL, $tipFD);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 mx-auto mt-2 text-center">
                <h3 class="title-box">Para saber mais, assista o vídeo</h3>

                    <iframe width="560" height="315" src="https://www.youtube.com/embed/r6ih9ti9lsc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="row">
                <?php 
                    if($meal == 'B') {
                        echo "<a href='api/lunch.php' class='btn btn-success btn-quiz my-3 ml-auto mr-5 '>Agora conte-nos sobre seu almoço</a>";
                    }   elseif ($meal == 'L') {
                        echo "<a href='api/dinner.php' class='btn btn-primary btn-quiz my-3 ml-auto mr-5    '>Agora conte-nos sobre seu jantar</a>";
                    }   elseif ($meal == 'D') {
                        echo "<a href='api/breakfast.php' class='btn btn-danger btn-quiz my-3 ml-auto mr-5  '>Agora conte-nos sobre seu café da manhã</a>";
                    }
                ?>
            </div>
    
        </div>

        <!-- MODAL -->
            <div class="modal fade" id="imgPyramid" aria-hidden="true" tabindex="-1">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Pirâmide Alimentar</h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <span>x</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="../img/piramide.png" style="width: 100%" alt="Pirâmide alimentar">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Já <a href=""></a>prendi!!</button>
                        </div>
                    </div>
                </div>
            </div>
        
        


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script src="../quiz.js"></script>
        <script src="../default.js"></script>
        <script>
            $(function () {
                $('[data-toggle="popover"]').popover()
            })
        </script>

    </body>
</html>