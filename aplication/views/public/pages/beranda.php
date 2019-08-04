<?= $this->view('public/templates/navbar'); ?>
<?php $this->view('public/templates/banner', array('text' => 'Selamat datang di Kantinku')); ?>
<div class="wrapper">
	<div class="container">
		<div class="row">
			<div class="content">
				<div class="row">
					<?php foreach ($menu as $key) :  ?>
						<div class="col-4">
							<div class="box">
								<div class="menu-image">
									<img src="<?= base_url('assets/images/menu_images/'.$key['menu_image']); ?>">
								</div>
								<div class="menu-text">
									<h3><?= $key['nama']; ?></h3>
									<h1>Rp.<?= $key['harga']; ?></h1>
									<a href="<?= base_url('home/beli/'.$key['id']); ?>" class="btn-round">Beli</a>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="sidebar">
				<div class="sidebar-item">
					<div class="sidebar-header">
						<h1>Kategori</h1>
					</div>
					<div class="sidebar-body">
						<div class="list">
							<a href="<?= base_url('home/per/1'); ?>">Minuman</a>
							<a href="<?= base_url('home/per/2'); ?>">Makanan</a>
							<a href="<?= base_url('home/per/3'); ?>">Makanan Ringan</a>
							<a href="<?= base_url('home/per/4'); ?>">Gorengan</a>
							<a href="<?= base_url(); ?>">Nasi Bungkus</a>
						</div>
					</div>
				</div>
				<div class="sidebar-item">
					<div class="sidebar-header">
						<h1>Paling laris</h1>
						<div class="row">
							<?php for ($i = 1; $i < 6; $i++) : ?>				
							<div class="col-auto">
								<div class="box-sm">
									<div class="menu-image">
										<img src="<?= base_url('assets/images/menu_images/2.jpg'); ?>">
									</div>
									<div class="menu-text">
										<h3 class="text-sm">Soto Ayam</h3>
										<h1 class="text-md">Rp.3000</h1>
									</div>
								</div>
							</div>
							<?php endfor; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>