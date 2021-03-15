<h1>Form</h1>
<?php
// Si le formulaire a été soumis
//      On enregistre en session, le prénom et le nom
//
// Afficher un formulaire
//      => Prénom
//      => Nom
//      => Bouton de validation
?>

<form action="/?page=form" method="POST">
    <label for="firstNameInput">Prénom</label>
    <input id="firstNameInput" type="text" name="firstName" />

    <label for="lastNameInput">Nom</label>
    <input id="lastNameInput" type="text" name="lastName" />

    <button type="submit" name="greetingForm">Dire bonjour</button>
</form>

<?php if (isset($_POST['greetingForm'])) {
    $_SESSION['greetingfirstName'] = $_POST ['firstName'];
    $_SESSION['greetinglastName'] = $_POST ['lastName'];
}?>
