<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hänga Gubbe</title>
	<link rel="stylesheet" href="css/hangman.css">

</head>

<body onLoad="reset(); return true;">
	<section>
		<h1>HÄNGA GUBBE</h1>

		<img src="hangman-img/hmstart.jpg" height="150" width="100" name="hm">

		<form name="game">
			<h2>Rätt ord:&nbsp;&nbsp; <input type="text" class="display_input" name="displayWord" disabled /></h2>
			<h2>Avända bokstäver:&nbsp;&nbsp; <input type="text" class="display_input" name="usedLetters" disabled /></h2>			
		</form>

		<br />

		<div>

			<h2>Välj en bokstav:</h2>
			<br />
			<a href="javascript:selectLetter('Q');"><input type="button" class="letters_input" value="Q"></a>
			<a href="javascript:selectLetter('W');"><input type="button" class="letters_input" value="W"></a>
			<a href="javascript:selectLetter('E');"><input type="button" class="letters_input" value="E"></a>
			<a href="javascript:selectLetter('R');"><input type="button" class="letters_input" value="R"></a>
			<a href="javascript:selectLetter('T');"><input type="button" class="letters_input" value="T"></a>
			<a href="javascript:selectLetter('Y');"><input type="button" class="letters_input" value="Y"></a>
			<a href="javascript:selectLetter('U');"><input type="button" class="letters_input" value="U"></a>
			<a href="javascript:selectLetter('I');"><input type="button" class="letters_input" value="I"></a>
			<a href="javascript:selectLetter('O');"><input type="button" class="letters_input" value="O"></a>
			<a href="javascript:selectLetter('P');"><input type="button" class="letters_input" value="P"></a>
			<a href="javascript:selectLetter('Å');"><input type="button" class="letters_input" value="Å"></a>
			<br />
			<br />
			<a href="javascript:selectLetter('A');"><input type="button" class="letters_input" value="A"></a>
			<a href="javascript:selectLetter('S');"><input type="button" class="letters_input" value="S"></a>
			<a href="javascript:selectLetter('D');"><input type="button" class="letters_input" value="D"></a>
			<a href="javascript:selectLetter('F');"><input type="button" class="letters_input" value="F"></a>
			<a href="javascript:selectLetter('G');"><input type="button" class="letters_input" value="G"></a>
			<a href="javascript:selectLetter('H');"><input type="button" class="letters_input" value="H"></a>
			<a href="javascript:selectLetter('J');"><input type="button" class="letters_input" value="J"></a>
			<a href="javascript:selectLetter('K');"><input type="button" class="letters_input" value="K"></a>
			<a href="javascript:selectLetter('L');"><input type="button" class="letters_input" value="L"></a>
			<a href="javascript:selectLetter('Ö');"><input type="button" class="letters_input" value="Ö"></a>
			<a href="javascript:selectLetter('Ä');"><input type="button" class="letters_input" value="Ä"></a>
			<br />
			<br />
			<a href="javascript:selectLetter('Z');"><input type="button" class="letters_input" value="Z"></a>
			<a href="javascript:selectLetter('X');"><input type="button" class="letters_input" value="X"></a>
			<a href="javascript:selectLetter('C');"><input type="button" class="letters_input" value="C"></a>
			<a href="javascript:selectLetter('V');"><input type="button" class="letters_input" value="V"></a>
			<a href="javascript:selectLetter('B');"><input type="button" class="letters_input" value="B"></a>
			<a href="javascript:selectLetter('N');"><input type="button" class="letters_input" value="N"></a>
			<a href="javascript:selectLetter('M');"><input type="button" class="letters_input" value="M"></a>
		</div>
	
		<br />
		<br />

		<a href="javascript:reset()"><input type="button" style="cursor:pointer; margin-left: 10px; font-size:18px;" value="Nytt spel"></a>

	</section>
	<script type="text/javascript" src="js/hangman.js"></script>
</body>
</html>