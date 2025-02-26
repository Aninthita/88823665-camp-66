@extends('layouts.default_with_menu')

@section('content')
<form action="{{ url('/product') }}" method="post">
    @csrf

    <!-- หมวดหมู่สินค้า -->
    <div class="card p-3 mt-3">
        <div class="row">
            <div class="col-md-6">
                <label class="form-label fw-bold">Category Name</label>
                <input type="text" name="category_name" class="form-control">
            </div>
        </div>
    </div>
    
    <!-- รายการสินค้า -->
    <div class="card p-3 mt-3">
        <div class="d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Product List</h5>
            <button class="btn btn-primary" id="btn-add-product-list" type="button">+ เพิ่ม Product</button>
        </div>
        <hr>
        <div id="product-list">
            <div class="row align-items-center mb-2 product-item">
                <div class="col-md-6">
                    <label class="form-label">Product Name</label>
                    <input name="product_name[]" type="text" class="form-control" required>
                </div>
                <div class="col-auto">
                    <button type="button" class="btn btn-danger btn-del-product-list">ลบ</button>
                </div>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-success mt-3">บันทึก</button>
</form>

<!-- ตารางแสดงข้อมูล -->
<table class="table mt-5">
    <thead>
        <tr>
            <th>#</th>
            <th>Category Name</th>
            <th>Product List</th>
            <th>User Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($category as $index => $cat)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $cat->name }}</td>
            <td>
                <ul>
                    @foreach ($product as $pro)
                    @if ($pro->category_id == $cat->id)
                    <li>{{ $pro->name }}</li>
                    @endif
                    @endforeach
                </ul>
            </td>
            <td>
                @foreach ($product as $pro)
                @foreach ($users as $us)
                @if ($pro->category_id == $cat->id && $pro->user_id == $us->id)
                <div>{{ $us->name }}</div>
                @endif
                @endforeach
                @endforeach
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        // เพิ่มสินค้าใหม่
        $('#btn-add-product-list').on('click', function() {
            $('#product-list').append(`
                <div class="row align-items-center mb-2 product-item">
                    <div class="col-md-6">
                        <label class="form-label">Product Name</label>
                        <input name="product_name[]" type="text" class="form-control" required>
                    </div>
                    <div class="col-auto">
                        <button type="button" class="btn btn-danger btn-del-product-list">ลบ</button>
                    </div>
                </div>
            `);
        });

        // ใช้ Event Delegation ให้ปุ่มลบทำงานได้กับสินค้าใหม่
        $(document).on('click', '.btn-del-product-list', function() {
            $(this).closest('.product-item').remove();
        });
    });
</script>
@endsection
