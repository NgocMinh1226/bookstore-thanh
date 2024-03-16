@extends('index')
@section('content')
<main>
    <div class="main-container">
        <div class="product-section container">
            <section class="top-product-section">
                <div class="tp-header margin-bottom-lg">
                    <p class="subheading">Tìm với từ khóa: {{$tukhoa}}</p>
                </div>



                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                <!-- card -->
                <!-- 1 -->
                <div class="row">
                    @php
                        $count = count($truyen);
                    @endphp
                    @if($count==0)
                        <div class="col-md-12">
                            <div class = "tp-header margin-bottom-lg">
                                <div class = "tb-title">
                                    <p>Không tìm thấy truyện!</p>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="top-books grid grid-5--columns">
                            @foreach($truyen as $key => $value)
                                <div class="top-book">
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
                    @endif
                </div><br>
            </section>
        </div>
    </div>
</main>            
@endsection
