<?php snippet('header') ?>

<h1><?= $page->title() ?></h1>
<?php foreach ($page->images() as $image) : ?>
    <div style="background-color: <?= $image->color()?> ;">
<a href="<?= $image->url()?>"> <?= $image->resize(700) ?></a> 
</div>

<?php endforeach ?>

<?php snippet('footer') ?>