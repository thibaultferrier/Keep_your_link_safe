


var acc = $('.accordion');
    var i;

    //gestion des accordéons avant que le DOM soit chargé
    for (i = 0; i < acc.length; i++) {

        //affichage masqué des accordéons
        var panel = acc[i].nextElementSibling;
        panel.style.display = "none";

        
        //gestion du clic
        acc[i].addEventListener("click", function() {
           
            this.classList.toggle("active");

            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
            $('.non-visible').css('visibility','visible');
        });
    }

//quand le DOM est chargé on lance le reste
$(document).ready(function () {

    //texte de la pagination
    $('.pagination li:first-child .page-link').text('Page précédente');
    $('.pagination li:last-child .page-link').text('Page suivante');

    //affichage du curseur 'pointer' pour les titres des liens
    //gestion des tags
    $('h3').hover(function() {
         $(this).css('cursor','pointer');


    });
    //change le label des pagination
    //on récupère tous les tags
    var all_tags = $('.badge-secondary');

    for (i=0 ; i<all_tags.length ; i++) {


        //on récupère le text sous forme de tableau
        var splited_tags = all_tags[i].firstChild.textContent.split(' ');

        //on crée les tags
        $.each(splited_tags, function (index , value) {

            $('<a/>', {
                class: 'btn btn-secondary btn-tag',
                href:'/recherche?tag=' + value,
                text:value
            }).insertAfter( all_tags[i]);

        });

        //suppression du tag original
        all_tags[i].remove();


    }

});
    