
		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->
				
				<ul class="nav nav-list">
					<li class="active">
						<a href="#">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Master Web </span>
						</a>

						<b class="arrow"></b>
					</li>
					<?php if($this->session->userdata('admin_level')=="User"){ ?>
					<li class="">
						<a href="#">
								
									<i class="menu-icon fa fa-caret-right"></i>
								Data Diri
								</a>
								<b class="arrow"></b>
							</li>
					<li class="">

								<a href="#">
									<i class="menu-icon fa fa-caret-right"></i>
									List Barang
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="#">
									<i class="menu-icon fa fa-caret-right"></i>
									Transaksi
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="#">
									<i class="menu-icon fa fa-caret-right"></i>
									Laporan Transaksi
								</a>
								<b class="arrow"></b>
							</li>
							<?php } ?>
					<?php if(($this->session->userdata('admin_level')=="Petugas") || 
		($this->session->userdata('admin_level')=="Admin")){ ?>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								Supplier & Pelanggan
							</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>
						<ul class="submenu">
							<li class="">
								<a href="<?php echo site_url('SupplierControl');?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Supplier
								</a>
								<b class="arrow"></b>
							</li>
								<li class="">
					<li class="">
								<a href="<?php echo site_url('PelangganControl');?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Pelanggan
								</a>
								<b class="arrow"></b>
							</li>
						
							
		
			</ul>

								<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								Barang Jual
							</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>
						<ul class="submenu">
							</li>
							<li class="">
								<a href="<?php echo site_url('GProdukControl');?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Group Produk
								</a>
								<b class="arrow"></b>
							</li>

					<li class="">
								<a href="<?php echo site_url('SGProdukControl');?>">
									<i class="menu-icon fa fa-caret-right"></i>
									SubGroup Produk
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
							<a href="<?php echo site_url('ProdukControl');?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Produk Penjualan
								</a>
								<b class="arrow"></b>
							</li>
					
							<li class="">
								<a href="<?php echo site_url('produkControl8');?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Barang Kosong
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="<?php echo site_url('HandlingFile');?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Handling File
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
						
							<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								Transaksi
							</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>
						<ul class="submenu">
						
<li class="">
							<a href="<?php echo site_url('TransaksiDetailControl');?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Transaksi
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
							<a href="<?php echo site_url('PembelianDetailControl');?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Pembelian Control
								</a>
								<b class="arrow"></b>
							</li>
						
						
					<?php } ?>		
		
			</ul><!-- /.nav-list -->
			
			<li class="">
								
						
			</div>