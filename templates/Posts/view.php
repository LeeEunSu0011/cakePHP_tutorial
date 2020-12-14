<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>
<div class="content">
    <h1><?= $post->title ?></h1>
    <p>ID : <?= $post->body ?></p>
    <?php if(!empty($post->tags)): ?>
        <p><small>タグ：
        <?php foreach($post->tags as $tag): ?>
                <?= $this->Html->link($tag->title,['controller' => 'tags', 'action' => 'view', $tag->id]) ?>
                <?= $tag !== end($post->tags) ? ',' : ' ' ?>
            <?php endforeach; ?>
        </small></p>
    <?php endif; ?>
    <p><small>投稿者:<?= h($post->user->username) ?></small></p>
    <hr>
    <?= $this->Html->link('一覧へ戻る', ['action' => 'index'],['class' => 'button']) ?>
</div>