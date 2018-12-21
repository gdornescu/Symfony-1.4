<?php use_helper('I18N', 'Date') ?>
<?php include_partial('articles/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edit Articles', array(), 'messages') ?></h1>

  <?php include_partial('articles/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('articles/form_header', array('post' => $post, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('articles/form', array('post' => $post, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('articles/form_footer', array('post' => $post, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
