<?php
/*
 * Required variables:
 *
 * $form (the form as defined in the controller)
 * $name (field name)
 * $label (the field label)
 * $options (array of options)
 *
 * Optiona variables
 *
 * $attributes (extra attributes like 'required' or 'disabled')
 *
 */
?>

<label class="field__label"><?= $label ?></label>
<select
    name="<?= $name ?>"
    class="field__input field__input--select <?php e($form->error($name), ' has-error ', ''); ?>"
>
<?php foreach($options as $option): ?>
    <option
        value="<?= $option['val'] ?>"<?php e($option['val'] == $form->old($name) , ' selected'); ?>
    >
        <?= $option['label'] ?>
    </option>
<?php endforeach; ?>
</select>
<?php if ($form->error($name)): ?>
    <p class="field__message field__message--error"><?= implode('<br>', $form->error($name)) ?></p>
<?php endif; ?>
