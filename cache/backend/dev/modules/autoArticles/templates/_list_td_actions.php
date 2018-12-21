<td>
  <ul class="sf_admin_td_actions">
    <?php if ($sf_user->hasCredential(array(  0 => 'admin',))): ?>
<?php echo $helper->linkToDelete($post, array(  'credentials' =>   array(    0 => 'admin',  ),  'params' =>   array(  ),  'confirm' => 'Are you sure?',  'class_suffix' => 'delete',  'label' => 'Delete',)) ?>
<?php endif; ?>

    <?php if ($sf_user->hasCredential(array(  0 => 'admin',))): ?>
<?php echo $helper->linkToEdit($post, array(  'credentials' =>   array(    0 => 'admin',  ),  'params' =>   array(  ),  'class_suffix' => 'edit',  'label' => 'Edit',)) ?>
<?php endif; ?>

  </ul>
</td>
