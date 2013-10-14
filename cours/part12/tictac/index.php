<html>
<head><title>TicaToe</title>
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/tictac.js"></script>
<script>
$(document).ready(function() {
  whosTurn();
  $('.box').click(function() {
    var id = $(this).attr("id");
    var move = {id:id.replace("box", ""), chr:player};
    makeMove(move);
  });
});
</script>
</head>
<h3 id="whos"></h3>
<div id="board">
  <?php
  for($i=0; $i<9; $i++) {
    echo "<div class='box' id='box".$i."'></div>\n";
  }
  ?>
</div>
<input type="button" value="New game" onclick="restart();"><br/><input type="checkbox" onchange="changeAI();" value="1" name="ai" id="ai" /> Fake AI(really bad AI, use for debug only)
</body>
</html>
