<?php snippet('header') ?>

<main>

  <?php snippet('nav') ?>

  <div class="page" id="e">

    <a id="top"></a>

    <h1><?= $page->title() ?></h1>
    <div class="text">
      <?= $page->intro()->kt() ?>
      <?php if ($page->meta()->isNotEmpty()): ?>
      <div class="meta">
        <?= $page->meta()->kt() ?>
      </div>
      <?php endif ?>
      <?= $page->text()->kt() ?>
      <?php foreach($page->files()->sortBy('sort') as $file): ?>
        <?php if ($file->hide() == "true"): ?>
        <?php else: ?>
        <figure>
          <img src="<?= $file->url() ?>" />
        </figure>
        <?php endif ?>
      <?php endforeach ?>
    </div>

    <?php snippet('mini_nav') ?>


  </div>

</main>

<?php snippet('footer') ?>