<?php echo $this->element('header'); ?>
<body>
	<div class="header">
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container" style="width: auto;">
					<!-- <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a> -->
					<a class="brand" href="#">MuveeMi</a>
					<!-- <div class="nav-collapse">
						<ul class="nav">
							<li><a href="#">Home</a></li>
							<li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
						</ul>
					</div> --><!-- /.nav-collapse -->
				</div>
			</div><!-- /navbar-inner -->
		</div>
	</div><!-- / header -->

	 <?php echo $this->fetch('content'); ?>
	 
	<?php echo $this->element('sql_dump'); ?>

	<div class="footer"></div><!-- / footer -->
</body>
</html>