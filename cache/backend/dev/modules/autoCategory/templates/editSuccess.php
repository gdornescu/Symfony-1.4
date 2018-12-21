<?php use_helper('I18N', 'Date') ?>
<?php include_partial('Category/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edit Category', array(), 'messages') ?></h1>

  <?php include_partial('Category/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('Category/form_header', array('category' => $category, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('Category/form', array('category' => $category, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('Category/form_footer', array('category' => $category, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
