$(document).ready(function () {
  $('.active-IT').click(function () {
    $('.ita').css('display', 'inline');
    $('.eng').css('display', 'none');
  });
  $('.active-EN').click(function () {
    $('.eng').css('display', 'inline');
    $('.ita').css('display', 'none');
  });
});