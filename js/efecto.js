// JavaScript Document

var app = document.getElementById('typewriter');

var typewriter = new Typewriter(app, {
  loop: true,
  delay: 75,
});

typewriter
  .pauseFor(2500)
  .typeString('La Capital Del Sol')
  .pauseFor(300)
  .deleteChars(10)
  .pauseFor(1000)
  .start();

