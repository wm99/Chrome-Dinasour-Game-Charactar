// Daniel Shiffman
// https://thecodingtrain.com/CodingChallenges/147-chrome-dinosaur.html
// https://youtu.be/l0HoJHc-63Q

// Google Chrome Dinosaur Game (Unicorn, run!)
// https://editor.p5js.org/codingtrain/sketches/v3thq2uhk

let crash;
let kImg;
let bxImg;
let bImg;
let boxes = [];

function preload() {
  const options = {
    probabilityThreshold: 0.95
  };
  cImg = loadImage('crash.png');
  bxImg = loadImage('box.png');
  bImg = loadImage('backg.jpg');
}

function mousePressed() {
  boxes.push(new Box());
}

function setup() {
  createCanvas(1280, 609);
  crash = new Crash();
}

function gotCommand(error, results) {
  if (error) {
    console.error(error);
  }
  console.log(results[0].label, results[0].confidence);
  if (results[0].label == 'up') {
    crash.jump();
  }
}

function keyPressed() {
  if (key == ' ') {
    crash.jump();
  }
}

function draw() {
  if (random(1) < 0.005) {
    boxes.push(new Box());
  }

  background(bImg);
  for (let b of boxes) {
    b.move();
    b.show();
    if (crash.hits(b)) {
      console.log('game over');
      noLoop();
      window.location.reload();

    }
  }

  crash.show();
  crash.move();
}
