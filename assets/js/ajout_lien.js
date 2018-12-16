const SPACE = 32;
const ENTER = 13;



$(document).ready(function () {


    //gestion des TAGS
    $('#liens_TAGS').focus( function () {

        //gestion de la bar espace
        recup_code_touche(SPACE);
        recup_code_touche(ENTER);

    });


   //on ré-insert les valeurs des tags dans l'input au moment du click sur le bouton submit
   $('#liens_save').click( function () {

       var tag = $('.btn-outline-dark');
       var tag_list = "";

       for(i=0; i<tag.length ; i++){

           tag_list = tag_list + " " + tag[i].value;
       }

       //insertion dans l'input
       $('#liens_TAGS').val(tag_list);

   })

});


function ajout_tag(nvx_tag) {

    //ajout d'un nouveau tag
    var input_tag = $('#liens_TAGS');
    var btn_tag = $('<input/>', { type: "button", id: "field", value: nvx_tag , class : "btn btn-outline-dark"});

    //insertion du tag
    if (nvx_tag !== "") {
        $(btn_tag).insertAfter(input_tag);
    }

    //reset de l'input
    input_tag.val("");
}


//lance l'ajout d'un tag quand une touche est pressé
function recup_code_touche(touche) {
    var key = false;
    $(function() {
        $(document).keyup(function(evt) {
            if (evt.keyCode == touche) {
                key = false;
            }
        }).keydown(function(evt) {

            if (evt.keyCode == touche) {
                evt.preventDefault();
                key = true;
                var nvx_tag = $('#liens_TAGS').val();
                ajout_tag(nvx_tag);
            }
        });
    });
}

