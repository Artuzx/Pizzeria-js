<html>
<body>
<script src="index.js"></script>
<form action = "scontrino.php" method = "POST">

<label for="nome">Inserisci il nome</label><br>
<input type="text" id="nome" name="nome"><br>
<label for="cognome">Inserisci il cognome</label><br>
<input type="text" id="cognome" name="cognome"><br>
<label for="Indirizzo">Inserisci il tuo indirizzo</label><br>
<input type="text" id="indirizzo" name="indirizzo"><br>
<label for="città">Inserisci il Città</label><br>
<input type="text" id="citta" name="citta"><br>

<input type="hidden" name="contatorepizza" id="contatorepizza" value="">

<label for="pizza">Scegli la tua pizza:</label>
<select id="pizza" name="pizza">
  <option value="Margherita 7$">Margherita 7$</option>
  <option value="Diavola 9$">Diavola 9$</option>
  <option value="Patatosa 8$">Patatosa 8$</option>
  <option value="Marinara 8$">Marinara 8$</option>
  <option value="Nessuna">Nessuna</option>
</select>
<label for="qt">Quantità</label>
<input type="number" id="qt" name="qt" min="1" max="5"><br>

<div id="inseriscipizza"></div>

<button type="button" onclick="addPizza()">Aggiungi altra pizza</button>
<input type="submit" value="Submit">
<br>


</form>
</body>
</html>