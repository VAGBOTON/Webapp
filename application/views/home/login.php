<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
		<?php $attributes = array("name" => "loginform");
			echo form_open("login", $attributes);?>
			<legend>Connexion</legend>
			<div class="form-group">
				<label for="name">Adresse Mail</label>
				<input class="form-control" name="email" placeholder="Entrer Adresse Mail" type="text" value="<?php echo set_value('email'); ?>" />
				<span class="text-danger"><?php echo form_error('email'); ?></span>
			</div>
			<div class="form-group">
				<label for="name">Mot de Passe</label>
				<input class="form-control" name="password" placeholder="Mot de Passe" type="password" value="<?php echo set_value('password'); ?>" />
				<span class="text-danger"><?php echo form_error('password'); ?></span>
			</div>
			<div class="form-group">
				<button name="submit" type="submit" class="btn btn-info">Connexion</button>
				<button name="cancel" type="reset" class="btn btn-info">Remise à zéro</button>
			</div>
		<?php echo form_close(); ?>
		<?php echo $this->session->flashdata('msg'); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">	
		Nouvel utilisateur? <a href="<?php echo base_url(); ?>index.php/signup">Inscrivez-vous ici</a>
		</div>
	</div>
</div>
