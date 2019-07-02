
</div>

<?php if ($page->isHomePage()): ?>
    <?= js(['assets/js/howler.min.js', '@auto']) ?>
    <script>
        var bells = {
            <?php $bells = $page->audio(); foreach($page->audio()->sortBy('sort') as $bell): ?>
                <?php $index = $bells->sortBy('sort')->indexOf($bell); ?>

                <?php if($bell != $bells->sortBy('sort')->last()): ?>
                    "<?php echo $index ?>" : new Howl({
                        src: ['<?= $bell->url() ?>'],
                        loop: false
                    }),
                <?php else: ?>
                    "<?php echo $index ?>" : new Howl({
                        src: ['<?= $bell->url() ?>'],
                        loop: false
                    })
                <?php endif ?>
            <?php endforeach ?>
        };
    </script>
    <?= js(['assets/js/home.js', '@auto']) ?>
    <?= js(['assets/js/bells.js', '@auto']) ?>

<?php else: ?>
    <?= js(['assets/js/footer.js', '@auto']) ?>
<?php endif ?>

</body>
</html>
