document.getElementById("btn4").addEventListener("click", function() {
    var resp = document.getElementById("response4").value;
    if (resp=="ganon" || resp=="Ganon" || resp=="GANON" || resp=="ganondorf" || resp=="Ganondorf" || resp=="GANONDORF") {
        alert("Bonne réponse! Prépare-toi pour la prochaine énigme!")
    }
    else {
        alert("Prépare-toi pour la prochaine énigme!")
    }
});

document.getElementById("btn5").addEventListener("click", function() {
    var resp = document.getElementById("response5").value;
    if (resp=="Noctis Lucis Caelum" || resp=="noctis lucis Caelum" || resp=="Noctis lucis caelum" || resp=="Noctis" || resp=="NOCTIS" || resp=="noctis" || resp=="NOCTIS LUCIS CAELUM" ) {
        alert("Bonne réponse! Bravo! La dernière énigme t'attend...")
    }
    else {
        alert("La dernière énigme t'attend...")
    }
});

document.getElementById("btn6").addEventListener("click", function() {
    var resp = document.getElementById("response6").value;
    if (resp=="la suite de fibonacci" || resp=="La suite de fibonacci" || resp=="La suite de Fibonacci" || resp=="LA SUITE DE FIBONACCI" || resp=="fibonacci" || resp=="Fibonacci" || resp=="La Suite De Fibonacci" ) {
        alert("Bonne réponse! Félicitation!! Fin des épreuves!")
    }
    else {
        alert("Félicitation!! Fin des épreuves!")
    }
});

function toggle_text(e1e2) {
    var span = document.getElementById('e1e2');
    if(span.style.visibility == "hidden") {
      span.style.visibility = "visible";
    } 
}

function toggle_text2(e1e3) {
    var span = document.getElementById('e1e3');
    if(span.style.visibility == "hidden") {
      span.style.visibility = "visible";
    } 
}