<?php if($this->cart->contents()) : ?>
	<form method="post" action="<?php echo base_url(); ?>cart/process">
		<table class="table table-striped">
		<tr>
			<th>Styck</th>
  			<th>Spel-titel</th>
  			<th style="text-align:right">Pris</th>
		</tr>
		<?php $i = 0; ?>
		<?php foreach ($this->cart->contents() as $items): ?>
			<tr>
				<td><?php echo $items['qty']; ?></td>
	  			<td><?php echo $items['name']; ?></td>
	  			<td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
			</tr>			
				<?php echo '<input type="hidden" name="item_name['.$i.']" value="'.$items['name'].'" />';?>
				<?php echo '<input type="hidden" name="item_code['.$i.']" value="'.$items['id'].'" />';?>
				<?php echo '<input type="hidden" name="item_qty['.$i.']" value="'.$items['qty'].'" />';?>
			<?php $i++; ?>
		<?php endforeach; ?>
		<tr>
			<td></td>
  			<td class="right"><strong>Frakt</strong></td>
  			<td class="right" style="text-align:right"><?php echo $this->config->item('shipping');?></td>
		</tr>
		<tr>
			<td></td>
  			<td class="right"><strong>Taxering</strong></td>
  			<td class="right" style="text-align:right"><?php echo $this->config->item('tax');?></td>
		</tr>
		<tr>
			<td></td>
  			<td class="right"><strong>Total</strong></td>
  			<td class="right" style="text-align:right"><strong><?php echo $this->cart->format_number($this->cart->total()+ $this->config->item('shipping') + $this->config->item('tax')); ?>:sek</strong></td>
		</tr>
		</table>
		<br>
		
			<?php if(!$this->session->userdata('logged_in')) : ?>
			
				<p><a href="<?php echo base_url(); ?>users/register" class="btn btn-primary">Registrera</a></p>
				<p><em>Du måste logga in för att beställa produkter</em></p>
				
			<?php else : ?>
		
		
			<h3>Shipping Info</h3>
			<div class="form-group">
				<label>Adress</label>
				<input type="text" class="form-control" name="address">
			</div>
			<div class="form-group">
				<label>Adress 2</label>
				<input type="text" class="form-control" name="address2">
			</div>
			<div class="form-group">
				<label>Stadsdel</label>
				<input type="text" class="form-control" name="city">
			</div>
			<div class="form-group">
				<label>Stad</label>
				<input type="text" class="form-control" name="state">
			</div>
			<div class="form-group">
				<label>Postnummer</label>
				<input type="text" class="form-control" name="zipcode">
			</div>
		<p><button class="btn btn-primary" type="submit" name="submit">Till kassa</button></p>
		
		<?php endif; ?>
		
	</form>
<?php else : ?>
	<p>Det finns inga artiklar i din varukorg</p>
<?php endif; ?>