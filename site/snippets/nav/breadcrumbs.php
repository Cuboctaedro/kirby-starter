<nav>
    <ul>
    <?php foreach($site->breadcrumb() as $crumb): ?>
        <li>
            <a class="<?php e($crumb->isActive(), ' is-active ') ?>" href="<?= $crumb->url() ?>"><?= $crumb->title() ?></a>
        </li>
    <?php endforeach; ?>
    </ul>
</nav>
