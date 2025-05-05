<?php
get_header();
?>
<div class="contact-form">
<h2>Contactez-moi</h2>
    <form action="traitement.php" method="POST">
      <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" required>
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>

      <div class="form-group">
        <label for="message">Message</label>
        <textarea id="message" name="message" required></textarea>
      </div>
        <div class="center">
      <button class="buttonPurple" type="submit">Envoyer</button>
    </div>
    </form>
</div>
<?php
get_footer();
?>