var btnZoomIn = document.querySelector('#zoom-in');
var btnZoomOut = document.querySelector('#zoom-out');
var container = document.querySelector('#container');
var image = document.querySelector('#my-cute-image');

var scaleValue = 1;
var colors = [
  'orange',
  'orangered',
  'purple',
  'magenta',
  'red',
  'blue',
  'cyan',
  'azure',
  'blueviolet',
  'brown',
  'firebrick',
];
var colorIndex = 6;

btnZoomIn.addEventListener('click', function () {
  if (scaleValue > 0.1) {
    scaleValue -= 0.3;
    image.style.transform = `scale(${scaleValue})`;

    colorIndex--;
    container.style.border = `5px solid ${colors[colorIndex]}`;
  }
});

btnZoomOut.addEventListener('click', function () {
  if (scaleValue < 2) {
    scaleValue += 0.3;
    image.style.transform = `scale(${scaleValue})`;

    colorIndex++;
    container.style.border = `5px solid ${colors[colorIndex]}`;
  }
});
