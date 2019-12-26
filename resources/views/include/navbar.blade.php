<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<style type="text/css">
	.item{
		padding:1vh;
		margin-right:5vh;
	}

	.link{
		color:#f9f6f7;
	}

	.dropdown-content {
		height:0px;
		opacity:0;
		position: absolute;
		background-color: #28c3d4;
		color:white;
		min-width: 200px;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
		border-radius:5px;
		padding:1vh;
		
		top:5vh;
		left:-2vh;
		transition: all .5s ease;
	}

	.dropdown {
		position: relative;
		display: inline-block;
	}

	.dropdown:hover .dropdown-content{
		height:120px;
		opacity:1;
		transform: translateY(0);
	}

	.link:hover{
		color:#f9f6f7;
	}
</style>

<nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #248ea9;">
	<div class="container">
  <!-- Brand -->
	  <a class="navbar-brand" href="#">KOPELLA</a>

	  <!-- Links -->
	  <ul class="navbar-nav">
	    <li class="item dropdown">
	      <a class="link" id="home" style="text-decoration:none;" href="#">Home</a>
		  <div class="dropdown-content">
		  	<p>Ini adalah penjelasan isi menu Home</p>
		  </div>
	    </li>

		<li class="item dropdown">
	      <a class="link" id="home" style="text-decoration:none;" href="#">Pegawai</a>
		  <div class="dropdown-content">
		  	<p>Menu Pegawai memiliki 2 table yaitu table kasir dan admin</p>
		  </div>
	    </li>

		<li class="item dropdown">
	      <a class="link" id="home" style="text-decoration:none;" href="#">Data</a>
		  <div class="dropdown-content">
		  	<p>Data barang merupakan menu yang berisi tentang data barang serta data kategori</p>
		  </div>
	    </li>
		
	  </ul>
  </div>
</nav>