<nav class=" uppercase tracking-wider text-sm" >
    <ul class="flex flex-row">
    <?php foreach($kirby->languages() as $language): ?>
        <li class=" <?php e($kirby->language() == $language, ' active ') ?>" >
            <a href="<?= $page->url($language->code()) ?>" hreflang="<?= $language->code() ?>" class="block h-12 px-8 md:px-4 bg-teal-500 hover:bg-teal-300 whitespace-no-wrap leading-12">
                <?= html($language->code()) ?>
            </a>
        </li>
    <?php endforeach ?>
    </ul>
</nav>
