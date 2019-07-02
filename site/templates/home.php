<?php snippet('header') ?>

<main>

    <?php snippet('nav') ?>

    <div class="page">
        <h1><?= $page->title() ?></h1>
        <div class="text">
        <?= $page->text()->kt() ?>
        </div>

        <button id="ring-the-bells">Ring the bells</button>
    </div>

</main>

<?php snippet('footer') ?>