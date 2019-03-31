<?php
/*
 * Required variables:
 *
 * $form (the form as defined in the controller)
 * $name (field name)
 * $label (the field label)
 *
 * Optiona variables
 *
 * $type (input type, defaults to 'text')
 * $attributes (extra attributes like 'required' or 'disabled')
 *
 */

$type = $type ?: 'text';

?>

<label class="field__label"><?= $label ?></label>
<input
    class="field__input <?php e($form->error($name), ' has-error ', ''); ?>"
    name="<?= $name ?>"
    type="<?= $type ?>"
    value="<?= $form->old($name) ?>"
    <?php e($attributes, $attributes, ''); ?>
>
<?php if ($form->error($name)): ?>
    <p class="field__message field__message--error"><?= implode('<br>', $form->error($name)) ?></p>
<?php endif; ?>
