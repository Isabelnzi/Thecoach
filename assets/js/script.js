$(function () {
    $("#zipCode").keyup(function () {
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



