document.getElementById("btn1").addEventListener("click", function() {
    var resp = document.getElementById("response1").value;
    if (resp == "la vie" || "La vie" || "vie" || "VIE" || "La Vie") {
        alert("Bonne réponse! Tu peux passer à l'énigme suivante...")
    }
    else {
        alert("Continue!")
    }
});

document.getElementById("btn2").addEventListener("click", function() {
    var resp = document.getElementById("response2").value;
    if (resp == "l'ombre" || "son ombre" || "ombre" || "Son ombre" || "SON OMBRE" || "OMBRE" || "L'OMBRE" || "une ombre" || "Une ombre" || "UNE OMBRE") {
        // document.getElementById('response2').setAttribute('disabled');
        alert("Bonne réponse! Tu peux passer à l'énigme suivante...")
    }
    else {
        alert("Continue!")
    }
});

// Faire apparaître les questions au fur et à mesure

document.getElementById("btn3").addEventListener("click", function() {
    var resp = document.getElementById("response3").value;
    if (resp == "le charbon" || "Le charbon" || "LE CHARBON" || "charbon" || "Charbon" || "CHARBON" || "du charbon" || "Du charbon" || "DU CHARBON" ) {
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