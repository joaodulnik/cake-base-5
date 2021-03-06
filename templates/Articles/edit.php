<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 */
$headerLinks = [
	[
		'title' => __('List Articles'),
		'link' => [
			'controller' => 'articles',
			'action' => 'index'
		],
		'icon' => 'fa-list',
		'btn-class' => 'btn-primary'
	],
	[
		'title' => __('Delete'),
		'link' => [
			'controller' => 'articles',
			'action' => 'delete',
			'id' => $article->id
		],
		'icon' => 'fa-trash',
		'btn-class' => 'btn-danger'
	]
];
$this->assign('header_title_top', 'Edit Article #' . $article->id);
$this->assign('header_links', serialize($headerLinks));
?>
<div class="row">
	<div class="col-sm-10 offset-sm-1">
		<div class="articles form content card p-3">
			<?= $this->Form->create($article) ?>
				<fieldset>
					<?php
					echo $this->Form->control('user_id', ['class' => 'form-control mb-2', 'options' => $users]);
					echo $this->Form->control('title', ['class' => 'form-control mb-2']);
					echo $this->Form->control('body', ['class' => 'form-control mb-2 tinymce']);
					?>
				</fieldset>
				<div class="mt-3">
					<?= $this->Form->button(__('Submit'), ['class'=>'btn btn-primary']); ?>
					<?= $this->Html->link(__('Cancel'), $this->request->referer(), ['class'=>'btn btn-secondary']) ?>
					<?= $this->Form->end() ?>
				</div>
			<?= $this->Form->end() ?>
		</div>
	</div>
</div>
