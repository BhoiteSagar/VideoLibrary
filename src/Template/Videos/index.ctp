<div class="large-2 medium-4 columns navigationMain" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Video'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</div>
<!-- <div class="videos index large-9 medium-8 columns content">
    <h3><?= __('Videos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('title') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($videos as $video): ?>
            <tr>
                <td><?= $this->Number->format($video->id) ?></td>
                <td><?= h($video->title) ?></td>
                <td><?= h($video->created) ?></td>
                <td><?= h($video->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $video->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $video->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $video->id], ['confirm' => __('Are you sure you want to delete # {0}?', $video->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
-->
<div class="containerMain">
<?php foreach ($videos as $video): ?>
    <div id="video_<?= h($video->id) ?>" class="videosCont">
        <!-- Use the HtmlHelper to create a link -->
        <div class="override"><h4><?= h($video->title) ?></h4></div>
        <div class="actionCont">
            <?= $this->Html->link(__('View'), ['action' => 'view', $video->id]) ?>
            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $video->id]) ?>
            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $video->id], ['confirm' => __('Are you sure you want to delete # {0}?', $video->id)]) ?>
        </div>
        <!-- <small><a href="<?= h($video->url) ?>" target="_blank"><?= h($video->url) ?></a></small> -->
        <iframe width="560" height="315" src="<?= h($video->url) ?>" frameborder="0" allowfullscreen></iframe>

        <!-- Use the TextHelper to format text -->
        <?= $this->Text->autoParagraph($video->description) ?>
    </div>
<?php endforeach; ?>
</div>