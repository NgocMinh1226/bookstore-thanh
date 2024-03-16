@extends('index')
@section('content')

<!-- MAIN CONTENT -->
<main>
    <div class="main-container">
        <div class="product-section container">
            <section class="top-product-section">
                <div class="tp-header margin-bottom-lg">
                    <p class="subheading"></p>
                    <!-- @foreach($danhmuc as $key => $danh)
                        <p class="subheading">{{$danh->tendanhmuc}}: {{$danh->mota}}</p>
                    @endforeach -->
                </div>
                <div class="top-books grid grid-5--columns" >
                    @php
                        $count=count($truyen);
                    @endphp

                    @if($count == 0)
                        <p class="subheading">Sách truyện đang được cập nhật!</p>
                    @else
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
                    @endif
                </div><br>
            </section>

        </div>
    </div>
</main>

@endsection