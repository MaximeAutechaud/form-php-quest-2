<?php


$select = [
    'Sport',
    'Politique',
    'Art',
    'Musique',
    'Développement',
    'Confiance en soi',
    'Mise en abîme'
]

?>

<form action="thanks.php" method="post">
    <div>
        <label for="lastname">Nom :</label>
        <input type="text" id="lastname" name="user_lastname">
    </div>
    <div>
        <label for="firstname">Prénom :</label>
        <input type="text" id="firstname" name="user_firstname">
    </div>
    <div>
        <label for="phone">Téléphone :</label>
        <input type="tel" id="phone" name="user_phone">
    </div>
    <div>
        <label for="mail">e-mail :</label>
        <input type="email" id="mail" name="user_mail" placeholder="exemple@mail.com">
    </div>
    <div>
        <label for="subject">Subject</label>
        <select name="subject" class="form-control" id="subject">
            <?php foreach ($select as $subject) { ?>
                <option value=" <?= $subject ?>"><?= $subject ?></option>
            <?php } ?>
        </select>
    </div>
    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>
    <div>
        <button type="submit" name="btn"> Envoyez !</button>
    </div>
</form>
