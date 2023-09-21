$(function () {

  $(".btn-chart-nav").on("click", function () {

    var $button = $(this);
    var oldValue = $button.parent().find("input").val();

    if ($button.text() == "+") {
      var newVal = parseFloat(oldValue) + 1;
    } else {

      if (oldValue > 0) {
        var newVal = parseFloat(oldValue) - 1;
      } else {
        newVal = 0;
      }
    }

    $button.parent().find("input").val(newVal);

  });

});

const parallax = document.querySelector('.sec-servic');
const front = document.querySelector('.front-layer');
const back = document.querySelector('.back-layer');

const sFront = 700;
const sBack = 200;

parallax.addEventListener('mousemove', e => {
  const x = e.clientX;
  const y = e.clientY;

  front.style.transform = `
    translate(
      ${x / sFront}%,
      ${y / sFront}%
    )`;

  back.style.transform = `
    translate(
      ${x / sBack}%,
      ${y / sBack}%
    )`;


});


var toAdd = document.createDocumentFragment();
for (var i = 0; i < 250; i++) {
    var newDiv = document.createElement('div');
    newDiv.id = 'r' + i;
    newDiv.className = 'ansbox';
    toAdd.appendChild(newDiv);
}

$('#test45').append(toAdd);

