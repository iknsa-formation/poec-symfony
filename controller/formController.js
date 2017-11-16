$(document).ready(function(){
  var input = $('#valider');
  var $nom = $('#nom'),
      $mail = $('#mail'),
      $prenom = $('#prenom'),
      $tel = $('#tel');

  $nom.blur(function() {
    if($(this).val().length < 2 || $(this).val().length > 25 ) {
      $(this).removeClass('is-valid');
      $(this).addClass('is-invalid');
    }
    else {
      $(this).removeClass('is-invalid');
      $(this).addClass('is-valid');
    }
  }) 

  $prenom.blur(function() {
    if($(this).val().length < 2 || $(this).val().length > 25 ) {
      $(this).removeClass('is-valid');
      $(this).addClass('is-invalid');
    }
    else {
      $(this).removeClass('is-invalid');
      $(this).addClass('is-valid');
    }
  }) 

  $mail.blur(function() {
    var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
    // On utilise la méthode test(str) de l'objet RegExp pour la vérification
    if(!regex.test($(this).val())) {
      $(this).removeClass('is-valid');
      $(this).addClass('is-invalid');
    }
    else {
      $(this).removeClass('is-invalid');
      $(this).addClass('is-valid');
    }
  })

  $tel.blur(function() {
    // N'accepte que les numéros français (peut être modifié)
    var regex = /^0[1-68]([-. ]?[0-9]{2}){4}$/;
    
    if(isNaN(tel) && !regex.test($(this).val())) {
      $(this).removeClass('is-valid');
      $(this).addClass('is-invalid');
    }
    else {
      $(this).removeClass('is-invalid');
      $(this).addClass('is-valid');
    }
  }) 
});