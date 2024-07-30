<?php $pager->setSurroundCount(2) ?>

<nav aria-label="Page navigation">
    <ul class="pagination">
    <?php if ($pager->hasPreviousPage()) : ?>
        <li class="me-5 my-3">
            <a href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>">
                <span aria-hidden="true"><< <?= lang('Pager.first') ?></span>
            </a>
        </li>
        <li class="me-2 my-3">
            <a href="<?= $pager->getPreviousPage() ?>" aria-label="<?= lang('Pager.previous') ?>">
                <span aria-hidden="true">< <?= lang('Pager.previous') ?></span>
            </a>
        </li>
    <?php endif ?>

    <?php foreach ($pager->links() as $link): ?>
        <li <?= $link['active'] ? 'class="active m-3 fw-bold text-reset"' : 'class="m-3  text-secondary"' ?>>
            <a class="text-decoration-none" href="<?= $link['uri'] ?>">
                Pg<?= $link['title'] ?>
            </a>
        </li>
    <?php endforeach ?>

    <?php if ($pager->hasNextPage()) : ?>
        <li class="ms-2 my-3">
            <a href="<?= $pager->getNextPage() ?>" aria-label="<?= lang('Pager.next') ?>">
                <span aria-hidden="true"><?= lang('Pager.next') ?> ></span>
            </a>
        </li>
        <li class="ms-5 my-3">
            <a href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>">
                <span aria-hidden="true"><?= lang('Pager.last') ?> >></span>
            </a>
        </li>
    <?php endif ?>
    </ul>
</nav>