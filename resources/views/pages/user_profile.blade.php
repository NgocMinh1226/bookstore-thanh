@extends('index')
@section('content')

<style>
    .section-slider {
        display: none;
    }
</style>
<div style="margin-top: 160px;"></div>

<main class="user-info-container">
    <h2 class="heading-secondary">Chỉnh sửa thông tin cá nhân</h2>
    <form action="#" method="HEAD" class="address-form">
      <div class="form-sections">
        <div class="form-group">
          <div class="form-control">
            <label for="fullName">Tên hiển thị</label>
            <input type="text" class="user-name" id="fullName" name="fullName" required />
          </div>

          <div class="form-control">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required />
          </div>

          <div class="form-control">
            <label for="phone">Số điện thoại</label>
            <input type="tel" id="phone" name="phone" required />
          </div>
        </div>

        <div class="address-group">
          <div class="form-control">
            <label for="province">Tỉnh / Thành phố</label>
            <select id="province" name="province" required>
              <option value="">Chọn tỉnh (thành phố)</option>
              <option value="province1">Province 1</option>
              <option value="province2">Province 2</option>
              <!-- Add more options as needed -->
            </select>
          </div>

          <div class="form-control">
            <label for="district">Quận / Huyện</label>
            <select id="district" name="district" required>
              <option value="">Chọn quận (huyện)</option>
              <option value="district">Province 1</option>
              <!-- Add more options as needed -->
            </select>
          </div>

          <div class="form-control">
            <label for="city">Phường / Xã</label>
            <select id="ward" name="ward" required>
              <option value="">Chọn phường (xã)</option>
              <option value="ward">Province 1</option>
              <!-- Add more options as needed -->
            </select>
          </div>

          <div class="form-control">
            <label for="street">Đường</label>
            <input type="text" id="street" name="street" required />
          </div>

          <div class="form-control">
            <label for="description">Thêm mô tả</label>
            <textarea type="textarea" id="description" name="description" rows="4" cols="30"></textarea>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn--radius btn-user-info">
        Cập nhật
      </button>
    </form>
  </main>

@endsection