<div id="get-use-response">
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
$.get('get_comic.php', function(data) {

  // On recupere du HTML donc on l'insere "as-is" dans la page
  $('#get-use-response').html(data);

});
</script>