<?php
require_once('db.php');

$score_list = Array(
    "noned" => -1,
    "nonef" => -1,
    "biscoito" => -1,
    "cereal" => -1,
    "fruta" => 5,
    "pao" => 1,
    "queijo" => 0,
    "presunto" => -1,
    "toddy" => -1,
    "paodequeijo" => -1,
    "ovo" => 5,
    "manteiga" => -1,
    "salgadinho" => -1,
    "salgado" => -1,
    "granola" => -1,
    "salame" => -1,
    "granola" => -1,
    "refri" => -1,
    "sucoF" => -1,
    "agua" => -1,
    "sucoC" => -1,
    "iogurte" => -1,
    "vitamina" => -1,
    "cafe" => -1,
    "leite" => -1,
    "feijao" => -1,
    "arroz" => -1,
    "macarrao" => -1,
    "batataF" => -1,
    "hamburguer" => -1,
    "nugget" => -1,
    "bife" => -1,
    "batataF" => -2,
    "carne" => 1,
    "bolo" => -1,
    "frango" => 1,
    "salada" => 3,
    "omelete" => 2,
    "pizza" => -2,
);

$meal = $_POST['meal'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$food_array = $_POST['food'];
$drink_array = $_POST['drink'];
$food = '';
$drink = '';
$score = 0;

for($i = 0; $i < count($food_array); $i++)  {
    $score = $score + $score_list[$food_array[$i]];
    if($i < count($food_array) - 1) {
        $food = $food.$food_array[$i].', ';
    } else {
        $food = $food.$food_array[$i];
    }
};
for($i = 0; $i < count($drink_array); $i++)  {
    $score = $score + $score_list[$drink_array[$i]];
    if($i < count($drink_array) - 1) {
        $drink = $drink.$drink_array[$i].', ';
    } else {
        $drink = $drink.$drink_array[$i];
    }
};



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
        <link rel="stylesheet" href="styles/main.css">
        <link rel="stylesheet" href="styles/result.css">
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

        <div class="container first-content">
            <div class="row main-title">
                    <h1>Resultados</h1>
            </div>
            <div class="row">
                <h2 class="title-box mr-auto ml-auto">
                    <?php 
                        if($score > 0) {
                            echo "Parabéns! Sua alimentação está ótima";
                        } else {
                            echo "Podemos melhorar...";
                        }
                    ?>
                </h2>

            </div>
            <div class="row">
                <h2>Você escolheu:</h2>
                <div class="card mb-3">
                    <div class="row">
                        
                        <div class="card-body">

                            
                            <div class="col-12">
                                
                                
                                
                                <h3>Comidas</h3>
                                
                            

                                <?php 
                                    for($i = 0; $i < count($food_array); $i++) {
                                        echo '<img class="self-food" src="img/food/'.$food_array[$i].'.png" alt="'.$food_array[$i].'">';
                                      
                                    };
                                ?>
                            
                            </div>
                            <div class="col-12 mt-2">
                                <h3>Bebidas</h3>

                                
                                    
                                <?php 
                                    for($i = 0; $i < count($drink_array); $i++) {
                                        if($drink_array[$i] == 'cafe') {
                                            echo '<a href="posts/post01.html"><img class="self-food" src="img/food/'.$drink_array[$i].'.png" alt="'.$drink_array[$i].'"></a>';

                                        } else {
                                            echo '<img class="self-food" src="img/food/'.$drink_array[$i].'.png" alt="'.$drink_array[$i].'">';
                                        
                                        };
                                    };
                                ?>
                                <br><strong>Clique nos alimentos</strong>
                            </div>
                        </div>

                    </div>
               
                    
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12">
                            <img src="img/result-image.png" width="100%" alt="">
                </div>

            </div>
    
        </div>
        
        



        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script src="quiz.js"></script>
    </body>
</html>