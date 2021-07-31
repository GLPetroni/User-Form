var Sslider = document.getElementById("Sslide");
var Soutput = document.getElementById("sdude");
Soutput.innerHTML = Sslider.value;

Sslider.oninput = function() {
  Soutput.innerHTML = this.value;
}
