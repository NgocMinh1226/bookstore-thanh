use App\Models\Product;

public function index()
{
    $products = Product::paginate(10); // Lấy 10 sản phẩm mỗi trang
    return view('frontend.product.list', compact('products'));
}
//Lấy dữ liệu từ cơ sở dữ liệu
@extends('layouts.default')

@section('title', 'Danh sách sản phẩm')

@section('content')
<table class="table table-bordered">
    <tr class="success">
        <th>ID</th>
        <th>Tên sản phẩm</th>
        <th>Giá sản phẩm</th>
        <th>Nội dung</th>
        <th>Ảnh sản phẩm</th>
        <th>Đăng bán</th>
        <th>Action</th>
    </tr>
    @foreach ($products as $p)
    <tr>
        <td>{{ $p->id }}</td>
        <td>{{ $p->name }}</td>
        <td class="text-right">{{ number_format($p->price) }}</td>
        <td>{{ $p->content }}</td>
        <td><img src="{{ Asset($p->image_path) }}" alt="{{ $p->name }}" width="120" height="120"></td>
        <td>
            @if ($p->active)
            <span class="text-success glyphicon glyphicon-ok"></span>
            @else
            <span class="text-danger glyphicon glyphicon-remove"></span>
            @endif
        </td>
        <td>
            <a href="{{ '/product/' . $p->id . '/edit' }}"><span class="glyphicon glyphicon-pencil">Edit</span></a>
            <a href="{{ '/product/' . $p->id }}"><span class="glyphicon glyphicon-trash">Delete</span></a>
        </td>
    </tr>
    @endforeach
</table>
{{ $products->links() }}
@endsection
//tạo một Livewire component để hiển thị danh sách danh mục sản phẩm
php artisan livewire:make Admin\\CategoryList

//Khai Báo Route Cho Component:
use App\\Http\\Livewire\\Admin\\CategoryList;
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'isAdmin']], function () {
    Route::get('/categories', CategoryList::class)->name('categories.index');
});


//Hiển Thị Danh Sách Danh Mục Sản Phẩm

namespace App\\Http\\Livewire\\Admin;

use App\\Models\\Category;
use Livewire\\Component;

class CategoryList extends Component
{
    public function render()
    {
        return view('livewire.admin.category-list', [
            'categories' => Category::with('parent')->latest()->get(),
        ])->layout('layouts.admin');
    }
}
//Tạo View Cho Danh Sách Danh Mục Sản Phẩm
<div>
    <!-- ... -->
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Parent</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->parent->name ?? '---' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- ... -->
</div>