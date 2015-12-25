<?php if($this->Text->toList($tags) != "all") { ?>
	<h1 class="containerTag">
	    Tag: <?= $this->Text->toList($tags) ?>
	</h1>
<?php } ?>

<section class="containerTag">
<?php foreach ($videos as $video): ?>
    <div id="video_<?= h($video->id) ?>" class="videosTag">
        <!-- Use the HtmlHelper to create a link -->
        <h4><?= h($video->title) ?></h4>
        <!-- <small><a href="<?= h($video->url) ?>" target="_blank"><?= h($video->url) ?></a></small> -->
        <iframe width="560" height="315" src="<?= h($video->url) ?>" frameborder="0" allowfullscreen></iframe>

        <!-- Use the TextHelper to format text -->
        <?= $this->Text->autoParagraph($video->description) ?>
    </div>
<?php endforeach; ?>
</section>