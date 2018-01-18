<div class="row">
    <?php foreach ($items as $item) : ?>
        <div class="col-md-4 section<?= (isset($item['disabled']) && $item['disabled']) ? ' disabled' : ''?>">
            <a href="<?= $item['url'] ?>"><?= $item['title'] ?></a>
            <p><?= $item['text'] ?></p>
        </div>
    <?php endforeach; ?>
</div>



