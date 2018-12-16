$(document).ready(function () {

	//affichage dynamique des infos utilisateur dans le formulaire de modif
	$('tr').click(function () {

        //on récupére l'identifiant à modifier
        var identifiant_a_modif = $(this).children('th').text();
        var username_a_modif = $(this).children('td').text();

        console.log(identifiant_a_modif);
        console.log(username_a_modif);


        //on charge les modifs dans les inputs
        $('#modif_user_id').val(identifiant_a_modif);
        $('#modif_user_username').val(username_a_modif);

	});

});	
