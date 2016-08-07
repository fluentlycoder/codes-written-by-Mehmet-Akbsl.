	
	<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
	<form method="post" action="<?php echo base_url(); ?>users/register"role="form">
		<div class="form-group">
			<label>Namn*</label>
			<input type="text" class="form-control" name="first_name" placeholder="V&auml;nlig&auml;n skriv ditt namn">
		</div>
		<div class="form-group">
			<label>Efternamn*</label>
			<input type="text" class="form-control" name="last_name" placeholder="V&auml;nligen skriv ditt efternamn">
		</div>
		<div class="form-group">
			<label>E-postadress*</label>
			<input type="email" class="form-control" name="email" placeholder="V&auml;nligen skriv din e-postadress">
		</div>
		<div class="form-group">
			<label>Anv&auml;ndarnamn*</label>
			<input type="text" class="form-control" name="username" placeholder="V&auml;nligen skapa ett anv&auml;ndarnamn">
		</div>
		<div class="form-group">
			<label>L&ouml;senord*</label>
			<input type="password" class="form-control" name="password" placeholder="V&auml;nligen ange ett l&ouml;senord">
		</div>
		<div class="form-group">
			<label>Confirmera l&ouml;senordet*</label>
			<input type="password" class="form-control" name="password2" placeholder="Ange l&ouml;senordet igen">
		</div>					
		
		<button name="submit" type="submit" class="btn btn-primary">Registrera</button>
	</form>		