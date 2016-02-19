<div class="users form">
  <?= $this->Form->create($user) ?>
  <fieldset>
    <legend <?= __('Add User') ?>>
      <?= $this->Form->input('username') ?>
      <?= $this->Form->input('password') ?>
      <?= $this->Form->input('role', [
        'options' => ['admin' => 'Admin', 'author' => 'Author']
        ]) ?>
    </legend>
  </fieldset>
  <?= $this->Form->button(__('Submit')); ?>
  <?= $this->Form->end() ?>
</div>
