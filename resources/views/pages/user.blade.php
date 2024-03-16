@extends('index')
@section('content')

<style>
    .section-slider {
        display: none;
    }
</style>
<div style="margin-top: 160px;"></div>

<main class="user-info-container">
    <h2 class="heading-secondary">Thông tin cá nhân </h2>
    <form action="#" method="HEAD" class="address-form">
        <div class="form-sections">
            <div class="form-group">
                <div class="form-control">
                    <label for="fullName">Tên hiển thị</label><br>
                    <p class="footer-heading">Lê Nguyên Thành</p>
                </div>

                <div class="form-control">
                    <label for="email">Email</label><br>
                    <p class="footer-heading">123456@gmail.com</p>
                </div>

                <div class="form-control">
                    <label for="phone">Số điện thoại</label><br>
                    <p class="footer-heading">0521654545</p>
                </div>
            </div>

            <div class="address-group">
                <div class="form-control">
                    <label for="province">Tỉnh / Thành phố</label><br>
                    <p class="footer-heading">Thành phố Hồ Chí Minh</p>
                </div>

                <div class="form-control">
                    <label for="district">Quận / Huyện</label><br>
                    <p class="footer-heading">Quận Tân Bình</p>
                </div>

                <div class="form-control">
                    <label for="city">Phường / Xã</label><br>
                    <p class="footer-heading">Phường 13</p>
                </div>

                <div class="form-control">
                    <label for="description">Thêm mô tả</label>
                    <p class="footer-heading">Mô tả...</p>
                </div>
            </div>
        </div>
        <div class="form-control">
            <label for="description">Bạn muốn cập nhật thông tin?</label>
            <a href="{{url('/user-profile')}}" class="bt">Đi thôi!!!</a>
        </div>
            <style>
                .bt {
                font-size: 1.8rem;
                font-weight: 500;
                margin-bottom: 3.2rem;
                display: inline-block;
                padding: 10px 20px;
                
                color: #fff;
                text-decoration: none;
                border-radius: 5px;
                transition: background-color 0.3s ease;
            }

            .bt:hover {
                background-color: #0056b3;
            }

            </style>
    </form>
  </main>

@endsection