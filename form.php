<form  action="thanks.php"  method="post">

<div>

  <label  for="nom">Nom :</label>
  <input  type="text"  id="nom"  name="user_name" required="required">

</div>

<div>

    <label  for="prenom">Prenom :</label>
    <input  type="text"  id="prenom"  name="first_name" required="required">

</div>

<div>

    <label  for="courriel">Courriel :</label>
    <input  type="email"  id="courriel"  name="user_email" required="required">

</div>
<div>

    <label  for="telephone">Telephone :</label>
    <input  type="tel"  id="telephone"  name="user_tel" required="required">

</div>

<div>

<label for="Sujet">Quel est le sujet de votre message?</label><br />
       <select name="sujet" id="sujet">
           <option value="Recrutement">Recrutement</option>
           <option value="salaire">Salaire</option>
           <option value="licenciement">Licenciement</option>
           <option value="vacances">Vacances</option>
        </select>
   </p>
</div>


<div>
<label  for="message">Message :</label>
<textarea  id="message"  name="user_message"  required="required"></textarea>
</div>

</div>

	

<div  class="button">

  <button  type="submit">Envoyer votre message</button>

</div>

</form>

