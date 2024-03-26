var slider = document.getElementById("myRange");
var output = document.getElementById("sliderValue");

slider.oninput = function () {
  output.innerHTML = this.value;
};

// Atualizar o valor inicial
output.innerHTML = slider.value;

