<?php ?><!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>WebApp</title>
		<link href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" rel="stylesheet">
	</head>
	<body>
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo base_url(); ?>index.php/home">WebApp</a>
				</div>
				<div class="collapse navbar-collapse" id="navbar1">
					<ul class="nav navbar-nav navbar-right">
						<?php if ($this->session->userdata('login')){ ?>
						<li><a href="<?php echo base_url(); ?>index.php/profile">Bonjour <?php echo $this->session->userdata('name') ?></a></li>
						<?php if ($this->session->userdata('role') == 2){ ?>
						<li><a href="<?php echo base_url(); ?>index.php/theme">Thèmes</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/question">Questions</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/qcm">QCM</a></li>
						<?php } ?>
						<li><a href="<?php echo base_url(); ?>index.php/home/logout">Se déconnecter</a></li>
						<?php } else { ?>
						<li><a href="<?php echo base_url(); ?>index.php/login">Se connecter</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/signup">S'inscrire</a></li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</nav>
		