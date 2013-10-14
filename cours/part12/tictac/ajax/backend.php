<?php
if(isset($_POST['action']) && $_POST['action'] == 'makeMove') {
	$board 	= $_POST['board'];
	$move 	= $_POST['move'];

	//validate the move
	if($board[$move['id']]== '') {
		$return['validate'] = 1;
		$move['chr'] == 'X' ? $return['player'] = 'O' : $return['player'] = 'X';
		$board[$move['id']] = $move['chr'];
		$return['state'] 	= getGameState($board);
	}else{
		$return['validate'] = 0;
	}
	echo json_encode($return);
}

/**
 * getGamestate
 * @param array board current play
 * @return int 0 = play, 1 = win, 2 = tie
 */
function getGameState($board) {
	$rows = array(0,3,6);

	//rows
	foreach($rows as $val) {
		if(!empty($board[$val]) && $board[$val] == $board[$val+1] && $board[$val+1] == $board[$val+2]) {
			return 1;
		}
	}

	//cols
	for ($i=0; $i<3 ; $i++) { 
		if(!empty($board[$i]) && $board[$i] == $board[$i+3] && $board[$i+3] == $board[$i+6]) {
			return 1;
		}
	}

	//diags
	if(!empty($board[0]) && $board[0] == $board[4] && $board[4] == $board[8]) {
		return 1;
	}
	if(!empty($board[2]) && $board[2] == $board[4] && $board[4] == $board[6]) {
		return 1;
	}

	//no more possibilities it's a tie
	if(!in_array("", $board)) {
		return 2;
	}

	return 0;
}