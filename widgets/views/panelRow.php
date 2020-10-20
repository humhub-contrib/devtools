<div class="row">
    <?php foreach ($items as $item) : ?>
        <div class="col-md-4 section<?= (isset($item['disabled']) && $item['disabled']) ? ' disabled' : ''?>">
            <?php if(!isset($item['disabled']) || !$item['disabled']) : ?>
            <a href="<?= $item['url'] ?>">
                <?= $item['title'] ?>
            </a>
            <?php else : ?>
                <?= $item['title'] ?>
            <?php endif; ?>
            <p><?= $item['text'] ?></p>
        </div>
    <?php endforeach; ?>
</div>



