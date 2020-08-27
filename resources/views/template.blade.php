<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"content="IE=edge">
	<title>@yield('title_halaman')</title>
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/profil.css">
    <link rel="stylesheet" type="text/css" href="css/kontak.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<header>
		<nav class>
			<div class="main">
				<ul>
					<li><a href="/home">Home</a></li>
					<li><a href="/profil">Profil</a></li>
					<li><a href="/kontak">Contact</a></li>
					
				</ul>
			</div>
		</nav>
       
            
	</header>


<!-- isi konten -->
@yield('isi')


<footer>
	<div class="bottom section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="copyright">
							<p>© <span>2020</span> <a href="#" class="transition">WebDesain</a> All rights reserved.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
</footer>
</body>
</html>