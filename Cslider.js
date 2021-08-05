var Cslider = document.getElementById("Cslide");
var Coutput = document.getElementById("cdude");
Coutput.innerHTML = Cslider.value;

Cslider.oninput = function() {
  Coutput.innerHTML = this.value;
}
