for (i = 0; i < 5; i++)
    {
        if (document.querySelector("name")[i].textContent == "") {
            function Message() {
                var msg="Le formulaire n'est pas rempli correctement. Votre inscription n'est pas validée!";
                alert(msg);
            }
        }
        else
            function Message() {
                var msg="Votre inscription est validée!";
                // console.log(msg)
                alert(msg);
        }
    }
 
    <script>
    var formValid = document.getElementById('bouton_envoi');
    var lastName = document.getElementById('lastName');
    var missLastName = document.getElementById('missLastName');
    
    formValid.addEventListener('click', validation);

    function validation(event) {
      if (lastName.validity.valueMissing) {
        event.preventDefault();
        missLastName.textContent = 'Prénom manquant';
        missLastName.style.color = 'red';
      }
    }
  </script>