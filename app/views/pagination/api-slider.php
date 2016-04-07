<?php
	$presenter = new Site\Pagination\BootstrapPresenter($paginator);
?>

<?php if ($paginator->getLastPage() > 1): ?>
	<ul class="pagination">
			<?php echo $presenter->render(); ?>
	</ul>
<?php endif; ?>
