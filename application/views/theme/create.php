<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<?php $attributes = array("name" => "themeform");
			echo form_open("theme/create", $attributes);?>
			<legend>Ajouter un nouveau thème</legend>
			
			<div class="form-group">
				<label for="name">Nom</label>
				<input class="form-control" name="name" placeholder="Votre thème" type="text" value="<?php echo set_value('name'); ?>" />
				<span class="text-danger"><?php echo form_error('name'); ?></span>
			</div>
			
			<div class="form-group">
				<button name="submit" type="submit" class="btn btn-info">Ajouter</button>
				<button name="cancel" type="reset" class="btn btn-info">Annuler</button>
			</div>
			<?php echo form_close(); ?>
			<?php echo $this->session->flashdata('msg'); ?>
		</div>
	</div>
</div>
