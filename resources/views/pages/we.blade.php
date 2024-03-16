@extends('index')
@section('content')

<style>
    .section-slider {
        display: none;
    }
</style>

<div style="margin-top: 135px;"></div>
<!-- MAIN CONTENT -->
<main class="category-books-section">
    <div class="category-page container grid grid-category">
        <nav class="sidebar">
            <ul class="sidebar-menu">
                <li class="sidebar-menu-item">
                    <a href="{{url('/')}}" class="sidebar-menu-link"><ion-icon class="start-icon" name="home-sharp"></ion-icon><span>Trang chủ</span></a>
                </li>
                
                
                <li class="sidebar-menu-item">
                    <a href="#" class="sidebar-menu-link"><ion-icon class="start-icon" name="people-sharp"></ion-icon>/<ion-icon class="start-icon" name="call-sharp"></ion-icon><span>Về chúng tôi</span></a>
                </li>
            </ul>
        </nav>

        <div class="category-books">
            <h2 class="heading-secondary margin-bottom-super">
                về chúng tôi
            </h2>
            <div class="address-col">
				<p class="footer-heading">Liên hệ</p>
				<address class="contacts">
					<p class="address">Học Viện Hàng Không Việt Nam - VAA</p>
					<p>
						<a class="footer-link" href="tel:0123456789">0123456789</a><br />
						<a class="footer-link" href="zxcvvbnm@gmail.com">zxcvvbnm@gmail.com</a>
					</p>
				</address>
			</div>
        </div>
    </div>
</main>

@endsection