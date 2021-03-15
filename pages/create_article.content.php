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

$query = $database->query('SELECT * FROM `article`');



while ($data = $query->fetch()){
 if (isset($data['articleTitle']) && !empty($data['articleTitle']) && isset($data['articleContent']) && !empty($data['articleContent'])){
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

<form action="/?page=create_article" method="POST">
    <div class="row">
        <div class="col">
            <label for="articleTitle" class="form-label">Titre</label>
            <textarea class="form-control" id="articleTitle" rows="3" name="articleTitle"></textarea>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <label for="articleContent" class="form-label">Message</label>
            <textarea class="form-control" id="articleContent" rows="3" name="articleContent"></textarea>
        </div>
    </div>

    <div class="row mt-3">
      <div class="col">
            <button class="btn btn-primary" type="submit" name="create_articleForm">Envoyer</button>
        </div>
    </div>
</form>

<?php
var_dump($_POST);
if (isset($_POST['articleTitle']) && !empty($_POST['articleTitle']) && isset($_POST['articleContent']) && !empty($_POST['articleContent'])) {
 $query = $database->prepare("INSERT INTO `article` (`articleTitle` , `articleContent`)
VALUES (:title ,:content);");

$query->execute([
   'title' => $_POST['articleTitle'],
   'content' => $_POST['articleContent'],
]);
}
?>
