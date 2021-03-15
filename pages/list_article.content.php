<?php

$query = $database->query('SELECT * FROM `article`');

while ($data = $query->fetch()){
  if (isset($data['articleTitle']) && !empty($data['articleTitle']) && isset($data['articleContent']) && !empty($data['articleContent'])){
    ?>
    <div class="row">
          <div class="col">
                <h1> <?php echo $data['articleTitle']; ?></h1>
          </div>
    <div class="row">
          <div class="col">
                <p> <?php echo $data['articleContent']; ?></p>
          </div>
          <?php

  }
}

?>
