<h2><?= $title ?></h2>
<?php foreach($posts as $post): ?>
	<h3><?= $post['title'] ?></h3>
	<small class="post-date">Posted on: <?= $post['created_at'] ?></small>
	<p><?= $post['body'] ?></p>
	<p><a class="btn btn-default" href="<?= site_url('/posts/'.$post['slug']); ?>">See More</a></p>
<?php endforeach; ?>
