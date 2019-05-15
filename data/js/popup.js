    for (i = 0; i < 5; i++)
    {
<<<<<<< HEAD
        if (document.querySelector("#name")[i].textContent == "") {
=======
        if (document.querySelector("name")[i].textContent == "") {
>>>>>>> david
            function Message() {
                var msg="Le formulaire n'est pas rempli correctement. Votre inscription n'est pas validée!";
                alert(msg);
            }
        }
        else
            function Message() {
                var msg="Votre inscription est validée!";
                console.log(msg)
                alert(msg);
        }
    }
    