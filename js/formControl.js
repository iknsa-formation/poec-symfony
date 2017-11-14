
  $(document).on('click', '#valider', function() {

    var nom = $('#inputNom').val();
    var prenom = $('#inputPrenom').val();
    var tel = $('#inputTel').val(); 

    // Si nom n'est pas vide et n'est pas === null
    if (nom !== null && nom.trim() !== "") {
      // Si prenom n'est pas vide et n'est pas === null
      if (prenom !== null && prenom.trim() !== "") {
        // Si tel n'est pas vide et n'est pas === null
        if (tel !== null && tel.trim() !== "") {

            $('#myTable tr:last').after('<tr><td>'+nom+'</td><td>'+prenom+'</td><td>'+tel+'</td></tr>');
        }
      }
    }
  });
