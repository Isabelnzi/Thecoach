$("#city").on('keyup', function() {
    var code = $(this).val();
    var request = $.ajax({
        // Ce qui donnera fichier sql
        url: "{{URL::to('/recupCodePostal')}}/",
        method: "POST",
        data: {
            code: code
        },
        dataType: "json"
    });

    request.done(function(result) {
        //traitement de ton JSON
    });