<!-- /*

TP CHAT v2

1) créer une BDD de cours
2) créer une table pour stocker les messages du chat

 Page de chat
    Traite le formulaire de message
        Vérifier si un message est "post"é
        L'ajouter le message dans la BDD

    Liste les messages depuis la BDD

    Affiche un formulaire pour rédiger son message



    TP BLOG v1

    1) Page de listing d'articles (home)
    2) Page pour l'admin d'articles (liste)
    3) Page pour effacer un article
    4) Page pour éditer un article
    5) Page pour ajouter un article

 */ -->

 <div class="container py-5">
     <div class="row">
         <div class="col">
             <h1>Chat</h1>
         </div>
     </div>
     <hr>
 </div>

<?php
require_once dirname(__FILE__) . '/../utils/database.utils.php';

$query = $database->query('SELECT * FROM `messagechat`');



while ($data = $query->fetch()){
  if (isset($data['content']) && !empty($data['content'])){
    ?>
    <div class="row mb-2">
          <div class="col">
              <div class="card">
                <div class="card-body"> <?php echo $data['content']; ?></div>
              </div>
          </div> <?php

  }
}
?>

<form action="/?page=chat" method="POST">
     <div class="row">
         <div class="col">
             <label for="chatMessage" class="form-label">Message</label>
             <textarea class="form-control" id="chatMessage" rows="3" name="messageText"></textarea>
         </div>
     </div>

     <div class="row mt-3">
       <div class="col">
             <button class="btn btn-primary" type="submit" name="chatForm">Envoyer</button>
         </div>
     </div>
 </form>

<?php
var_dump($_POST);
if (isset($_POST['messageText']) && !empty($_POST['messageText'])) {
  $query = $database->prepare("INSERT INTO `messagechat` (`content`)
VALUES (:content);");

$query->execute([
    'content' => $_POST['messageText'],
]);
}
?>
