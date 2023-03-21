<div class="container">
    <h1>Formulaire de contact</h1>
    <div class="formBloc">
        <form> <!--action="/_INCLUDES/message.php" method="post"-->
            <label for="firstName">Nom & prénom</label>
            <input type="text" id="firstName" name="firstName" placeholder="Votre nom et prénom">

            <label for="email">Email</label>
            <input id="email" type="email" name="email" placeholder="Votre email">

            <label for="subject">Sujet</label>
            <input type="text" id="subject" name="subject" placeholder="L'objet de votre message">

            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Votre message" style="height:200px"></textarea>

			<button class="button" type="submit" name="submit" onclick="displayMessage()" value="Display alert box">Envoyer votre message</button>

        </form>
    </div>
</div>


