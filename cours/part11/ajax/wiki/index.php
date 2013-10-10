<form id="f">
    <input type="text" id="key" />
    <input type="submit" id="bu" value="go" />
</form>


<div id="get-wiki" style="float:left;">
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
$('#f').submit(function() {
    var wikipage = $('#key').val();
    $('#get-wiki').html('Loading...');
      $.ajax({
        url: 'get_wiki.php',
        type: 'POST',
        data: "wikipage="+wikipage,
        success: function(res) {
            $('#get-wiki').html(res);
            $('#mw-navigation').hide();
        }
      });
      return false;
});

</script>