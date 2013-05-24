<!doctype html>
<meta charset=utf-8>
	<title><?php echo $title; ?></title>
<style>
	body{font-family:tahoma,sans-serif}
	article{border:1px dotted gray;padding:0 1em;}
</style>
<a href="<?php echo site_url('guestbook'); ?>"><h1>Guestbook</h1></a>
<?php echo validation_errors(); ?>
<?php echo $form; ?>
<?php foreach($posts as $posts_item): ?>
<article>
	<p><?php echo $posts_item['text']; ?></p>
	<p>Author: <em><?php echo $posts_item['author']; ?></em></p>
</article>
<?php endforeach; ?>
<hr>
<strong>&copy; 2013 Freddy</strong>