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
<div class="jumbotron">
    <h1>Discover Romania!</h1>
    <p class="lead">Login,and after that you can add articles about Romania turism. Just click Add Article !</p>
    <h1>Welcome</h1>
    <div class="contact-image">
        <img src="data:image/jpeg;base64,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fc8ZZC43cbrdJLkaSk5PLGrJqe1PUFhy2bwtJQUjpTqOD0O2srAG9Ai5+Q9VxhT11JNWslH1WRikkI946R52DxyWjqRR1jRm+grqJ43X7isKpEy6E10OcjitziPhmLDdqxKKlozaE3F5RKwSSOFy0Dvv+CjyUU+ZNhKclqhk9K94sXjutYfisxnGPQxOlKa1f8HC+jeDa1+7YuqqRZGlRmnyMc100E6iqS3DaOS74+AF+kz90m3cQrW3rKpH5ogVqTpy1XMgcS7nEMSAXEgDEhgTEhkMSAMSATEgExIBMSAQuQCFyGRpcgELkA0uQCFyGRpK0lBMDcS09F2ZkQldUYEWTIIAQAgBAbPyMaNw0ckzh/ayG36sYw/7i/wVRfzzUS7ItbKGIZ7mhlQCaKgBACA5qymDxf6w2H+BXSE91nGrTUlnqR0VK92YGXbku7nFESNKcuSHuoH8Ae4rHpYmzoTR5xwOLsNrHffcOK2cklk0jTblukrDTNbsGfE7VFlNsnQpRjyPZanQEAIDnq6UPGWR4+q6QnunKrS318zzgoA0gk3t4LMqrawjSFuovLZ2LkSAQAgIXW3V9lfTOhd0XDpRv+w8bD3HMHsK7UKzpT3kcq1JVYbrPn+tpnwyvhlaWvYS1zTuI/EEWIO8EFX0ZKSUlyKKcHF4Z44lsahjQBjQBjQBiQCY0AYkAmJAJiQCYkAmJAIXIZELkA0uQCXQCIZBACAEAIAQAgO/QeiZKuoZTwi7nHbua0e853YAudSoqcXJm9Om6kt1H0jonR7KaCOnj92NoaOJsMye0m5+K8/ObnJyfUvYRUYpI61qbCIABQCoAQAgBACAEAIAQAgBACAEAIAQAgKbyhamCuj52GzahgyOwSNH1HHjwO7uKl2ty6Tw+RGubdVVlczDp43Mc5j2lrmktc1wsQRtBCuk01lFM4uLwxmJZMBiQBiQCYkAYkAmJAGJAJiQBiQCXQCIZBACAEAIAQAgBACAEBOau6qVVc4cxGcG+V1xGP3vrdwuuFWvCnzfkdqVCdR6I27U/VOHR0WFnTkdbnJSLF3YB9VvZ+Kp69eVV5fItqNCNJYXMsK4HYEAIBCEAAIBUAIBLIBUAIAQCWQBZAKgBAIW9/zQCYO/xKzkYFssALIAsgILTOp9FVyc9PCHPsG4gXNJA2XsRfvK7U7ipBYizjOhTm8yRw/Rxo3q/nk9V04yt3NOEpdg+jnRvV/PJ6pxlbuOEpdg+jjRvV/PJ6pxlbuOEpdg+jjRvV/PJ6pxlbuOEpdg+jjRvV/PJ6pxlbuOEpdg+jjRvV/PJ6pxlbuOEpdg+jjRvV/PJ6pxlbuOEpdg+jjRvV/PJ6pxlbuOEpdg+jjRvV/PJ6pxlbuOEpdg+jjRvV/PJ6pxlbuOEpdg+jjRvV/PJ6pxlbuOEpdg+jjRvV/PJ6pxlbuOEpdg+jjRvV/PJ6pxlbuOEpdg+jjRvV/PJ6pxlbuOEpdg+jjRvV/PJ6pxlbuOEpdg+jjRvV/PJ6pxlbuOEpdg+jjRvV/PJ6pxlbuOEpdg+jjRvV/PJ6pxlbuOEpdg+jjRvV/PJ6pxlbuOEpdju0fqbQQG8dNHfcXAPI7i665yuKsubN40KceSJ0C2QXE7CoAQH//Z" alt="rocket_contact"/>
    </div>
</div>


<!-- Example row of columns -->
<?php foreach ($posts as $post): ?>

<div class="row">
    <h2><img src="../uploads/image/<?php echo $post->getImage() ?>" style="text-align: center;" </h2>
        <h2><?php echo $post->getTitle() ?></h2>
        <p><?php echo $post->getBody() ?></p>
        <p><a class="btn btn-primary" href="<?php echo url_for('article_show',$post) ?>" role="button">View details &raquo;</a></p>
</div>
<?php endforeach; ?>

<!-- Footer -->
<footer class="footer">

	<!-- Footer Elements -->
	<div class="youtube">
<iframe width="500" height="350" src="https://www.youtube.com/embed/8aukCBIX3_U" frameborder="0"
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
	<!-- Footer Elements -->

</footer>
<!-- Footer -->
</body>

</html>