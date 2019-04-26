<header class="header_sticky">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-6">
				<div id="logo_home">
					<h1><a href="./index" title="<?php echo $title; ?>"><?php echo $navbar; ?></a></h1>
				</div>
			</div>
			<nav class="col-lg-9 col-6">
				<a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="#0"><span>Menu mobile</span></a>
				<!-- <ul id="top_access">
					<li><a href="./login"><i class="pe-7s-user"></i></a></li>
					<li><a href="./register"><i class="pe-7s-add-user"></i></a></li>
				</ul> -->
				<div class="main-menu">
					<ul>
						<li><a href="./index">Beranda</a></li>
						<li class="submenu">
							<a href="#0" class="show-submenu">Daftar Instalasi<i class="icon-down-open-mini"></i></a>
							<ul>
								<li><a href="./register?action=rawat-jalan">Rawat Jalan</a></li>
								<li><a href="./register?action=rawat-inap">Rawat Inap</a></li>
								<li><a href="./register?action=rawat-darurat">Rawat Darurat</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#0" class="show-submenu">Lihat Data<i class="icon-down-open-mini"></i></a>
							<ul>
								<li><a href="./view?name=rawat-jalan">Rawat Jalan</a></li>
								<li><a href="./view?name=rawat-inap">Rawat Inap</a></li>
								<li><a href="./view?name=rawat-darurat">Rawat Darurat</a></li>
							</ul>
						</li>
						<!-- <li><a href="./about">About</a></li>
						<li><a href="./contact">Contact</a></li> -->
					</ul>
				</div>
				<!-- /main-menu -->
			</nav>
		</div>
	</div>
	<!-- /container -->
</header>
<!-- /header -->