<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" style="font-family: Arial; font-color: navy" href=""><img src="../admin/images/LOGO_KIGSB.png" style=" width:20%; height:40px ">KELANTAN ICT GATEWAY SDN BHD</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
 
  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="?pages=profile">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Profile</span>
          </a>
        </li>
		  
		  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="peserta">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapsepeserta" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">Peserta</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapsepeserta">
            <li>
              <a href="?pages=senarai_peserta">Senarai Peserta</a>
            </li>
            <li>
              <a href="?pages=tambah_peserta">Tambah Peserta</a>
            </li>
          </ul>
        </li>
		  
		  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="kursus">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapsekursus" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-list-alt"></i>
            <span class="nav-link-text">Kursus</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapsekursus">
<!--
			  <li>
				<a href="?pages=kursus_baru">Tambah Kursus</a>
			</li>
-->
			  <?php
			  
			  $query = query("SELECT * FROM kigsb_kursuss");
    confirm($query);
			   while($row = fetch_array($query))
                        {
				    $kursus_name = $row['kursus_name'];
				   
				   
                          ?>
			  
			  <li>
              <a href="?pages=display_kursus&kursus_name=<?php echo $kursus_name ?>"><?php echo $kursus_name ?></a>
            </li>
			  
			  <?php
			   }
			  ?>
                       
          </ul>
        </li>
		  
		   <li class="nav-item" data-toggle="tooltip" data-placement="right" title="tahun">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapsetahun" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Tahun</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapsetahun">
<!--
			<li>
				<a href="?pages=tambah_tahun">Tambah Tahun</a>
			</li>  
-->
			  
			  
			   
			  <?php
			  
			  $query = query("SELECT * FROM kigsb_tahun");
    confirm($query);
			   while($row = fetch_array($query))
                        {
				    $kursus_tahun = $row['kursus_tahun'];
				   
				   
                          ?>
			  
			  <li>
              <a href="?pages=display_tahun&kursus_tahun=<?php echo $kursus_tahun ?>"><?php echo $kursus_tahun ?></a>
            </li>
			  
			  <?php
			   }
			  ?>
			 
          </ul>
        </li>
		 
		  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="parlimen">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseparlimen" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-list-alt"></i>
            <span class="nav-link-text">Parlimen</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseparlimen">
			  <li>
				<a href="?pages=parlimen&k_parlimen=Kota Bharu">Kota Bharu</a>
			</li>
			  <li>
				<a href="?pages=parlimen&k_parlimen=Pengkalan Chepa">Pengkalan Chepa</a>
			</li>
			  <li>
				<a href="?pages=parlimen&k_parlimenn=Pasir Puteh">Pasir Puteh</a>
			</li>
			  <li>
				<a href="?pages=parlimen&k_parlimen=Rantau Panjang">Rantau Panjang</a>
			</li>
			  <li>
				<a href="?pages=parlimen&k_parlimen=Pasir Mas">Pasir Mas</a>
			</li>
			  <li>
				<a href="?pages=parlimen&k_parlimen=Gua Musang">Gua Musang</a>
			</li>
			  <li>
				<a href="?pages=parlimen&k_parlimen=Tumpat">Tumpat</a>
			</li>
			  <li>
				<a href="?pages=parlimen&kk_parlimen=Bachok">Bachok</a>
			</li>
			  <li>
				<a href="?pages=parlimen&k_parlimen=Ketereh">Ketereh</a>
			</li>
			  <li>
				<a href="?pages=parlimen&k_parlimen=Machang">Machang</a>
			</li>
			  <li>
				<a href="?pages=parlimen&k_parlimen=Kuala Krai">Kuala Krai</a>
			</li>
			  <li>
				<a href="?pages=parlimen&k_parlimen=Jeli">Jeli</a>
			</li>
			  <li>
				<a href="?pages=parlimen&k_parlimen=Tanah Merah">Tanah Merah</a>
			</li>
			  <li>
				<a href="?pages=parlimen&k_parlimen=Kubang Kerian">Kubang Kerian</a>
			</li>
                       
          </ul>
        </li>
		  
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">

<!--
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
-->
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Log Keluar</a>
        </li>
      </ul>
    </div>
  </nav>