//Ajax qui permet de récupérer le code postal et la ville
$(function () {
    $("#zipCode").keyup(function () {
        //on lance la recherche à partir de trois chiffres entrer dans l'input.
        if ($('#zipCode').val().length >= 3)
            //on apel le controleur
            $.post('../../controllers/registerCtrl.php', {
                zipCodeSearch: $('#zipCode').val()
            }, function (cityName) {
                $("#city").empty();
                $.each(cityName, function (cityKey, cityValue) {
                    //la fonction each permet de parcourir les éléments de cityName
                    $("#city").append('<option value=" ' + cityValue.id + '">' + cityValue.cityName + ' ' + '</option>')
                });
                //la fonction append permet de récupérer le nom des villes dans mon select
            }, 'JSON');
    });
});

// Ajax pour verifier si l'utilisateur existe 
$(function () {
    //l'événement blur = perte de focus
    $('#login').blur(function () {
        $.post('controllers/registerCtrl.php', {loginVerify: $(this).val()}, function (data) {
            if (data == 1) {
                $('#login').addClass('bg-danger');
                $('#register').hide();
            } else {
                $('#login').removeClass('bg-danger');
                $('#register').show();
            }
        },
                'JSON');
    });
});

//Ajax pour verifier si l'utilisateur est bien enregistré
$(function () {
    //l'événement click = perte de focus
    $('#participe').click(function () {
        $.post('controllers/indexCtrl.php', {registerVerify: $(this).val()}, function (data) {
           $('#participe').toggleClass('bg-success');
          
        },
                'JSON');
    });
});





// fonction pour le bouton qui permet de remonter en haut de page
window.onscroll = function () {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}
// quand on clique sur le bouton retour vers le haut
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}


