$(function () {
    $("#zipCode").keyup(function () {
        //on lance la recherche à partir de trois chiffres entrer dans l'input.
         if($('#zipCode').val().length>=3)
        //on apel le controleur
        $.post('../../controllers/registerCtrl.php', {
            zipCodeSearch: $('#zipCode').val()
        }, function (cityName) {
            $("#city").empty();
            $.each(cityName, function (cityKey, cityValue) {
                //la fonction each permet de parcourir les éléments de cityName
                $("#city").append('<option value=" '+ cityValue.id +'">' + cityValue.cityName + ' ' +  '</option>')});
            //la fonction append permet de récupérer le nom des villes dans mon select
        }, 'JSON');
    });
});



$(function () {
    $('#login').blur(function () {
        $.post('controllers/registerCtrl.php', { loginVerify:$(this).val() } , function (data) {
            if(data == 1){
                $('#login').addClass('bg-danger');
                $('#register').hide();
            }else{
               $('#login').removeClass('bg-danger'); 
                $('#register').show();
            }
        },
        'JSON');
    });
});