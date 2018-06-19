<a href="#" namem="комплект для ремонта DSG 7," class="btn-price cenazakaz_open" data-popup-ordinal="1" id="open_69339447">УТОЧНИТЬ ЦЕНУ</a>
<script>function() {
  var tex = $(this).attr('namem');
  $('#TextTovar').html('Меня заинтересовал ' + tex + ' прошу выслать подробную информацию на мою электронную почту');
  var mal = $('#user_dan').attr('user_mail');
  $('#form_emal_cen').val(mal);
}
</script>
<script>
function(event) {
  event.preventDefault();

  var ord = $(this).data('popup-ordinal');
  setTimeout(function() { // setTimeout is to allow `close` method to finish (for issues with multiple tooltips)
    methods.show(el, ord);
  }, 0);
}
</script>