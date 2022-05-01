<?php
require(__DIR__ . "/../../partials/nav.php");
?>

<div class = "container-fluid w-100" >
  <div class = "mx-auto text-center">
    <canvas class="mx-auto" id="canvas" width="600 " height="400" tabindex="1"> </canvas>
  </div>
</div>

<script>
// Arcade Shooter game

// Get a reference to the canvas DOM element
var canvas = document.getElementById('canvas');
// Get the canvas drawing context
var context = canvas.getContext('2d');

var randomColor = Math.floor(Math.random()*16777215).toString(16);
var randomColor1 = Math.floor(Math.random()*16777215).toString(16);
var randomColor2 = Math.floor(Math.random()*16777215).toString(16);


// Create an object representing a square on the canvas
function makeSquare(x, y, length, speed) {
  return {
    x: x,
    y: y,
    l: length,
    s: speed,
    draw: function() {
      context.fillRect(this.x, this.y, this.l, this.l);
    }
  };
}

// The ship the user controls
var ship = makeSquare(50, canvas.height / 2 - 25, 50, 5);

// Flags to tracked which keys are pressed
var up = false;
var down = false;
var space = false;

// Is a bullet already on the canvas?
var shooting = false;
// The bulled shot from the ship
var bullet = makeSquare(0, 0, 10, 10);

// An array for enemies (in case there are more than one)
var enemies = [];

// Add an enemy object to the array
var enemyBaseSpeed = 1.5;
function makeEnemy() {
  var enemyX = canvas.width;
  var enemySize = Math.round((Math.random() * 15)) + 15;
  var enemyY = Math.round(Math.random() * (canvas.height - enemySize * 2)) + enemySize;
  var enemySpeed = Math.round(Math.random() * enemyBaseSpeed) + enemyBaseSpeed;
  enemies.push(makeSquare(enemyX, enemyY, enemySize, enemySpeed));
}

// Check if number a is in the range b to c (exclusive)
function isWithin(a, b, c) {
  return (a > b && a < c);
}

// Return true if two squares a and b are colliding, false otherwise
function isColliding(a, b) {
  var result = false;
  if (isWithin(a.x, b.x, b.x + b.l) || isWithin(a.x + a.l, b.x, b.x + b.l)) {
    if (isWithin(a.y, b.y, b.y + b.l) || isWithin(a.y + a.l, b.y, b.y + b.l)) {
      result = true;
    }
  }
  return result;
}

// Track the user's score
var score = 0;
// The delay between enemies (in milliseconds)
var timeBetweenEnemies = 5 * 1000;
// ID to track the spawn timeout
var timeoutId = null;

// Show the game menu and instructions
function menu() {
  erase();
  context.fillStyle = '#000000';
  context.font = '36px Arial';
  context.textAlign = 'center';
  context.fillText('Shoot \'Em!', canvas.width / 2, canvas.height / 4);
  context.font = '24px Arial';
  context.fillText('Click to Start', canvas.width / 2, canvas.height / 2);
  context.font = '18px Arial';
  context.fillText('Up/Down to move, Space to shoot.', canvas.width / 2, (canvas.height / 4) * 3);
  // Start the game on a click
  canvas.addEventListener('click', startGame);
}

// Start the game
function startGame() {
	// Kick off the enemy spawn interval
  timeoutId = setInterval(makeEnemy, timeBetweenEnemies);
  // Make the first enemy
  setTimeout(makeEnemy, 1000);
  // Kick off the draw loop
  draw();
  // Stop listening for click events
  canvas.removeEventListener('click', startGame);
}

// Show the end game screen
function endGame() {
	// Stop the spawn interval
  clearInterval(timeoutId);

  //canvas.addEventListener("click", () => {
  //  window.location.reload();
  //})
  //records and saves the score 
  postData({
  score: score,
  }, "/Project/save_score.php").then(data => {
  console.log(data);
  //quick, brief example (you wouldn't want to use alert)
    if (data.status === 200) {
  //saved successfully
      alert("Score Saved!");
  } else {
  //some error occurred, maybe want to handle it before resetting
      alert("Error: Score was not saved");
    }
  })


  // Show the final score
  erase();
  context.fillStyle = '#000000';
  context.font = '24px Arial';
  context.textAlign = 'center';
  context.fillText('Game Over. Final Score: ' + score, canvas.width / 2, canvas.height / 2);
}

// Listen for keydown events
canvas.addEventListener('keydown', function(event) {
  event.preventDefault();
  if (event.keyCode === 38 || event.keyCode === 87) { // UP
    up = true;
  }
  if (event.keyCode === 40 || event.keyCode === 83)  { // DOWN
    down = true;
  }
  if (event.keyCode === 32) { // SPACE
    shoot();
  }
});


// Listen for keyup events
canvas.addEventListener('keyup', function(event) {
  event.preventDefault();
  if (event.keyCode === 38 || event.keyCode === 87) { // UP 
    up = false;
  }
  if (event.keyCode === 40 || event.keyCode === 83) { // DOWN
    down = false;
  }
});

// Clear the canvas
function erase() {
  context.fillStyle = '#FFFFFF';
  context.fillRect(0, 0, 600, 400);
}

// Shoot the bullet (if not already on screen)
function shoot() {
  if (!shooting) {
    shooting = true;
    bullet.x = ship.x + ship.l;
    bullet.y = ship.y + ship.l / 2;
  }
}

// The main draw loop
function draw() {
  erase();
  var gameOver = false;
  // Move and draw the enemies
  enemies.forEach(function(enemy) {
    enemy.x -= enemy.s;
    if (enemy.x < 0) {
      gameOver = true;
    }

    //changes the color of the enemy every time the score is divisible by 2git 
    context.fillStyle = '#00FF00';
    if (score % 2 === 0) {
        context.fillStyle = '#' + randomColor2;
    }
    enemy.draw();
  });
  // Collide the ship with enemies
  enemies.forEach(function(enemy, i) {
    if (isColliding(enemy, ship)) {
      gameOver = true;
    }
  });
  // Move the ship
  if (down) {
    ship.y += ship.s;
  }
  if (up) {
    ship.y -= ship.s;
  }
  // Don't go out of bounds
  if (ship.y < 0) {
    ship.y = 0;
  }
  if (ship.y > canvas.height - ship.l) {
    ship.y = canvas.height - ship.l;
  }
  // Draw the ship
  //Get a random color
  context.fillStyle = '#' + randomColor;
  ship.draw();

  // Move and draw the bullet
  if (shooting) {
    // Move the bullet
    bullet.x += bullet.s;
    // Collide the bullet with enemies
    enemies.forEach(function(enemy, i) {
      if (isColliding(bullet, enemy)) {
        enemies.splice(i, 1);
        score++;
        shooting = false;
        // Make the game harder
        if (score % 10 === 0 && timeBetweenEnemies > 1000) {
          clearInterval(timeoutId);
          timeBetweenEnemies -= 1000;
          timeoutId = setInterval(makeEnemy, timeBetweenEnemies);
        } else if (score % 5 === 0) {
          enemyBaseSpeed += 1;
        }

      }
    });

    //my edit
    //makes YEET
    if (score % 3 === 0) {
        context.fillStyle = '#' + randomColor1;
        context.font = '24px Georgia';
        context.textAlign = 'center';
        context.fillText('YEET', canvas.width / 2, canvas.height / 2);
    }

    // Collide with the wall
    if (bullet.x > canvas.width) {
      shooting = false;
    }
    // Draw the bullet
    bullet.draw();
  }
  // Draw the score
  context.fillStyle = '#000000';
  context.font = '24px Arial';
  context.textAlign = 'left';
  context.fillText('Score: ' + score, 1, 25)
  // End or continue the game
  if (gameOver) {
    endGame();
  } else {
    window.requestAnimationFrame(draw);
  }
}

// Start the game
menu();
canvas.focus();

async function postData(data = {}, url = "/Project/save_scores.php") {

console.log(Object.keys(data).map(function(key) {
    return "" + key + "=" + data[key]; // line break for wrapping only
}).join("&"));
let example = 1;
if (example === 1) {
    // Default options are marked with *
    const response = await fetch(url, {
        method: 'POST', // *GET, POST, PUT, DELETE, etc.
        mode: 'cors', // no-cors, *cors, same-origin
        cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
        credentials: 'same-origin', // include, *same-origin, omit
        headers: {
            //'Content-Type': 'application/json'
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        redirect: 'follow', // manual, *follow, error
        referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
        body: Object.keys(data).map(function(key) {
            return "" + key + "=" + data[key]; // line break for wrapping only
        }).join("&") //JSON.stringify(data) // body data type must match "Content-Type" header
    });
    return response.json(); // parses JSON response into native JavaScript objects

  //If the first one doesn't work, test these two
} else if (example === 2) {
    //making XMLHttpRequest awaitable
    //https://stackoverflow.com/a/48969580
    return new Promise(function(resolve, reject) {
        let xhr = new XMLHttpRequest();
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.open("POST", url);
        xhr.onload = function() {
            if (this.status >= 200 && this.status < 300) {
                resolve(xhr.response);
            } else {
                reject({
                    status: this.status,
                    statusText: xhr.statusText
                });
            }
        };
        xhr.onerror = function() {
            reject({
                status: this.status,
                statusText: xhr.statusText
            });
        };
        xhr.send(Object.keys(data).map(function (key) {
        return "" + key + "=" + data[key]; // line break for wrapping only
    }).join("&"));
    });
} else if (example === 3) {
    //make jQuery awaitable
    //https://petetasker.com/using-async-await-jquerys-ajax
    //check if jQuery is present
    if (window.$) {
        let result;

        try {
            result = await $.ajax({
                url: url,
                type: 'POST',
                data: Object.keys(data).map(function (key) {
        return "" + key + "=" + data[key]; // line break for wrapping only
    }).join("&")
            });

            return result;
        } catch (error) {
            console.error(error);
        }
    }
}


}

</script>