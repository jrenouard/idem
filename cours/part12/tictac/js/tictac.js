var player = "X";
var ai = false;

function makeMove(move) {
   // console.log(move);
   var items = [];
   var i = 0;
   $(".box").each(function() {
      var html = $(this).html();
      items[i] = html;
      i++;
   });
   $.ajax({
      type: "POST",
      dataType: 'json',
      url: "ajax/backend.php",
      data: {'board': items, 'move': move, 'action': 'makeMove'},
      success: function(r) {
         // console.log(r);
         if(r.validate == 1) {
            $('#box'+move.id).html(move.chr);
            if(r.state == 1) {
               alert(move.chr+" wins!!");
               restart();
            }
            if(r.state == 2) {
               alert("It's a tie folks!");
               restart();
            }
            player = r.player;
            whosTurn();
         }else if(r.validate == 0) {
            // alert('invalid move'); // commented cause it slowed down my tests when made a bad click
         }
      }
   });     
}

function whosTurn() {
   $('#whos').html(player+"'s turn");
   if(ai && player == "O") {
      var move = getAIMove();
      makeMove(move);
   }
}

function getAIMove() {
   var items = [];
   var idAI  = 0;
   $(".box").each(function() {
      var html = $(this).html();
      if(html == "") {
         items.push($(this).attr('id').replace("box", ""));
      }
   }); 

   //try to get the center
   if($.inArray("4", items) > -1){
      idAI = 4;
   }else{
      //pick a random spot, can't really call that an AI
      idAI = items[Math.floor(Math.random()*items.length)];
   }
   var move = {id:idAI, chr:player};
   return move;
}

function changeAI() {
   if($('#ai:checked').val() == 1) {
      ai = true;
   }else{
      ai = false;
   }
   restart();
}

function restart() {
   $('.box').html("");
}