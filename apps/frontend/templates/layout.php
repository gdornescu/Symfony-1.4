<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<?php include_http_metas() ?>
	<?php include_metas() ?>
	<?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<?php include_stylesheets() ?>
	<?php include_javascripts() ?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo url_for('homepage') ?>">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo url_for('article_new') ?>">Add Article <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo url_for('article') ?>">All Articles</a>
            </li>
            <li class="nav-item">
	        <?php if ($sf_user->isAuthenticated()): ?>
                <a class="nav-link" href="<?php echo url_for('sf_guard_signout') ?>">Logout <?php echo sfContext::getInstance()->getUser()->getGuardUser()->getUsername()?></a>
	        <?php endif ?>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="<?php echo url_for('search') ?>" method="POST">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
<!--        <div class="col-3 search-top">-->
<!--            <form class="" action="--><?php //echo url_for('article_search') ?><!--" method="POST">-->
<!--                <input type="text" name="keyword" id="s" placeholder="Type keyword to search..."></form>-->
<!--        </div>-->
    </div>
</nav>
<a class="weatherwidget-io" href="https://forecast7.com/en/47d1627d60/iasi/" data-label_1="IAȘI" data-label_2="WEATHER" data-theme="dark" >IAȘI WEATHER</a>
<script src="../../web/js/weather.js"></script>

<div class="content">
	<?php echo $sf_content ?>

</div>
</body>
</html>
