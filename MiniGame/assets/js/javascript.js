function pressEnter(event) {
  var code = event.which || event.keyCode;
  if (code == 13) {
    startButton();
  }
  if (code == 53 || code == 122) {
    upButton();
  }
  if (code == 49 || code == 113) {
    leftButton();
  }
  if (code == 50 || code == 115) {
    downButton();
  }
  if (code == 51 || code == 100) {
    rightButton();
  }
}

var character = [1, 1]; /* x,y */
var x = Number();
var y = Number();
var point = [x, y];
var one1 = document.getElementById("one-one");
var two1 = document.getElementById("one-two");
var three1 = document.getElementById("one-three");
var four1 = document.getElementById("one-four");
var five1 = document.getElementById("one-five");
var six1 = document.getElementById("one-six");
var seven1 = document.getElementById("one-seven");
var eight1 = document.getElementById("one-eight");
var nine1 = document.getElementById("one-nine");
var ten1 = document.getElementById("one-ten");
var line1 = new Array(
  one1,
  two1,
  three1,
  four1,
  five1,
  six1,
  seven1,
  eight1,
  nine1,
  ten1
);
var one2 = document.getElementById("two-one");
var two2 = document.getElementById("two-two");
var three2 = document.getElementById("two-three");
var four2 = document.getElementById("two-four");
var five2 = document.getElementById("two-five");
var six2 = document.getElementById("two-six");
var seven2 = document.getElementById("two-seven");
var eight2 = document.getElementById("two-eight");
var nine2 = document.getElementById("two-nine");
var ten2 = document.getElementById("two-ten");
var line2 = new Array(
  one2,
  two2,
  three2,
  four2,
  five2,
  six2,
  seven2,
  eight2,
  nine2,
  ten2
);
var one3 = document.getElementById("three-one");
var two3 = document.getElementById("three-two");
var three3 = document.getElementById("three-three");
var four3 = document.getElementById("three-four");
var five3 = document.getElementById("three-five");
var six3 = document.getElementById("three-six");
var seven3 = document.getElementById("three-seven");
var eight3 = document.getElementById("three-eight");
var nine3 = document.getElementById("three-nine");
var ten3 = document.getElementById("three-ten");
var line3 = new Array(
  one3,
  two3,
  three3,
  four3,
  five3,
  six3,
  seven3,
  eight3,
  nine3,
  ten3
);
var one4 = document.getElementById("four-one");
var two4 = document.getElementById("four-two");
var three4 = document.getElementById("four-three");
var four4 = document.getElementById("four-four");
var five4 = document.getElementById("four-five");
var six4 = document.getElementById("four-six");
var seven4 = document.getElementById("four-seven");
var eight4 = document.getElementById("four-eight");
var nine4 = document.getElementById("four-nine");
var ten4 = document.getElementById("four-ten");
var line4 = new Array(
  one4,
  two4,
  three4,
  four4,
  five4,
  six4,
  seven4,
  eight4,
  nine4,
  ten4
);
var one5 = document.getElementById("five-one");
var two5 = document.getElementById("five-two");
var three5 = document.getElementById("five-three");
var four5 = document.getElementById("five-four");
var five5 = document.getElementById("five-five");
var six5 = document.getElementById("five-six");
var seven5 = document.getElementById("five-seven");
var eight5 = document.getElementById("five-eight");
var nine5 = document.getElementById("five-nine");
var ten5 = document.getElementById("five-ten");
var line5 = new Array(
  one5,
  two5,
  three5,
  four5,
  five5,
  six5,
  seven5,
  eight5,
  nine5,
  ten5
);
var one6 = document.getElementById("six-one");
var two6 = document.getElementById("six-two");
var three6 = document.getElementById("six-three");
var four6 = document.getElementById("six-four");
var five6 = document.getElementById("six-five");
var six6 = document.getElementById("six-six");
var seven6 = document.getElementById("six-seven");
var eight6 = document.getElementById("six-eight");
var nine6 = document.getElementById("six-nine");
var ten6 = document.getElementById("six-ten");
var line6 = new Array(
  one6,
  two6,
  three6,
  four6,
  five6,
  six6,
  seven6,
  eight6,
  nine6,
  ten6
);
var one7 = document.getElementById("seven-one");
var two7 = document.getElementById("seven-two");
var three7 = document.getElementById("seven-three");
var four7 = document.getElementById("seven-four");
var five7 = document.getElementById("seven-five");
var six7 = document.getElementById("seven-six");
var seven7 = document.getElementById("seven-seven");
var eight7 = document.getElementById("seven-eight");
var nine7 = document.getElementById("seven-nine");
var ten7 = document.getElementById("seven-ten");
var line7 = new Array(
  one7,
  two7,
  three7,
  four7,
  five7,
  six7,
  seven7,
  eight7,
  nine7,
  ten7
);
var one8 = document.getElementById("eight-one");
var two8 = document.getElementById("eight-two");
var three8 = document.getElementById("eight-three");
var four8 = document.getElementById("eight-four");
var five8 = document.getElementById("eight-five");
var six8 = document.getElementById("eight-six");
var seven8 = document.getElementById("eight-seven");
var eight8 = document.getElementById("eight-eight");
var nine8 = document.getElementById("eight-nine");
var ten8 = document.getElementById("eight-ten");
var line8 = new Array(
  one8,
  two8,
  three8,
  four8,
  five8,
  six8,
  seven8,
  eight8,
  nine8,
  ten8
);
var one9 = document.getElementById("nine-one");
var two9 = document.getElementById("nine-two");
var three9 = document.getElementById("nine-three");
var four9 = document.getElementById("nine-four");
var five9 = document.getElementById("nine-five");
var six9 = document.getElementById("nine-six");
var seven9 = document.getElementById("nine-seven");
var eight9 = document.getElementById("nine-eight");
var nine9 = document.getElementById("nine-nine");
var ten9 = document.getElementById("nine-ten");
var line9 = new Array(
  one9,
  two9,
  three9,
  four9,
  five9,
  six9,
  seven9,
  eight9,
  nine9,
  ten9
);
var one10 = document.getElementById("ten-one");
var two10 = document.getElementById("ten-two");
var three10 = document.getElementById("ten-three");
var four10 = document.getElementById("ten-four");
var five10 = document.getElementById("ten-five");
var six10 = document.getElementById("ten-six");
var seven10 = document.getElementById("ten-seven");
var eight10 = document.getElementById("ten-eight");
var nine10 = document.getElementById("ten-nine");
var ten10 = document.getElementById("ten-ten");
var line10 = new Array(
  one10,
  two10,
  three10,
  four10,
  five10,
  six10,
  seven10,
  eight10,
  nine10,
  ten10
);
var lines = new Array(
  line1,
  line2,
  line3,
  line4,
  line5,
  line6,
  line7,
  line8,
  line9,
  line10
);
var dec = 0;
var sec = 0;
var min = 0;
var pause = undefined;
var timerDisplay = document.getElementById("timer");
var score = document.getElementById("score");
var scoreBest = document.getElementById("score-best");
var scoreInput = document.getElementById("score-input");
var scoreButton = document.getElementById("score-button");
document.getElementById("game-start").addEventListener("click", startButton);
var audio = new Audio("src/sng/song.mp3");
var coin = new Audio("src/sng/coin.mp3");
function startButton() {
  console.log("START");
  if (pause == "finish") {
  } else if (pause == undefined) {
    dec = 0;
    sec = 0;
    min = 0;
    score.innerHTML = 0;
    timerDisplay.textContent = min + " :" + sec + " . " + dec;
    pause = false;
    document.getElementById("title-name").innerHTML =
      "GET A MAXIMUM OF COINS !";
    document.getElementById("game-screen").style = "opacity: 1;";
    timer();
    pointRandom(1, 10);
    audio.play();
  } else if (pause == true) {
    pause = false;
    document.getElementById("title-name").innerHTML =
      "GET A MAXIMUM OF COINS !";
    document.getElementById("game-screen").style = "opacity: 1;";
    timer();
    audio.play();
  } else {
    pause = true;
    document.getElementById("title-name").innerHTML = "PAUSE";
    document.getElementById("game-screen").style = "opacity: 0.5;";
    stopTimer();
    audio.pause();
  }
}
document.getElementById("game-up").addEventListener("click", upButton);
function upButton() {
  console.log("UP");
  if (
    character[1] == 1 ||
    lines[character[1] - 2][character[0] - 1].className == "lava" ||
    pause == true ||
    pause == undefined ||
    pause == "finish"
  ) {
    return;
  } else {
    lines[character[1] - 1][character[0] - 1].style = "opacity : 0;";
    lines[character[1] - 1][character[0] - 1].innerHTML = "<img src='' />";
    lines[character[1] - 1][character[0] - 1].className = "";
    lines[character[1] - 2][character[0] - 1].innerHTML =
      "<img src='src/img/character.png' />";
    lines[character[1] - 2][character[0] - 1].style = "opacity : 1;";
    lines[character[1] - 2][character[0] - 1].className = "character";
    character[1] = character[1] - 1;
    verifPoint();
  }
}
document.getElementById("game-left").addEventListener("click", leftButton);
function leftButton() {
  console.log("LEFT");
  if (
    character[0] == 1 ||
    lines[character[1] - 1][character[0] - 2].className == "lava" ||
    pause == true ||
    pause == undefined ||
    pause == "finish"
  ) {
    return;
  } else {
    lines[character[1] - 1][character[0] - 1].style = "opacity : 0;";
    lines[character[1] - 1][character[0] - 1].innerHTML = "<img src='' />";
    lines[character[1] - 1][character[0] - 1].className = "";
    lines[character[1] - 1][character[0] - 2].innerHTML =
      "<img src='src/img/character.png' />";
    lines[character[1] - 1][character[0] - 2].style = "opacity : 1;";
    lines[character[1] - 1][character[0] - 2].className = "character";
    character[0] = character[0] - 1;
    verifPoint();
  }
}
document.getElementById("game-down").addEventListener("click", downButton);
function downButton() {
  console.log("DOWN");
  if (
    character[1] == 10 ||
    lines[character[1]][character[0] - 1].className == "lava" ||
    pause == true ||
    pause == undefined ||
    pause == "finish"
  ) {
    return;
  } else {
    lines[character[1] - 1][character[0] - 1].style = "opacity : 0;";
    lines[character[1] - 1][character[0] - 1].innerHTML = "<img src='' />";
    lines[character[1] - 1][character[0] - 1].className = "";
    lines[character[1]][character[0] - 1].innerHTML =
      "<img src='src/img/character.png' />";
    lines[character[1]][character[0] - 1].style = "opacity : 1;";
    lines[character[1]][character[0] - 1].className = "character";
    character[1] = character[1] + 1;
    verifPoint();
  }
}
document.getElementById("game-right").addEventListener("click", rightButton);
function rightButton() {
  console.log("RIGHT");
  if (
    character[0] == 10 ||
    lines[character[1] - 1][character[0]].className == "lava" ||
    pause == true ||
    pause == undefined ||
    pause == "finish"
  ) {
    return;
  } else {
    lines[character[1] - 1][character[0] - 1].style = "opacity : 0;";
    lines[character[1] - 1][character[0] - 1].innerHTML = "<img src='' />";
    lines[character[1] - 1][character[0] - 1].className = "";
    lines[character[1] - 1][character[0]].style = "opacity : 1;";
    lines[character[1] - 1][character[0]].innerHTML =
      "<img src='src/img/character.png' />";
    lines[character[1] - 1][character[0]].className = "character";
    character[0] = character[0] + 1;
    verifPoint();
  }
}

function timer() {
  intervalId = setInterval(function () {
    timerDisplay.textContent = min + " : " + sec + " . " + dec;
    dec += 1;
    if (dec >= 10) {
      dec = 0;
      sec += 1;
    }
    if (sec >= 60) {
      sec = 0;
      min += 1;
    }
    if (min == 1 && dec == 1) {
      stopTimer();
      document.getElementById("title-name").innerHTML =
        "FINISH - SCORE = " + score.innerHTML;
      document.getElementById("game-screen").style = "opacity: 0.2;";
      pause = undefined;
      lines[point[1] - 1][point[0] - 1].className == "";
      lines[point[1] - 1][point[0] - 1].innerHTML = "<img src='' />";
      lines[point[1] - 1][point[0] - 1].style = "opacity : 0";
      lines[character[1] - 1][character[0] - 1].style = "opacity : 0;";
      lines[character[1] - 1][character[0] - 1].innerHTML = "<img src='' />";
      character = [1, 1];
      lines[character[1] - 1][character[0] - 1].className = "character";
      lines[character[1] - 1][character[0] - 1].style = "opacity : 1;";
      lines[character[1] - 1][character[0] - 1].innerHTML =
        "<img src='src/img/character.png' />";
      lines[character[1] - 1][character[0] - 1].className = "character";
      if (Number(score.innerHTML) > Number(scoreBest.innerHTML)) {
        scoreBest.innerHTML = score.innerHTML;
        scoreInput.value = score.innerHTML;
        scoreButton.style = "display : flex;";
      }
    }
  }, 100);
}
function stopTimer() {
  clearInterval(intervalId);
}

function pointRandom(min, max) {
  point[0] = Math.floor(Math.random() * (max - min + 1) + min);
  point[1] = Math.floor(Math.random() * (max - min + 1) + min);
  while (
    lines[point[1] - 1][point[0] - 1].className == "lava" ||
    lines[point[1] - 1][point[0] - 1].className == "character"
  ) {
    point[0] = Math.floor(Math.random() * (max - min + 1) + min);
    point[1] = Math.floor(Math.random() * (max - min + 1) + min);
  }
  lines[point[1] - 1][point[0] - 1].className == "point";
  lines[point[1] - 1][point[0] - 1].innerHTML =
    "<img src='src/img/point.gif' />";
  lines[point[1] - 1][point[0] - 1].style = "opacity : 1";
}

function verifPoint() {
  if (
    lines[point[1] - 1][point[0] - 1] ==
    lines[character[1] - 1][character[0] - 1]
  ) {
    score.innerHTML = Number(score.innerHTML) + 1;
    pointRandom(1, 10);
    coin.play();
  }
}
