<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <!-- <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div> -->
        <div class="sidebar-brand-text mx-3">SI Akuntansi</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>Sistem">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Beranda</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>Sistem/tambahTransaksi">
          <i class="fas fa-fw fa fa-list"></i>
          <span>Tambah Transaksi</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>Sistem/jurnalUmum">
          <i class="fas fa-fw fa fa-columns"></i>
          <span>Jurnal Umum</span></a>
	  </li>
	  
	  <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>Sistem/bukuBesar">
          <i class="fas fa-fw fa fa-book"></i>
          <span>Buku Besar</span></a>
	  </li>
	  
	  <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>Sistem/neracaSaldo">
          <i class="fas fa-fw fa-table"></i>
          <span>Neraca Saldo</span></a>
	  </li>
	  
	  <!-- <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>Sistem/laporanKeuangan">
          <i class="fas fa-fw fa-calculator"></i>
          <span>Laporan Keuangan</span></a>
		</li> -->
		
		<li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-calculator"></i>
          <span>Laporan Keuangan</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url(); ?>Sistem/laporanLabaRugi">Laporan Laba Rugi</a>
						<a class="collapse-item" href="<?php echo base_url(); ?>Sistem/laporanPerubahanModal">Laporan Perubahan Modal</a>
						<a class="collapse-item" href="<?php echo base_url(); ?>Sistem/laporanNeraca">Neraca</a>
          </div>
        </div>
    </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
</ul>
