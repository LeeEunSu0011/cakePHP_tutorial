<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post[] $posts
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="content">
        <?php foreach($posts as $post): ?>
                <h3><?= $post->title ?></h3>
                <p><?= $post->description ?></p>
                <hr>
        <?php endforeach; ?>
    </div>
</body>
</html>