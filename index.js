let contatorepizza = 1;
function addPizza() {
    contatorepizza++;
    document.getElementById("inseriscipizza").insertAdjacentHTML("beforeend", `
       <label for="pizza">Scegli la tua pizza:</label>
       <select id="pizza${contatorepizza}" name="pizza${contatorepizza}">
          <option value="Margherita 7$">Margherita 7$</option>
          <option value="Diavola 9$">Diavola 9$</option>
          <option value="Patatosa 8$">Patatosa 8$</option>
          <option value="Marinara 8$">Marinara 8$</option>
          <option value="Nessuna">Nessuna</option>
        </select>
        <label for="qt">Quantità</label>
        <input type="number" id="qt${contatorepizza}" name="qt${contatorepizza}" min="1" max="5"><br>
    `);
    aggiungiAlForm();
}


function aggiungiAlForm() {
    document.getElementById('contatorepizza').value = contatorepizza;
}



