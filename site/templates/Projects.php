<?php snippet('header') ?>
<h1><?= $page->title() ?></h1>
 <ul>
<?php foreach ($page->children() as $projet) : ?>
   
        <li><a href="<?= $projet->url() ?>"> <?= $projet->title() ?> </a>
        <?= $projet->image() ?></li>
   
<?php endforeach ?>
 </ul>
<?php snippet('footer') ?>
