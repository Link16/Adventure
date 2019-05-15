function response1() {
    var resp = document.getElementById("response1").value;
if (resp == ("la vie" || "vie" || "La vie" || "LA VIE" || "VIE")) {
    alert("Bonne réponse! Tu peux passer à l'énigme suivante...")
}
else
    alert("Continue!")
}

function response2() {
    var resp = document.getElementById("response2").value;
if (resp == ("l'ombre" || "son ombre" || "ombre" || "Son ombre" || "SON OMBRE" || "OMBRE" || "L'OMBRE" || "une ombre" || "Une ombre", "UNE OMBRE")) {
    alert("Bonne réponse! Tu peux passer à l'énigme suivante...")
}
else
    alert("Continue!")
}

function response3() {
    var resp = document.getElementById("response3").value;
if (resp == ("le charbon" || "Le charbon" || "LE CHARBON" || "charbon" || "Charbon" || "CHARBON" || "du charbon" || "Du charbon" || "DU CHARBON" )) {
    alert("Bonne réponse! Tu peux passer à l'énigme suivante...")
}
else
    alert("Continue!")
}


response1();