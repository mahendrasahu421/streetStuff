<header class="navigation ">
	<nav class="navbar navbar-expand-lg main-nav py-lg-3 position-absolute w-100" id="main-nav">
		<div class="container">
			<a class="navbar-brand" href="users">
				<img src="{{ asset('admin-asset/images/kitchenlogo.png') }}" />
			</a>

			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navigation"
				aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span>
			</button>

			<div class="collapse navbar-collapse" id="navigation">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="users">Home</a>
					</li>
					<li class="nav-item"><a class="nav-link" href="about">About</a></li>
					<li class="nav-item"><a class="nav-link" href="menu">Recipes</a></li>
					<li class="nav-item"><a class="nav-link" href="gallery">Gallery</a></li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">Reservation</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="reservation">Reservation</a></li>
							<li><a class="dropdown-item" href="cart">Cart</a></li>
							<li><a class="dropdown-item" href="shipping">Shipping</a></li>
							<li><a class="dropdown-item" href="payment">Payment</a></li>
							<li><a class="dropdown-item" href="confirmation">Confirmation</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">Blog</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="blog">Blog </a></li>
							<li><a class="dropdown-item" href="blog-single">Blog Single</a></li>
						</ul>
					</li>

					<li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
</header>
<!-- Header Close -->