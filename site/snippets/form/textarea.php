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
 * $attributes (extra attributes like 'required' or 'disabled')
 *
 */
?>

<label class="field__label"><?= $label ?></label>
<textarea
    class="field__input field__input--textarea <?php e($form->error($name), ' has-error ', ''); ?>"
    name="<?= $name ?>"
    <?php e($attributes, $attributes, ''); ?>
>
<?= $form->old($name) ?>
</textarea>
<?php if ($form->error($name)): ?>
    <p class="field__message field__message--error"><?= implode('<br>', $form->error($name)) ?></p>
<?php endif; ?>
