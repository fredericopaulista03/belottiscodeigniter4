<?php if ($pager->getPageCount() > 1): ?>
<div class="pagination">
    <?php if ($pager->hasPreviousPage()): ?>
    <a href="<?= $pager->getPreviousPage() ?>" class="page-link">&laquo;</a>
    <?php endif; ?>

    <?php foreach ($pager->links() as $link): ?>
    <a href="<?= $link['uri'] ?>" class="page-link <?= $link['active'] ? 'active' : '' ?>">
        <?= $link['title'] ?>
    </a>
    <?php endforeach; ?>

    <?php if ($pager->hasNextPage()): ?>
    <a href="<?= $pager->getNextPage() ?>" class="page-link">&raquo;</a>
    <?php endif; ?>
</div>
<?php endif; ?>