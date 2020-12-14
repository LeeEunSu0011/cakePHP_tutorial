<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tag[] $tags
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
        <ul>
        <?php foreach($tags as $tag): ?>
            <li>
                <time><?= $tag->created->i18nFormat('YYYY年MM月dd日 HH:mm') ?></time>
                <?= $this->Html->link($tag->title, ['action' => 'view', $tag->id]) ?>
            </li>
        <?php endforeach; ?>
        </ul>

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