var foodScore
var drinkScore
var audioError = new Audio('audio/error.mp3')

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
        $('html,body').scrollTop(0);
    } else {
        audioError.play();
        setTimeout(function() {$('#genderModal').modal('show');}, 200)
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
        $('html,body').scrollTop(0);
    } else {
        audioError.play();
        setTimeout(function() {$('#ageModal').modal('show');}, 200)
        $("#button-age").blur()
    }
    
    
})

$("#button-food").click(function() {
    var food = "";
    $('input:checkbox[name="food[]"]').each(function() {
        if ($(this).is(':checked')) {
            food = $(this).val();
            console.log($(this).val());
            
        }
    })
    console.log(food);
             
    if (food != "") {
        $("#food-page").hide();
        $("#drink-page").show();
        $('html,body').scrollTop(0);
    } else {
        audioError.play();
        setTimeout(function() {$('#foodModal').modal('show');}, 200)
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
        audioError.play();
        setTimeout(function() {$('#drinkModal').modal('show');}, 200)
        $("#button-submit").blur();
    }
})
