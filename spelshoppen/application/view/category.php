<?php if($this->session->flashdata('registered')) : ?>
	<div class="alert alert-success">
		<?php echo $this->session->flashdata('registered'); ?>
	</div>
<?php endif; ?>

<?php if($this->session->flashdata('pass_login')) : ?>
	<div class="alert alert-success">
		<?php echo $this->session->flashdata('pass_login'); ?>
	</div>
<?php endif; ?>

<?php if($this->session->flashdata('fail_login')) : ?>
	<div class="alert alert-danger">
		<?php echo $this->session->flashdata('fail_login'); ?>
	</div>
<?php endif; ?>

<?php if(!is_array($categories)) : ?>
	<?php echo ' No games in this category' ?>
		<?php else : ?>

<?php  foreach ($categories as $category) : ?>

	<div class="col-md-4 game">
		<div class="game-price"><?php echo $category->price; ?></div>
		
		<a href="<?php echo base_url(); ?>products/details/<?php echo $category->id; ?>">
				<img src="<?php echo base_url(); ?>assets/images/products/<?php echo $category->image; ?>" />
			</a>
		</a>
		<div class="game-title">
			<?php echo $category->product_title; ?>
		</div>
		<div class="game-add">
			<form method="post" action="<?php echo base_url(); ?>cart/add">
				Styck: <input class="qty" type="text" name="qty" value="1" /><br>
				<input type="hidden" name="item_number" value="<?php echo $category->id; ?>" />
				<input type="hidden" name="price" value="<?php echo $category->price; ?>:-" />
				<input type="hidden" name="title" value="<?php echo $category->product_title; ?>" />
				<button class="btn btn-primary" type="submit">Lägg till i kundvagn</button>
			</form>
		</div>
		
	</div>


<?php  endforeach; ?>

<?php  endif; ?>