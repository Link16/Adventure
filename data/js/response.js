document.getElementById("btn1").addEventListener("click", function() {
    var resp = document.getElementById("response1").value;
    if (resp=="la vie" || resp=="La vie" || resp=="vie" || resp=="VIE" || resp=="La Vie") {
        alert("Bonne réponse! Tu peux passer à l'énigme suivante...")
    }
    else {
        alert("Continue!")
    }

});

document.getElementById("btn2").addEventListener("click", function() {
    var resp = document.getElementById("response2").value;
    if (resp=="l'ombre" || resp=="son ombre" || resp=="ombre" || resp=="Son ombre" || resp=="SON OMBRE" || resp=="OMBRE" || resp=="L'OMBRE" || resp=="une ombre" || resp=="Une ombre" || resp=="UNE OMBRE") {
        alert("Bonne réponse! Tu peux passer à l'énigme suivante...")
    }
    else {
        alert("Continue!")
    }
});

// Faire apparaître les questions au fur et à mesure

document.getElementById("btn3").addEventListener("click", function() {
    var resp = document.getElementById("response3").value;
    if (resp=="le charbon" || resp=="Le charbon" || resp=="LE CHARBON" || resp=="charbon" || resp=="Charbon" || resp=="CHARBON" || resp=="du charbon" || resp=="Du charbon" || resp=="DU CHARBON" ) {
        alert("Bonne réponse! Tu as fini la première épreuve!")
    }
    else {
        alert("Tu as fini la première épreuve!")
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
