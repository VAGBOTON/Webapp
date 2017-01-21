<div class="container">
	<div class="row">
		<div class="col-md-4">
			<h4>Profile Summary</h4>
			<hr/>
			<p>Role: <?php echo $this->session->userdata('role'); ?></p>
			<p>Nom: <?php echo $this->session->userdata('name'); ?></p>
			<p>Adresse Mail: <?php echo $this->session->userdata('email'); ?></p>
			<p>...</p>
		</div>
		<div class="col-md-8">
			<p>lorem ipsum dolum</p>
			<p>lorem ipsum dolum</p>
			<p>lorem ipsum dolum</p>
			<p>...</p>
		</div>
	</div>
</div>