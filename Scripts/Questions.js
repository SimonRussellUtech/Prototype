//javascript document
// Comments-----

function fQuestion0() {

  document.getElementById("questionToAsk").innerHTML = "QUESTION ASKED";
  document.getElementById("btnArea").innerHTML = "<button onclick = 'fQuestion1()'>Option1</button> <button onclick = 'fQuestion2()'>Option2</button>";
}

function fQuestion1() {

  document.getElementById("questionToAsk").innerHTML = "You Clicked Option 1";
  document.getElementById("btnArea").innerHTML = "<button onclick = 'fQuestion1()'>Option1</button> <button onclick = 'fQuestion2()'>Option2</button>";
}
function fQuestion2() {

  document.getElementById("questionToAsk").innerHTML = "You Clicked Option 2";
  document.getElementById("btnArea").innerHTML = "<button onclick = 'fQuestion1()'>Option1</button> <button onclick = 'fQuestion2()'>Option2</button>";
}
