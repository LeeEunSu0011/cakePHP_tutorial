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
                <p><?= $post->created->i18nFormat('YYYY年MM月dd日 HH:mm') ?></p>
                <p><?= h($post->description) ?></p>
                <p><small>投稿者:<?= h($post->user->username) ?></small></p>
                <a href="/posts/view/<?= $post->id ?>" class="button">記事を読む</a>
                <?= $this->Html->link('記事を読む', ['controller' => 'Posts', 'action' => 'view', $post->id], ['class' => 'button']) ?>
                <hr>
        <?php endforeach; ?>
        <?php if($this->Paginator->total() > 1): ?>
            <div class="paginator">
                <ul class="pagination">
                    <?= $this->Paginator->first('<< 最初') ?>
                    <?= $this->Paginator->prev('< 前へ') ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next('次へ >') ?>
                    <?= $this->Paginator->last('最後 >>') ?>
                </ul>
            </div>
        <?php endif ?>
    </div>
</body>
</html>