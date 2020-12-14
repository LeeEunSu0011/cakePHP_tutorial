<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>
<h1><?= $post->title ?></h1>
<p>ID : <?= $post->body ?></p>
<p><small>投稿者:<?= h($post->user->username) ?></small></p>
<hr>
<?= $this->Html->link('一覧へ戻る', ['action' => 'index'],['class' => 'button']) ?>