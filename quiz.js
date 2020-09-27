var foodScore
var drinkScore

$("#button-gender").click(function() {          
    var gender = "";
    $('input:radio[name=gender]').each(function() {
        if ($(this).is(':checked')) {
            gender = $(this).val();
        }
    })
             
    if (gender != '') {
        $("#boy-or-girl").hide();
        $("#how-old").show();
    } else {
        alert("Você precisa escolher uma alternativa!")
        $("#button-gender").blur();
    }
})

$("#button-age").click(function() {
    var age = '';
    $('input:radio[name=age]').each(function() {
        if($(this).is(':checked')) {
            age = $(this).val()
        } 
    })

    if (age != '') {
        $("#how-old").hide();
        $("#food").show();
    } else {
        alert('Precisamos saber quanto anos você tem!')
        $("#button-age").blur()
    }


})

$("#button-food").click(function() {
    
    var control = 0;
    $('input:checkbox[name=food]').each(function() {
        if($(this).is(':checked')) {
            if(control == 0) {
                foodScore = 0
                control = 1 
            }
            foodScore += parseInt($(this).val(), 10)
            parseInt(foodScore, 10)
        } 
    })
    
    if (foodScore || foodScore == 0) {
        $("#food").hide();
        $("#drink").show();
    } else {
        alert("Você precisa escolher uma alternativa! Caso não coma nada, selecione a última opção")
        $("#button-food").blur()
    }
})

$("#button-submit").click(function() {


    var control = 0
    $('input:checkbox[name=drink]').each(function() {
        if($(this).is(':checked')) {
            if(control == 0) {
                drinkScore = 0
                control = 1 
            }
            drinkScore += parseInt($(this).val(), 10)
            parseInt(drinkScore, 10)
        } 
    })
    if (drinkScore || drinkScore == 0) {
        $('#form-quiz').submit();
        $("#button-submit").blur();
    } else {
        alert("Você precisa escolher uma alternativa! Caso não coma nada, selecione a última opção")
    }
})
