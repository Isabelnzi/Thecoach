$(function () {
    $("#zipCode").keyup(function () {
        $.post('../../controllers/registerCtrl.php', {
            zipCodeSearch: $('#zipCode').val()
        }, function (cityName) {
            $("#city").empty();
            $.each(cityName, function (cityKey, cityValue) {
                //la fonction each permet de parcourir les éléments de cityName
                $("#city").append('<option value=" '+ cityValue.id +'">' + cityValue.cityName + ' ' +  '</option>')});
        }, 'JSON');
    });
});



