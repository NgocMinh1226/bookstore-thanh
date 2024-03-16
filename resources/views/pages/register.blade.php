@extends('index')
@section('content')

<style>
  .section-slider {
    display: none;
  }
</style>

@if(session('status'))
<script>
  // Sử dụng JavaScript để hiển thị cửa sổ thông báo
  alert("{{ session('status') }}");
</script>
@endif

<div style="margin-top: 150px;"></div>

<!-- MAIN CONTENT -->
<main class="authen-section">
  <div class="authen-container">
    <div class="authen-nav margin-bottom-lg">
      <ul class="authen-nav__list">
        <li class="authen-nav__item">
          <a class="authen-nav__link login" href="{{URL::to('/dangnhap')}}">Đăng nhập</a>
        </li>
        <li class="authen-nav__item open">
          <a class="authen-nav__link register" href="{{URL::to('/dangky')}}">Đăng ký</a>
        </li>
      </ul>
    </div>
    <div class="authen-body__register">
      <h3 class="heading-tertiary login-heading">Đăng ký tài khoản</h3>

      <!-- FORM REGISTER-->
      <form class="authen-form" action="{{ URL::to('/add-customer') }}" method="POST">
        {{csrf_field()}}
        <div class="error-msg-box">
          <p class="error-msg">!</p>
        </div>
        <div class="form-control">
          <label class="margin-bottom-sm" for="fullName">Tên đăng nhập</label>
          <input type="text" name="customer_name" id="fullName" th:field="*{fullName}" placeholder="Họ và tên của bạn..." />
        </div>

        <div class="form-control">
          <label class="margin-bottom-sm" for="email">Email đăng nhập</label>
          <input type="email" name="customer_email" id="email" placeholder="Email của bạn..." />
        </div>

        <div class="form-control">
          <label class="margin-bottom-sm" for="password">Mật khẩu mới</label>
          <input type="password" name="customer_password" id="password" />
        </div>

        <div class="form-control">
          <label class="margin-bottom-sm" for="confirm-password">Nhập lại mật khẩu</label>
          <input type="password" name="repass" id="confirm-password" />
        </div>

        <div class="form-control">
          <label class="margin-bottom-sm" for="phonenumber">Số điện thoại</label>
          <input type="text" name="customer_phone" id="phonenumber" />
        </div>


        <button type="submit" class="btn btn--radius center">
          Đăng ký
        </button>
      </form>
    </div>
  </div>
</main>

@endsection