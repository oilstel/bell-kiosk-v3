<nav class="main-nav">
<?php foreach($site->children()->listed() as $item): ?>
    <a <?php e($item->isActive(), ' class="active"') ?> href="<?php echo $item->url() ?><?php if ($item->isHomePage()): ?><?php else: ?><?php endif ?>" style="background-image: url('<?php if ($cover = $item->cover()->toFile()) { echo $cover->url(); } ?>');"></a>
<?php endforeach ?>
</nav>