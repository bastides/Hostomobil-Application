$(function() {

    $('#username, #password, #fiche_client_nom, #fiche_vehicule_immat').keyup(function(){
        this.value = this.value.toUpperCase();
    });

});
