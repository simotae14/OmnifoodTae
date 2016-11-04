var  attivaIT = document.querySelector(".active-IT");
var  attivaEN = document.querySelector(".active-EN");
var spanITA = document.querySelectorAll(".ita");
var spanEN = document.querySelectorAll(".eng");

attivaIT.addEventListener("click", function () {
  spanITA.forEach(function(el) {
      el.style.display = 'inline';
  });
  spanEN.forEach(function(el) {
      el.style.display = 'none';
  });
});
attivaEN.addEventListener("click",function(){
  spanEN.forEach(function(el) {
      el.style.display = 'inline';
  });
  spanITA.forEach(function(el) {
      el.style.display = 'none';
  });
});