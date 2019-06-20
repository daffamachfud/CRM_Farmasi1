<!DOCTYPE html>
<html>
<head>
	<title>Pengelolaan Data Dokter</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<script type="text/javascript" src="/js/app.js"></script>
</head>
<body class="">

<div class="cover-container d-flex h-100 p-3 mx-auto flex-column">

	<header class="masthead mb-auto">
	
	<div class="inner">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">Pengelohaan Data Dokter</a>
			<a class="nav-link active"href="/datadokter">Data Dokter</a>
			<a class="nav-link" href="/besarpotensi/home">Input Besar Potensi</a>
		</nav>
	</div>

	</header>
	</div>
	<hr/>
	<br/>
	<br/>

	<!-- bagian judul halaman blog -->
	<h3> @yield('judul_halaman') </h3>


	<!-- bagian konten blog -->
	@yield('konten')


	<br/>
	<br/>
	<hr/>
	<footer>
		<p>&copy; <a href="">FARMASI</a></p>
	</footer>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
</body>
</html>