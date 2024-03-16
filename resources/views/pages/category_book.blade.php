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
                
                <!-- fix part -->
                
                <li class="sidebar-menu-item">
                    <a href="{{URL('/we')}}" class="sidebar-menu-link"><ion-icon class="start-icon" name="people-sharp"></ion-icon>/<ion-icon class="start-icon" name="call-sharp"></ion-icon><span>Về chúng tôi</span></a>
                </li>
            </ul>
        </nav>

        <div class="category-books">
            <h2 class="heading-secondary margin-bottom-super">
                Sản phẩm
            </h2>
            <div class="books grid grid-4--columns">
                <div class="book-card">
                    <a href="book-detail.html" class="book-link">
                        <span class="discount-tag">-30%</span>
                        <div class="img-container">
                            <a href="{{URL::to('/details-book')}}">
                                <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                            </a>
                        </div>
                        <div class="card-body">
                            <p class="card-title">Cây cam ngọt của tôi</p>
                            <div class="rating" class="card-rating">
                                <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                            </div>
                            <div class="card-prices">
                                <span class="card-discount">76.000đ</span>
                                <span class="card-price">100.000đ</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="book-card">
                    <a href="book-detail.html" class="book-link">
                        <span class="discount-tag">-30%</span>
                        <div class="img-container">
                            <img src="{{asset('public/frontend/imgs/top-books/book4.jpeg')}}" alt="Book Cover" class="card-img" />
                        </div>
                        <div class="card-body">
                            <p class="card-title">
                                Đắc nhân tâm sĩ diện hảo cây cam ngọt của tôi
                            </p>
                            <div class="rating" class="card-rating">
                                <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                            </div>
                            <div class="card-prices">
                                <span class="card-discount">76.000đ</span>
                                <span class="card-price">100.000đ</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="book-card">
                    <a href="book-detail.html" class="book-link">
                        <span class="discount-tag">-30%</span>
                        <div class="img-container">
                            <img src="{{asset('public/public/uploads/truyen/ld.jpg')}}" alt="Book Cover" class="card-img" />
                        </div>
                        <div class="card-body">
                            <p class="card-title">
                                Làm Đĩ
                            </p>
                            <div class="rating" class="card-rating">
                                <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                            </div>
                            <div class="card-prices">
                                <span class="card-discount">76.000đ</span>
                                <span class="card-price">100.000đ</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="book-card">
                    <a href="book-detail.html" class="book-link">
                        <span class="discount-tag">-30%</span>
                        <div class="img-container">
                            <img src="{{asset('public/public/uploads/truyen/lh.jpg')}}" alt="Book Cover" class="card-img" />
                        </div>
                        <div class="card-body">
                            <p class="card-title">
                                Lão Hạc
                            </p>
                            <div class="rating" class="card-rating">
                                <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                            </div>
                            <div class="card-prices">
                                <span class="card-discount">76.000đ</span>
                                <span class="card-price">100.000đ</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="book-card">
                    <a href="book-detail.html" class="book-link">
                        <span class="discount-tag">-30%</span>
                        <div class="img-container">
                            <img src="{{asset('public/public/uploads/truyen/cp.jpg')}}" alt="Book Cover" class="card-img" />
                        </div>
                        <div class="card-body">
                            <p class="card-title">
                                Chí Phèo
                            </p>
                            <div class="rating" class="card-rating">
                                <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                            </div>
                            <div class="card-prices">
                                <span class="card-discount">76.000đ</span>
                                <span class="card-price">100.000đ</span>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="book-card">
                    <a href="book-detail.html" class="book-link">
                        <span class="discount-tag">-30%</span>
                        <div class="img-container">
                            <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                        </div>
                        <div class="card-body">
                            <p class="card-title">Cây cam ngọt của tôi</p>
                            <div class="rating" class="card-rating">
                                <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                            </div>
                            <div class="card-prices">
                                <span class="card-discount">76.000đ</span>
                                <span class="card-price">100.000đ</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="book-card">
                    <a href="book-detail.html" class="book-link">
                        <span class="discount-tag">-30%</span>
                        <div class="img-container">
                            <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                        </div>
                        <div class="card-body">
                            <p class="card-title">Cây cam ngọt của tôi</p>
                            <div class="rating" class="card-rating">
                                <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                            </div>
                            <div class="card-prices">
                                <span class="card-discount">76.000đ</span>
                                <span class="card-price">100.000đ</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="book-card">
                    <a href="book-detail.html" class="book-link">
                        <span class="discount-tag">-30%</span>
                        <div class="img-container">
                            <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                        </div>
                        <div class="card-body">
                            <p class="card-title">Cây cam ngọt của tôi</p>
                            <div class="rating" class="card-rating">
                                <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                            </div>
                            <div class="card-prices">
                                <span class="card-discount">76.000đ</span>
                                <span class="card-price">100.000đ</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="book-card">
                    <a href="book-detail.html" class="book-link">
                        <span class="discount-tag">-30%</span>
                        <div class="img-container">
                            <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                        </div>
                        <div class="card-body">
                            <p class="card-title">Cây cam ngọt của tôi</p>
                            <div class="rating" class="card-rating">
                                <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                            </div>
                            <div class="card-prices">
                                <span class="card-discount">76.000đ</span>
                                <span class="card-price">100.000đ</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="book-card">
                    <a href="book-detail.html" class="book-link">
                        <span class="discount-tag">-30%</span>
                        <div class="img-container">
                            <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                        </div>
                        <div class="card-body">
                            <p class="card-title">Cây cam ngọt của tôi</p>
                            <div class="rating" class="card-rating">
                                <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                            </div>
                            <div class="card-prices">
                                <span class="card-discount">76.000đ</span>
                                <span class="card-price">100.000đ</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="book-card">
                    <a href="book-detail.html" class="book-link">
                        <span class="discount-tag">-30%</span>
                        <div class="img-container">
                            <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                        </div>
                        <div class="card-body">
                            <p class="card-title">Cây cam ngọt của tôi</p>
                            <div class="rating" class="card-rating">
                                <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                            </div>
                            <div class="card-prices">
                                <span class="card-discount">76.000đ</span>
                                <span class="card-price">100.000đ</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="book-card">
                    <a href="book-detail.html" class="book-link">
                        <span class="discount-tag">-30%</span>
                        <div class="img-container">
                            <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                        </div>
                        <div class="card-body">
                            <p class="card-title">Cây cam ngọt của tôi</p>
                            <div class="rating" class="card-rating">
                                <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                            </div>
                            <div class="card-prices">
                                <span class="card-discount">76.000đ</span>
                                <span class="card-price">100.000đ</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="book-card">
                    <a href="book-detail.html" class="book-link">
                        <span class="discount-tag">-30%</span>
                        <div class="img-container">
                            <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                        </div>
                        <div class="card-body">
                            <p class="card-title">Cây cam ngọt của tôi</p>
                            <div class="rating" class="card-rating">
                                <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                            </div>
                            <div class="card-prices">
                                <span class="card-discount">76.000đ</span>
                                <span class="card-price">100.000đ</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="book-card">
                    <a href="book-detail.html" class="book-link">
                        <span class="discount-tag">-30%</span>
                        <div class="img-container">
                            <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                        </div>
                        <div class="card-body">
                            <p class="card-title">Cây cam ngọt của tôi</p>
                            <div class="rating" class="card-rating">
                                <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                            </div>
                            <div class="card-prices">
                                <span class="card-discount">76.000đ</span>
                                <span class="card-price">100.000đ</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="book-card">
                    <a href="book-detail.html" class="book-link">
                        <span class="discount-tag">-30%</span>
                        <div class="img-container">
                            <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                        </div>
                        <div class="card-body">
                            <p class="card-title">Cây cam ngọt của tôi</p>
                            <div class="rating" class="card-rating">
                                <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                            </div>
                            <div class="card-prices">
                                <span class="card-discount">76.000đ</span>
                                <span class="card-price">100.000đ</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="book-card">
                    <a href="book-detail.html" class="book-link">
                        <span class="discount-tag">-30%</span>
                        <div class="img-container">
                            <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                        </div>
                        <div class="card-body">
                            <p class="card-title">Cây cam ngọt của tôi</p>
                            <div class="rating" class="card-rating">
                                <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                            </div>
                            <div class="card-prices">
                                <span class="card-discount">76.000đ</span>
                                <span class="card-price">100.000đ</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="book-card">
                    <a href="book-detail.html" class="book-link">
                        <span class="discount-tag">-30%</span>
                        <div class="img-container">
                            <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                        </div>
                        <div class="card-body">
                            <p class="card-title">Cây cam ngọt của tôi</p>
                            <div class="rating" class="card-rating">
                                <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                            </div>
                            <div class="card-prices">
                                <span class="card-discount">76.000đ</span>
                                <span class="card-price">100.000đ</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="pagination">
                <button class="pagination-btn prev" path="tieu-thuyet">
                    <ion-icon  name="chevron-back-outline"></ion-icon>
                </button>

                <ul class="pages">
                    <!-- <li href="" class="pagination-btn active">1</li>
                    <li href="" class="pagination-btn">2</li>
                    <li href="" class="pagination-btn">3</li>
                    <li href="" class="pagination-btn">4</li>
                    <li class="pagination-btn">...</li> -->
                </ul>

                <button class="pagination-btn next" path="tieu-thuyet">
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                </button>
            </div>
        </div>
    </div>
</main>

@endsection