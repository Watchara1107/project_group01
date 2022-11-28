@extends('layouts.master_backend')
@section('content')
    <div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10">User Edit</h5>
                            <p class="m-b-0">Welcome to nanaphan</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="{{ route('home') }}"> <i class="fa fa-home"></i> </a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('user.index') }}">User</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ url('/admin/user/edit') }}">UserEdit</a>
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

                        <div class="card">
                            <div class="card-header">
                                <h5>Edit User</h5>
                            </div>
                            <div class="card-block">
                                <form action="{{ url('admin/user/update/'.$user->id) }}" method="POST">
                                        @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name" value="{{ $user->name }}" class="form-control form-control-normal">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="email" value="{{ $user->email }}" class="form-control form-control-normal">
                                        </div>
                                    </div>
                                    <div class="text-center mt-4">
                                        <button class="btn waves-effect waves-light btn-grd-success">บันทึก</button>
                                    <a href="{{ route('user.index') }}" class="btn waves-effect waves-light btn-grd-danger ">ย้อนกลับ</a>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Page-body end -->
            </div>
            <div id="styleSelector"> </div>
        </div>
    </div>
    </div>
@endsection
