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
        $("#food-page").show();
    } else {
        alert('Precisamos saber quanto anos você tem!')
        $("#button-age").blur()
    }
    
    
})

$("#button-food").click(function() {
    var food = "";
    $('input:checkbox[name="food[]"]').each(function() {
        if ($(this).is(':checked')) {
            food = $(this).val();
            console.log(food);
            
        }
    })
    console.log(food);
             
    if (food != "") {
        $("#food-page").hide();
        $("#drink-page").show();
    } else {
        alert("Você precisa escolher uma alternativa! Caso não coma nada, selecione a última opção.")
        $("#button-food").blur();
    }
    
    
})

$("#button-submit").click(function() {
    var drink = "";
    $('input:checkbox[name="drink[]"]').each(function() {
        if ($(this).is(':checked')) {
            drink = $(this).val();
        }
    })
             
    if (drink != '') {
        $('#form-quiz').submit();
        $("#button-submit").blur();
    } else {
        alert("Você precisa escolher uma alternativa! Caso não coma nada, selecione a última opção.")
        $("#button-submit").blur();
    }
})
