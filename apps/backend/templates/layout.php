<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <?php echo $sf_content ?>
    <?php if ($sf_user->isAuthenticated()): ?>
        <div id="menu">
            <div class="dropdown">

            <ul>
                <li><?php echo link_to('Articles', 'post') ?></li>
                <li><?php echo link_to('Categories', 'category') ?></li>
            </ul>
            </div>
        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">Users Management</button>
            <div id="myDropdown" class="dropdown-content">
                <?php echo link_to('Users', 'sf_guard_user') ?>
                <?php echo link_to('Permissions', 'sf_guard_permission') ?>
                <?php echo link_to('Groups', 'sf_guard_group') ?>
            </div>
        </div>
        </div>
    <h1>Welcome <?php echo sfContext::getInstance()->getUser()->getGuardUser()->getUsername()?></h1>
        <li><?php echo link_to('Logout', 'sf_guard_signout') ?> </li>

    <?php endif ?>

  </body>
</html>
