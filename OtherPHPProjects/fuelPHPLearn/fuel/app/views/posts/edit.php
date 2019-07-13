<h1>Edit Post</h1>
<?php echo Form::open( "/fuelPhpLearn/public/posts/edit/<?php echo $posts->id; ?>" ); ?>
<div class="form-group">
	<?php echo Form::label( 'Title', 'tile' ); ?>
	<?php echo Form::input( 'title', Input::post( 'title',
		isset( $posts ) ? $posts->title : '' ),
		array( 'class' => 'form-control' ) ); ?>
</div>
<div class="form-group">
	<?php echo Form::label( 'Category', 'category' ); ?>
	<?php echo Form::select( 'category', $posts->category, array(
		'0'             => 'Select Category',
		'Web Design'    => 'Web Design',
		'Programming'   => 'Programming',
		'Grapic Design' => 'Graphic Design',
	),
		array( 'class' => 'form-control' ) ); ?>
</div>
<div class="form-group">
	<?php echo Form::label( 'Body', 'body' ); ?>
	<?php echo Form::textarea( 'body', Input::post( 'body',
		isset( $posts ) ? $posts->body : '' ),
		array( 'class' => 'form-control' ) ); ?>
</div>
<div class="form-group">
	<?php echo Form::label( 'Tags', 'tags' ); ?>
	<?php echo Form::input( 'tags', Input::post( 'tags',
		isset( $posts ) ? $posts->tags : '' ),
		array( 'class' => 'form-control' ) ); ?>
</div>

<input type="hidden" name="post_id" value="<?php echo $posts->id; ?>">

<div class="actions">
	<?php echo Form::submit( 'send' ); ?>
</div>
<?php echo Form::close(); ?>
