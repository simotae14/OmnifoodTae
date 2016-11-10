var spanITA = document.querySelectorAll(".ita");
var spanEN = document.querySelectorAll(".eng");

function attivaITA(){
  spanITA.forEach(function(el) {
      el.style.display = 'inline';
  });
  spanEN.forEach(function(el) {
      el.style.display = 'none';
  });
}

function attivaENG(){
  spanEN.forEach(function(el) {
      el.style.display = 'inline';
  });
  spanITA.forEach(function(el) {
      el.style.display = 'none';
  });
}