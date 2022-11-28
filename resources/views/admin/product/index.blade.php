@extends('layouts.master_backend')
@section('content')
    <div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Product</h5>
                            <p class="m-b-0">Welcome to nanaphan</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="{{ route('home') }}"> <i class="fa fa-home"></i> </a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('product.index') }}">Product</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-header end -->
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-body start -->
                    <div class="page-body">
                        <div class="row">

                        </div>

                        <div class="col-xl-12 col-md-12">
                            <a href="{{ route('product.create') }}" class="btn btn-success btn-round waves-effect waves-ligh">เพิ่มข้อมูล</a>
                            <div class="card table-card mt-4">
                                <div class="card-header">
                                    <h5>Product</h5>
                                    <div class="card-header-right">

                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>ลำดับ</th>
                                                    <th>ชื่อภาษาไทย</th>
                                                    <th>ชื่อภาษาอังกฤษ</th>
                                                    <th>รูปภาพ</th>
                                                    <th>ราคา</th>
                                                    <th>จัดการ</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($product as $pro)
                                                <tr>
                                                    <td>{{ $product->firstItem() + $loop->index }}</td>
                                                    <td>{{ $pro->nameth }}</td>
                                                    <td>{{ $pro->nameen }}</td>
                                                    <td>
                                                        <img src="{{ asset('backend/upload/product/'.$pro->image) }}" width="80px" height="60px" alt="">
                                                    </td>
                                                    <td>{{ $pro->price }}</td>
                                                    <td>
                                                        <a href="{{ url('/admin/product/edit/'.$pro->id) }}"
                                                            class="btn waves-effect waves-light btn-warning"><i
                                                                class="ti-pencil-alt"></i>แก้ไข</a>

                                                        <a href="{{ url('/admin/product/delete/'.$pro->id) }}" class="btn waves-effect waves-light btn-danger"><i
                                                                class="ti-trash"></i>ลบ</a>


                                                    </td>
                                                </tr>
                                                @endforeach


                                            </tbody>
                                        </table>
                                        <div class="text-right m-r-15">
                                            {{ $product->links('pagination::bootstrap-4') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--  project and team member end -->
                    </div>
                </div>
                <!-- Page-body end -->
            </div>
            <div id="styleSelector"> </div>
        </div>
    </div>
    </div>
@endsection
