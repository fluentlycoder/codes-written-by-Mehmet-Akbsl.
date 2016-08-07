		
		
		
		<div class="row details">
			<div class="col-md-4">
				<img src="<?php echo base_url(); ?>assets/images/products/<?php echo $product->image; ?>" />
			</div>
			<div class="col-md-8">
				<h3><?php echo $product->product_title ?></h3>
				<div class="details-price">
					Pris: <?php echo $product->price ?>:-
				</div>
				<div class="details-description">
					<?php echo $product->description ?>
					</div>
				
				<div class="details-buy">
				<form method="post" action="<?php echo base_url(); ?>cart/add/<?php echo $product->id; ?>">
				Styck: <input class="qty" type="text" name="qty" value="1" />
					<input type="hidden" name="item_number" value="<?php echo $product->id; ?>" />
					<input type="hidden" name="price" value="<?php echo $product->price; ?>:-" />
					<input type="hidden" name="title" value="<?php echo $product->product_title; ?>" />
				<button class="btn btn-primary" type="submit">Lägg till i kundvagn</button>
			</form>
		</div>
			</div>
		</div>