<?php
$items = $site->pages()->listed();
if($items->isNotEmpty()):
?>

<nav>
    <ul>
    <?php foreach($items as $item): ?>
        <li>
            <a class="<?php e($item->isOpen(), ' is-active ') ?>" href="<?= $item->url() ?>"><?= $item->title() ?></a>
        </li>
    <?php endforeach ?>
    </ul>
</nav>

<?php endif ?>
