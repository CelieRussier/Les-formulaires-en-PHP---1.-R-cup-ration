<form  action="thanks.php" method="post">
    <div>
      <label  for="firstname">Prénom :</label>
      <input  type="text"  id="firstname"  name="user_firstname">
    </div>
    <div>
      <label  for="lastname">Nom :</label>
      <input  type="text"  id="lastname"  name="user_lastname">
    </div>
    <div>
      <label  for="email">Courriel :</label>
        <input  type="email"  id="email"  name="user_email">
    </div>
    <div>
        <label for="tel">Téléphone</label>
        <input type="number" id ="tel" ame="user_phone_number">
    </div>
    <div>
        <label for="language">Langage concerné</label>
        <input list="language" name="user_language">    
        <datalist id="language">
        <option value="HTML" name="HTML">
        <option value="CSS" name="CSS">
        <option value="Javascipt" name="Javascript">
        <option value="PHP" name="PHP">
        <option value="MySQL" name="MySQL">
  </datalist>
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message></button>
    </div>
  </form>




  
