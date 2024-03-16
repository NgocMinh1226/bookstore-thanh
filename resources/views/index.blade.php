<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="preconnect" href="{{asset('https://fonts.googleapis.com')}}" />
	<link rel="preconnect" href="{{asset('https://fonts.gstatic.com')}}" crossorigin />
	<link href="{{asset('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,800;1,300;1,400;1,500;1,600&display=swap')}}" rel="stylesheet" />

	<link rel="stylesheet" href="{{asset('public/frontend/css/general.css')}}" />
	<link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}" />
	<link rel="stylesheet" href="{{asset('public/frontend/css/query.css')}}" />
	<link rel="stylesheet" href="{{asset('public/frontend/css/book.css')}}" />
    <link rel="stylesheet" href="{{asset('public/frontend/css/detail.css')}}" />
	<link rel="stylesheet" href="{{asset('public/frontend/css/cart.css')}}" />
    <link rel="stylesheet" href="{{asset('public/frontend/css/authentication.css')}}" />
    <link rel="stylesheet" href="{{asset('public/frontend/css/user-form.css')}}" />
    <link href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css')}}" rel="stylesheet">

	<script type="module" defer src="{{asset('public/frontend/scripts/index.js')}}"></script>
	<title>THE BOX</title>
</head>

<body>

@if(session('status'))
<script>
  // Sử dụng JavaScript để hiển thị cửa sổ thông báo
  alert("{{ session('status') }}");
</script>
@endif

	<!-- HEADER -->
	<header>
		<section class="header margin-bottom-sm">
			<div class="search-bar grid header-grid">
				<button class="btn-mobile-nav">
					<ion-icon class="icon-mobile-nav" name="menu-outline"></ion-icon>
					<ion-icon class="icon-mobile-nav" name="close-outline"></ion-icon>
				</button>

				<div class="header-left">
					<img  src="{{asset('public/public/uploads/truyen/5557.png')}}" alt="Logo shopbansach" width="50" height="50" >
					<a href="{{URL::to('/')}}" class="logo"><span class="header-logo">THE BOX</span></a>
				</div>

				<form action="{{url('tim-kiem')}}" method="GET" class="search-form">
					<label for="search-input" class="search-icon"><ion-icon name="search"></ion-icon></label>
					<input type="text" id="keywords" name="tukhoa" class="margin-right-sm" placeholder="Tìm kiếm sách..." />
					<button class="btn btn--full btn--search">search</button>
					<button class="btn-close-search">
						<ion-icon name="close-outline" class="icon-close-form"></ion-icon>
					</button>
				</form>

				<nav class="main-nav">
					<button class="btn-search-mobile">
						<ion-icon name="search" class="search-icon"></ion-icon>
					</button>
					<ul class="main-nav-list">
						<li class="main-nav-item">
							<a href="{{URL::to('/cart')}}" class="cart header-link"><ion-icon class="cart-icon" name="cart-sharp"></ion-icon></a>
							<span class="cart-quantity">0</span>
						</li>


						@if(session('customer_name'))


						<li class="main-nav-item">
							<a href="{{URL::to('/user')}}" class="header-link">{{ session('customer_name') }}</a>
						</li>

						<li class="main-nav-item">
							<a href="{{URL::to('/dangxuat')}}" class="header-link">
								
							<i class="fas fa-sign-out-alt"></i>
							</a>
						</li>
						
                        @else

						<li class="main-nav-item">
							<a href="{{URL::to('/dangnhap')}}" class="header-link">Đăng nhập</a>
						</li>

                        @endif



						<li class="main-nav-item dropdown hide">
							<a class="user header-link dropdown-toggle" href="#"><img class="profile-img" src="{{asset('public/frontend/imgs/user.png')}}" alt="User's profile photo" /></a>
							<ul class="user-list dropdown-menu">
								<li>
									<a class="user-list__link" href="{{URL::to('/user-profile')}}">Thông tin cá nhân</a>
								</li>
								<li><a class="user-list__link" href="#">Đổi mật khẩu</a></li>
								<li><a class="user-list__link" href="#">Đăng xuất</a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>

			<nav class="navigation">
				<div class="container">
					<ul class="nav-list">
						<li class="dropdown">
							<a href="" class="nav-link dropdown-toggle">Danh mục</a>
							<ul style="height: 500px" class="category-dropdown dropdown-menu">
								@foreach($danhmuc as $key => $danh)
									<li><a class="danhmuccc" href="{{URL('danh-muc/'.$danh->slug_danhmuc)}}" >{{$danh->tendanhmuc}}</a></li>
								@endforeach
								<style>
									.danhmuccc {
									font-size: 1.5rem;
									}
								</style>
							</ul>
						</li>
						<li><a href="{{URL::to('/category-book')}}" class="nav-link">Tiểu Thuyết</a></li>
						<li><a href="{{URL::to('/category-book')}}" class="nav-link">Sách bán chạy</a></li>
						<li><a href="{{URL::to('/category-book')}}" class="nav-link">Sản phẩm nổi bật</a></li>
						
					</ul>
				</div>
			</nav>
		</section>

		<section class="section-slider container">
			<div class="slider-container">
				<div class="slider">
					<div class="slide">
						<img class="slider-img" src="{{asset('public/frontend/imgs/slider/banner0.png')}}" alt="New books" />
					</div>

					<div class="slide">
						<img class="slider-img" src="{{asset('public/frontend/imgs/slider/banner1.jpeg')}}" alt="non-fiction" />
					</div>

					<div class="slide">
						<img class="slider-img" src="{{asset('public/frontend/imgs/slider/banner2.jpeg')}}" alt="Best seller" />
					</div>
				</div>

				<button class="btn-circle btn-left">
					<ion-icon name="chevron-back-outline"></ion-icon>
				</button>
				<button class="btn-circle btn-right">
					<ion-icon name="chevron-forward-outline"></ion-icon>
				</button>
				<div class="dots"></div>
			</div>
		</section>


	</header>

    @yield('content')

	<!-- FOOTER -->
	<footer class="footer">
		<div class="container grid grid--footer">
			<div class="logo-col">
				<a href="{{URL::to('/')}}" class="footer-logo"> THE BOX </a>

				<ul class="social-links">
					<li>
						<a class="footer-link" href="#"><ion-icon class="social-icon" name="logo-instagram"></ion-icon></a>
					</li>
					<li>
						<a class="footer-link" href="#"><ion-icon class="social-icon" name="logo-facebook"></ion-icon></a>
					</li>
					<li>
						<a class="footer-link" href="#"><ion-icon class="social-icon" name="logo-twitter"></ion-icon></a>
					</li>
				</ul>

				<p class="copyright">
					Copyright &copy; 2027 by BookSale, Inc. All rights reserved.
				</p>
			</div>
			<div class="address-col">
				<p class="footer-heading">Liên hệ</p>
				<address class="contacts">
					<p class="address">Học Viện Hàng Không Việt Nam - VAA</p>
					<p>
						<a class="footer-link" href="tel:0383314133">0123456789</a><br />
						<a class="footer-link" href="dtb742002@gmail.com">zxcvvbnm@gmail.com</a>
					</p>
				</address>
			</div>
			<nav class="nav-col">
				<p class="footer-heading">Tài khoản</p>
				<ul class="footer-nav">
					<li><a class="footer-link" href="{{url('/dangnhap')}}">Tạo tài khoản</a></li>
					<li><a class="footer-link" href="{{url('/dangky')}}">Đăng ký</a></li>
					<li><a class="footer-link" href="{{url('/user')}}">Cá nhân</a></li>
				</ul>
			</nav>

			<nav class="nav-col">
				<p class="footer-heading">Công ty</p>
				<ul class="footer-nav">
					<li><a class="footer-link" href="{{URL('/we')}}">Về chúng tôi</a></li>
				</ul>
			</nav>
		</div>
	</footer>

	<script type="module" src="{{asset('https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js')}}"></script>
	<script nomodule src="{{asset('https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js')}}"></script>
	<script defer src="{{asset('public/frontend/scripts/detail.js')}}"></script>
	<script defer src="{{asset('public/frontend/scripts/index.js')}}"></script>
  <script defer src="{{asset('public/frontend/scripts/user.js')}}"></script>
  <script defer src="{{asset('public/frontend/scripts/cart.js')}}"></script>
  

</body>

</html>