<ul class="sidebar-menu" data-widget="tree">
  <li class="header">MENU</li>

  <li class="<?php if ($this->uri->segment(2) == "dashboard") {
                echo "active";
              } ?> ">
    <a href="<?php echo base_url(); ?>admin/dashboard">
      <span>Dashboard</span>
    </a>
  </li>

  <li class="<?php if ($this->uri->segment(2) == "pendaftaran") {
                echo "active";
              } ?> ">
    <a href="<?php echo base_url(); ?>admin/pendaftaran">
      <span>Pendaftaran</span>
    </a>
  </li>

  <li class="<?php if ($this->uri->segment(2) == "pasien") {
                echo "active";
              } ?> ">
    <a href="<?php echo base_url(); ?>admin/pasien">
      <span>Data Pasien</span>
    </a>
  </li>

  <li class="<?php if ($this->uri->segment(2) == "jadwal") {
                echo "active";
              } ?> ">
    <a href="<?php echo base_url(); ?>admin/jadwal">
      <span>Data Jadwal</span>
    </a>
  </li>

  <li class="<?php if ($this->uri->segment(2) == "stok") {
                echo "active";
              } ?> ">
    <a href="<?php echo base_url(); ?>admin/stok">
      <span>Ketersediaan Stock Vaksin</span>
    </a>
  </li>

  <li class="treeview">
    <a href="#">
      <span>Informasi Vaksin</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="#">DPT</a></li>
      <li><a href="#">BCG</a></li>
    </ul>
  </li>

  <li class="<?php if ($this->uri->segment(2) == "lokasi") {
                echo "active";
              } ?> ">
    <a href="<?php echo base_url(); ?>admin/lokasi">
      <span>Lokasi Vaksin (Maps)</span>
    </a>
  </li>

  <li class="<?php if ($this->uri->segment(2) == "laporan") {
                echo "active";
              } ?> ">
    <a href="<?php echo base_url(); ?>admin/laporan">
      <span>Laporan</span>
    </a>
  </li>

  <li class="<?php if ($this->uri->segment(2) == "cetak") {
                echo "active";
              } ?> ">
    <a href="#">
      <span>Cetak Kartu</span>
    </a>
  </li>

  <li class="<?php if ($this->uri->segment(2) == "logout") {
                echo "active";
              } ?> ">
    <a href="<?php echo base_url(); ?>Login/logout">
      <span>Logout</span>
    </a>
  </li>

</ul>