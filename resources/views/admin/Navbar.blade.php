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
		display: none;
		position: absolute;
		background-color: #f1f1f1;
		min-width: 160px;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
	}

	.dropdown {
		position: relative;
		display: inline-block;
	}

	#home:hover .dropdown-content{
		display: block;
	}
</style>

<nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #3e64ff;">
	<div class="container">
  <!-- Brand -->
	  <a class="navbar-brand" href="#">KOPELLA</a>

	  <!-- Links -->
	  <ul class="navbar-nav dropdown">
	    <li class="item">
	      <a class="link" id="home" style="text-decoration:none;" href="#">Home</a>

		  <div class="dropdown-content">
		  	<p>Ini adalah Home</p>
		  </div>
	    </li>
		<!-- <li class="item">
	      <a class="link" href="#">Pegawai</a>
	    </li>
		<li class="item">
	      <a class="link" href="#">Barang</a>
	    </li> -->

	    <!-- Dropdown -->
	    <!-- <li class="nav-item dropdown">
	      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
	        Dropdown link
	      </a>
	      <div class="dropdown-menu">
	        <a class="dropdown-item" href="#">Link 1</a>
	        <a class="dropdown-item" href="#">Link 2</a>
	        <a class="dropdown-item" href="#">Link 3</a>
	      </div>
	    </li> -->
	  </ul>
  </div>
</nav>