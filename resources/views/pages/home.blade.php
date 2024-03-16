@extends('index')
@section('content')

<!-- MAIN CONTENT -->
<main>
    <div class="main-container">
        <div class="product-section container">
            <section class="top-product-section">
                <div class="tp-header margin-bottom-lg">
                    <p class="subheading">Sách truyện mới cập nhật</p>
                    <!-- <div class="tp-btn-section">
                        <button class="btn btn--full btn--all">Xem tất cả</button>
                        <button class="btn-circle btn-pre">
                            <ion-icon name="chevron-back-outline"></ion-icon>
                        </button>
                        <button class="btn-circle btn-next">
                            <ion-icon name="chevron-forward-outline"></ion-icon>
                        </button>
                    </div> -->
                </div>
                <div class="top-books grid grid-5--columns" >
                    @foreach($truyen as $key => $value)
                        <div class="top-book"  >
                            <div class="tb-img-box">
                                <a href="{{url('details-book/'.$value->slug_truyen)}}">
                                    <img class="tb-img" src="{{asset('public/public/uploads/truyen/'.$value->hinhanh)}}" alt="{{$value->tentruyen}}" />
                                </a>
                            </div>
                            <div class="tb-text-box">
                                <p class="tb-title">{{$value->tentruyen}}</p>
                                <p class="tb-author">{{$value->tacgia}}</p><br>
                            </div>
                        </div>
                    @endforeach
                </div><br>
            </section>












            <!-- PRODUCT SECTION
            <section class="products">
                <div class="bookshelf">
                    <h2 class="heading-secondary bookshelf-heading">
                        Văn học - Tiểu thuyết
                    </h2>
                    <ul class="bookshelf-list">
                        <li class="selected">
                            <a class="bs-link" href="http://localhost:8080/booksale/api/book/subcategory/1">Kinh điển</a>
                        </li>
                        <li>
                            <a class="bs-link" href="http://localhost:8080/booksale/api/book/subcategory/2">Nước ngoài</a>
                        </li>
                        <li>
                            <a class="bs-link" href="http://localhost:8080/booksale/api/book/subcategory/3">Việt Nam</a>
                        </li>
                    </ul>
                    <div class="bookshelf-container">
                        <div class="books-container grid grid-5--columns margin-bottom-lg">
                            <div class="bs-img-box" role="img" aria-label="Ảnh bìa tiểu thuyết"></div>
                            <div class="book-card">
                                <span class="discount-tag">-30%</span>
                                <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                                <div class="card-body">
                                    <h3 class="card-title">Cây cam ngọt của tôi</h3>
                                    <div class="rating" class="card-rating">
                                        <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                                    </div>
                                    <div class="card-prices">
                                        <span class="card-discount">76.000đ</span>
                                        <span class="card-price">100.000đ</span>
                                    </div>
                                    <a href="#" class="card-link">mua sách &rarr;</a>
                                </div>
                            </div>

                            <div class="book-card">
                                <span class="discount-tag">-30%</span>
                                <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                                <div class="card-body">
                                    <h3 class="card-title">Cây cam ngọt của tôi</h3>
                                    <div class="rating" class="card-rating">
                                        <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                                    </div>
                                    <div class="card-prices">
                                        <span class="card-discount">76.000đ</span>
                                        <span class="card-price">100.000đ</span>
                                    </div>
                                    <a href="#" class="card-link">mua sách &rarr;</a>
                                </div>
                            </div>

                            <div class="book-card">
                                <span class="discount-tag">-30%</span>
                                <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                                <div class="card-body">
                                    <h3 class="card-title">Cây cam ngọt của tôi</h3>
                                    <div class="rating" class="card-rating">
                                        <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                                    </div>
                                    <div class="card-prices">
                                        <span class="card-discount">76.000đ</span>
                                        <span class="card-price">100.000đ</span>
                                    </div>
                                    <a href="#" class="card-link">mua sách &rarr;</a>
                                </div>
                            </div>
                            <div class="book-card">
                                <span class="discount-tag">-30%</span>
                                <img src="{{asset('public/frontend/imgs/top-books/book2.jpeg')}}" alt="Book Cover" class="card-img" />
                                <div class="card-body">
                                    <h3 class="card-title">Cây cam ngọt của tôi</h3>
                                    <div class="rating" class="card-rating">
                                        <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                                    </div>
                                    <div class="card-prices">
                                        <span class="card-discount">76.000đ</span>
                                        <span class="card-price">100.000đ</span>
                                    </div>
                                    <a href="#" class="card-link">mua sách &rarr;</a>
                                </div>
                            </div>
                            <div class="book-card">
                                <span class="discount-tag">-30%</span>
                                <img src="{{asset('public/frontend/imgs/top-books/book3.jpeg')}}" alt="Book Cover" class="card-img" />
                                <div class="card-body">
                                    <h3 class="card-title">Cây cam ngọt của tôi</h3>
                                    <div class="rating" class="card-rating">
                                        <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                                    </div>
                                    <div class="card-prices">
                                        <span class="card-discount">76.000đ</span>
                                        <span class="card-price">100.000đ</span>
                                    </div>
                                    <a href="#" class="card-link">mua sách &rarr;</a>
                                </div>
                            </div>
                        </div>
                        <div class="btn-all__container">
                            <button class="btn btn--full btn-bs-all">Xem tất cả</button>
                        </div>
                    </div>
                </div>
            </section>

            <section class="products">
                <div class="bookshelf">
                    <h2 class="heading-secondary bookshelf-heading">
                        Văn học - Tiểu thuyết
                    </h2>
                    <ul class="bookshelf-list">
                        <li class="selected">
                            <a class="bs-link" href="http://localhost:8080/booksale/api/book/subcategory/1">Kinh điển</a>
                        </li>
                        <li>
                            <a class="bs-link" href="http://localhost:8080/booksale/api/book/subcategory/2">Nước ngoài</a>
                        </li>
                        <li>
                            <a class="bs-link" href="http://localhost:8080/booksale/api/book/subcategory/3">Việt Nam</a>
                        </li>
                    </ul>
                    <div class="bookshelf-container">
                        <div class="books-container grid grid-5--columns margin-bottom-lg">
                            <div class="bs-img-box" role="img" aria-label="Ảnh bìa tiểu thuyết"></div>
                            <div class="book-card">
                                <span class="discount-tag">-30%</span>
                                <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                                <div class="card-body">
                                    <h3 class="card-title">Cây cam ngọt của tôi</h3>
                                    <div class="rating" class="card-rating">
                                        <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                                    </div>
                                    <div class="card-prices">
                                        <span class="card-discount">76.000đ</span>
                                        <span class="card-price">100.000đ</span>
                                    </div>
                                    <a href="#" class="card-link">mua sách &rarr;</a>
                                </div>
                            </div>

                            <div class="book-card">
                                <span class="discount-tag">-30%</span>
                                <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                                <div class="card-body">
                                    <h3 class="card-title">Cây cam ngọt của tôi</h3>
                                    <div class="rating" class="card-rating">
                                        <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                                    </div>
                                    <div class="card-prices">
                                        <span class="card-discount">76.000đ</span>
                                        <span class="card-price">100.000đ</span>
                                    </div>
                                    <a href="#" class="card-link">mua sách &rarr;</a>
                                </div>
                            </div>

                            <div class="book-card">
                                <span class="discount-tag">-30%</span>
                                <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                                <div class="card-body">
                                    <h3 class="card-title">Cây cam ngọt của tôi</h3>
                                    <div class="rating" class="card-rating">
                                        <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                                    </div>
                                    <div class="card-prices">
                                        <span class="card-discount">76.000đ</span>
                                        <span class="card-price">100.000đ</span>
                                    </div>
                                    <a href="#" class="card-link">mua sách &rarr;</a>
                                </div>
                            </div>
                            <div class="book-card">
                                <span class="discount-tag">-30%</span>
                                <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                                <div class="card-body">
                                    <h3 class="card-title">Cây cam ngọt của tôi</h3>
                                    <div class="rating" class="card-rating">
                                        <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                                    </div>
                                    <div class="card-prices">
                                        <span class="card-discount">76.000đ</span>
                                        <span class="card-price">100.000đ</span>
                                    </div>
                                    <a href="#" class="card-link">mua sách &rarr;</a>
                                </div>
                            </div>
                            <div class="book-card">
                                <span class="discount-tag">-30%</span>
                                <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                                <div class="card-body">
                                    <h3 class="card-title">Cây cam ngọt của tôi</h3>
                                    <div class="rating" class="card-rating">
                                        <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                                    </div>
                                    <div class="card-prices">
                                        <span class="card-discount">76.000đ</span>
                                        <span class="card-price">100.000đ</span>
                                    </div>
                                    <a href="#" class="card-link">mua sách &rarr;</a>
                                </div>
                            </div>
                        </div>
                        <div class="btn-all__container">
                            <button class="btn btn--full btn-bs-all">Xem tất cả</button>
                        </div>
                    </div>
                </div>
            </section>

            <section class="products">
                <div class="bookshelf">
                    <h2 class="heading-secondary bookshelf-heading">
                        Văn học - Tiểu thuyết
                    </h2>
                    <ul class="bookshelf-list">
                        <li class="selected">
                            <a class="bs-link" href="http://localhost:8080/booksale/api/book/subcategory/1">Kinh điển</a>
                        </li>
                        <li>
                            <a class="bs-link" href="http://localhost:8080/booksale/api/book/subcategory/2">Nước ngoài</a>
                        </li>
                        <li>
                            <a class="bs-link" href="http://localhost:8080/booksale/api/book/subcategory/3">Việt Nam</a>
                        </li>
                    </ul>
                    <div class="bookshelf-container">
                        <div class="books-container grid grid-5--columns margin-bottom-lg">
                            <div class="bs-img-box" role="img" aria-label="Ảnh bìa tiểu thuyết"></div>
                            <div class="book-card">
                                <span class="discount-tag">-30%</span>
                                <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                                <div class="card-body">
                                    <h3 class="card-title">Cây cam ngọt của tôi</h3>
                                    <div class="rating" class="card-rating">
                                        <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                                    </div>
                                    <div class="card-prices">
                                        <span class="card-discount">76.000đ</span>
                                        <span class="card-price">100.000đ</span>
                                    </div>
                                    <a href="#" class="card-link">mua sách &rarr;</a>
                                </div>
                            </div>

                            <div class="book-card">
                                <span class="discount-tag">-30%</span>
                                <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                                <div class="card-body">
                                    <h3 class="card-title">Cây cam ngọt của tôi</h3>
                                    <div class="rating" class="card-rating">
                                        <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                                    </div>
                                    <div class="card-prices">
                                        <span class="card-discount">76.000đ</span>
                                        <span class="card-price">100.000đ</span>
                                    </div>
                                    <a href="#" class="card-link">mua sách &rarr;</a>
                                </div>
                            </div>

                            <div class="book-card">
                                <span class="discount-tag">-30%</span>
                                <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                                <div class="card-body">
                                    <h3 class="card-title">Cây cam ngọt của tôi</h3>
                                    <div class="rating" class="card-rating">
                                        <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                                    </div>
                                    <div class="card-prices">
                                        <span class="card-discount">76.000đ</span>
                                        <span class="card-price">100.000đ</span>
                                    </div>
                                    <a href="#" class="card-link">mua sách &rarr;</a>
                                </div>
                            </div>
                            <div class="book-card">
                                <span class="discount-tag">-30%</span>
                                <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                                <div class="card-body">
                                    <h3 class="card-title">Cây cam ngọt của tôi</h3>
                                    <div class="rating" class="card-rating">
                                        <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                                    </div>
                                    <div class="card-prices">
                                        <span class="card-discount">76.000đ</span>
                                        <span class="card-price">100.000đ</span>
                                    </div>
                                    <a href="#" class="card-link">mua sách &rarr;</a>
                                </div>
                            </div>
                            <div class="book-card">
                                <span class="discount-tag">-30%</span>
                                <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book Cover" class="card-img" />
                                <div class="card-body">
                                    <h3 class="card-title">Cây cam ngọt của tôi</h3>
                                    <div class="rating" class="card-rating">
                                        <span class="rating-number">4.8</span><span><ion-icon name="star"></ion-icon></span><span class="rating-text">Đã bán 200</span>
                                    </div>
                                    <div class="card-prices">
                                        <span class="card-discount">76.000đ</span>
                                        <span class="card-price">100.000đ</span>
                                    </div>
                                    <a href="#" class="card-link">mua sách &rarr;</a>
                                </div>
                            </div>
                        </div>
                        <div class="btn-all__container">
                            <button class="btn btn--full btn-bs-all">Xem tất cả</button>
                        </div>
                    </div>
                </div>
            </section> -->
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