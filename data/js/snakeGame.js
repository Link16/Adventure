// Enlève le bouton "start" une fois le mini-jeu lancé (pour éviter de le recliquer une fois la partie finie).
document.querySelector('button').addEventListener('click', function(el) {
    el.target.classList.add('hidden');
});


// la fonction générale qui lance le mini-jeu lorsque elle est appelé sur le ".startBtn".
function snakeGame() {

    //Affiche la phrase "ton score est de..." quand on clique sur Start.
    document.getElementById('divMyScore').classList.remove('hidden');

    // déclaration des couleurs de chaque élément.
    const CANVAS_BORDER_COLOUR = 'black';
    const CANVAS_BACKGROUND_COLOUR = 'grey';
    const SNAKE_COLOUR = 'lightgreen';
    const SNAKE_BORDER_COLOUR = 'darkgreen';
    const FOOD_COLOUR = 'red';
    const FOOD_BORDER_COLOUR = 'darkred';
    
    // forme physique du serpent.
    let snake = [
        {x: 150, y: 150},
        {x: 140, y: 150},
        {x: 130, y: 150},
        {x: 120, y: 150},
        {x: 110, y: 150}
    ]

    // déclaration du score de départ, la position de départ du serpent, puis les variables qui serviront à placer la nourriture.
    let score = 0; 
    let dx = 10;
    let dy = 0;
    let foodX;
    let foodY;

    // définition du Canvas (aire de jeu).
    var gameCanvas = document.getElementById('gameCanvas');
    var ctx = gameCanvas.getContext('2d');
    ctx.fillStyle = CANVAS_BACKGROUND_COLOUR;
    ctx.strokestyle = CANVAS_BORDER_COLOUR;
    ctx.fillRect(0, 0, gameCanvas.width, gameCanvas.height);
    ctx.strokeRect(0, 0, gameCanvas.width, gameCanvas.height);
   
    // fonction qui permet au serpent de bouger.
    function advanceSnake() {
      const head = {x: snake[0].x + dx, y: snake[0].y + dy};
      snake.unshift(head);
      const didEatFood = snake[0].x === foodX && snake[0].y === foodY;
      if (didEatFood) {
        score += 1;
        document.getElementById('score').innerHTML = score;
        createFood();
      } else {
        snake.pop();
      }
    };
    
    // fonction qui permet au serpent d'être visible
    function drawSnake() {
      snake.forEach(drawSnakePart)
    }

    // fonction qui permet de changer la direction du serpent en fonction des évènements détectés sur les touches du clavier.
    function changeDirection(event) {
        const LEFT_KEY = 37;
        const RIGHT_KEY = 39;
        const UP_KEY = 38;
        const DOWN_KEY = 40;

        if(changingDirection) return;
        changingDirection = true;

        const keyPressed = event.keyCode; //on définie ici le déplacement sur l'axe x ou y en fonction de la direction
        const goingUp = dy === -10;
        const goingDown = dy === 10;
        const goingRight = dx === 10;
        const goingLeft = dx === -10;

        if (keyPressed === LEFT_KEY && !goingRight) { //on applique les direction aux touches directionnelles
            dx = -10;
            dy = 0;
        };

        if(keyPressed === UP_KEY && !goingDown) {
            dx = 0;
            dy = -10;
        };

        if(keyPressed === RIGHT_KEY && !goingLeft) {
            dx = 10;
            dy = 0;
        };

        if(keyPressed === DOWN_KEY && !goingUp) {
            dx = 0;
            dy = 10;
        };
    };

    // fonction qui dessine chacune des parties du serpents.
    function drawSnakePart(snakePart) {
      ctx.fillStyle = SNAKE_COLOUR;
      ctx.strokestyle = SNAKE_BORDER_COLOUR;
      ctx.fillRect(snakePart.x, snakePart.y, 10, 10);   //dimensions de chaque 
      ctx.strokeRect(snakePart.x, snakePart.y, 10, 10); //partie du serpent
    };

    // définition de la tête de notre canvas (ici notre aire de jeu).
    function clearCanvas() {
        ctx.fillStyle = 'grey';
        ctx.strokeStyle = 'black';

        ctx.fillRect(0, 0, gameCanvas.width, gameCanvas.height);
        ctx.strokeRect(0, 0, gameCanvas.width, gameCanvas.height);
    };

    // fonction principale, elle permet le bon déroulement du jeu.
    function main() {
        if(didGameEnd()) return;
        setTimeout(function onTick() { //permet de réaliser chaque étape
            changingDirection = false; //pas à pas.
            clearCanvas();             //sans la ligne "setTimeout" le serpent se déplacerait d'un seul coup
            drawFood();
            advanceSnake();
            drawSnake();
            main();
        }, 100);                       //valeur à changer pour changer la vitesse des pas, et donc la vitesse du serpent.
    };

    // fonction qui permet de choisir des valeurs aléatoires sur les axes x et y.
    function randomTen(min, max) {
        return Math.round((Math.random() * (max-min) + min) / 10) * 10;
    };

    // fonction qui permet de créer la nourriture de manière aléatoire grâce à la fonction précédente.
    function createFood() {
        foodX = randomTen(0, gameCanvas.width - 10);
        foodY = randomTen(0, gameCanvas.height - 10);
        snake.forEach(function isFoodOnSnake(part) {
            const foodIsOnSnake = part.x == foodX && part.y == foodY;
            if(foodIsOnSnake)
                createFood();
        });
    }

    // fonction qui permet de rendre la nourriture visible.
    function drawFood() {
        ctx.fillStyle = FOOD_COLOUR;
        ctx.strokestyle = FOOD_BORDER_COLOUR;
        ctx.fillRect(foodX, foodY, 10, 10);   //dimensions de nos
        ctx.strokeRect(foodX, foodY, 10, 10); //carrés de nourriture.
    };

    // fonction qui permet de savoir si la partie est finie (après avoir touché un mur, ou une autre partie du corps du serpent).
    function didGameEnd() {
        for(let i = 4; i < snake.length; i++) {
            const didCollide = snake[i].x === snake[0].x && snake[i].y === snake[0].y
            
            // si le serpent touche une partie de son corps, la partie s'arrête et enregistre le score, puis affiche le bouton pour passer à l'épreuve suivante.
            if(didCollide) { 
                alert('Bien joué, ton score est de ' + score + ' points !');
                document.getElementById('nextBtn').classList.remove('hidden');
                document.getElementById('myScore').value = score;
                return true;
            };
        };
        
        const hitLeftWall = snake[0].x < 0;
        const hitRightWall = snake[0].x > gameCanvas.width - 10;
        const hitTopWall = snake[0].y < 0;
        const hitBottomWall = snake[0].y > gameCanvas.height - 10;
        const bugTrap = 12; //const bidon qui sert uniquement à être placée avant ma première condtion "hitLeftWall", voir commentaires suivants.
        
        // Si le serpent touche un mur, la partie s'arrête et enregistre le score, puis affiche le bouton pour passer à l'épreuve suivante.
        if(didGameEnd ==  bugTrap || hitLeftWall ||  hitRightWall || hitTopWall || hitBottomWall) { //Pour une raison obscure la première "const" de la condition est bien  
            alert('Bien joué, ton score est de ' + score + ' points !');                            //prise en compte au niveau du "return", mais n'est pas prise en compte
            document.getElementById('nextBtn').classList.remove('hidden');                          //au niveau ma condition d'alerte etc..
            document.getElementById('myScore').value = score;
        };
        
        return hitLeftWall || hitRightWall || hitTopWall || hitBottomWall;
    };





    // l'event listener qui détecte ce qu'il se place sur les flèches de direction du clavier.
    document.addEventListener('keydown', changeDirection);

    // lancement simple des fonctions qui génèrent la nourriture, et qui déplacent le serpent.
    createFood();
    main();
};




















// function startGame() {
//     var startTime = Date.now() + 3000;
//     var gameTime = document.getElementById("countdown");
//     setInterval(function() {
//     var playTime = startTime - Date.now();
//     console.log(playTime);
//     gameTime.innerText = parseInt(playTime / 60000) + ":" + Math.round((playTime / 1000) % 60);
//     }, 50);

//     if(playTime == 0) {
//         gameTime.classList.add('hidden');
//     }

//     setTimeout(function(){
//         return snakeGame();
//     }, 3000)
// };
