 
 
<form  action="form.php"  method="post">
    <div>
        <label  for="nom">Nom :</label>
        <input  type="text"  id="nom"  name="lastName">
    </div>
    <div>
        <label  for="prenom">Prenom :</label>
        <input  type="text"  id="prenom"  name="firstName">
    </div>
    <div>
        <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
        <label  for="telephone">Téléphone :</label>
        <input  type="tel"  id="telephone"  name="phoneNumber">
    </div>
    <div>
        <label  for="sujet">Sujet :</label>
        <select id="sujet" name="subject">
            <option value="renseignements">renseignements</option>
            <option value="inscription">inscription</option>
            <option value="reclamation">reclamation</option>
            <option value="retour">retour</option>
        </select>
    </div>
    <div>
        <label  for="message">Message :</label>
        <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
        <button  type="submit">Envoyer votre message</button>
    </div>
</form>


