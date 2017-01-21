<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<?php $attributes = array("name" => "signupform");
			echo form_open("signup", $attributes);?>
			<legend>Inscription</legend>
			
			<div class="form-group">
				<label for="name">Nom</label>
				<input class="form-control" name="name" placeholder="Votre Nom" type="text" value="<?php echo set_value('name'); ?>" />
				<span class="text-danger"><?php echo form_error('name'); ?></span>
			</div>
			
			<div class="form-group">
				<label for="select">Role</label><br />
				<select class="selectpicker show-tick form-control" name="role">
					<option value="1" <?php echo  set_select('role', '1', TRUE); ?> >Etudiant</option>
					<option value="2" <?php echo  set_select('role', '2'); ?> >Enseignant</option>
				</select>
			</div>
		
			<div class="form-group">
				<label for="email">Adresse Mail</label>
				<input class="form-control" name="email" placeholder="Votre Adresse Mail" type="text" value="<?php echo set_value('email'); ?>" />
				<span class="text-danger"><?php echo form_error('email'); ?></span>
			</div>

			<div class="form-group">
				<label for="subject">Mot de Passe</label>
				<input class="form-control" name="password" placeholder="Votre Mot de Passe" type="password" />
				<span class="text-danger"><?php echo form_error('password'); ?></span>
			</div>

			<div class="form-group">
				<label for="subject">Confirmation Mot de Passe</label>
				<input class="form-control" name="cpassword" placeholder="Confirmer votre Mot de Passe" type="password" />
				<span class="text-danger"><?php echo form_error('cpassword'); ?></span>
			</div>

			<div class="form-group">
				<button name="submit" type="submit" class="btn btn-info">Signup</button>
				<button name="cancel" type="reset" class="btn btn-info">Cancel</button>
			</div>
			<?php echo form_close(); ?>
			<?php echo $this->session->flashdata('msg'); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">	
		Déjà inscrit? <a href="<?php echo base_url(); ?>index.php/login">Connectez-vous ici</a>
		</div>
	</div>
</div>
