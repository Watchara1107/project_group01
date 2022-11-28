@extends('layouts.master_backend')
@section('content')
    <div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10">User</h5>
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
                            <!-- task, page, download counter  start -->

                            <!-- task, page, download counter  end -->

                            <!--  sale analytics start -->



                        </div>
                        <!--  sale analytics end -->

                        <!--  project and team member start -->
                        <div class="col-xl-12 col-md-12">
                            <div class="card table-card">
                                <div class="card-header">
                                    <h5>User</h5>
                                    <div class="card-header-right">
                        
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $user)
                                                    <tr>
                                                        <td>{{ $users->firstItem() + $loop->index }}</td>
                                                        <td>{{ $user->name }}</td>
                                                        <td>{{ $user->email }}</td>
                                                        <td>
                                                            <a href="{{ url('admin/user/edit/'.$user->id) }}" class="btn waves-effect waves-light btn-warning"><i class="ti-pencil-alt"></i>แก้ไข</a>
                                                            @if (Auth::user()->name == $user->name)
                                                            <a href="" class="btn waves-effect waves-light btn-disabled disabled"><i class="ti-trash"></i>ลบไม่ได้</a>  
                                                            @else
                                                            <a href="{{ url('admin/user/delete/'.$user->id) }}" class="btn waves-effect waves-light btn-danger"><i class="ti-trash"></i>ลบ</a>
                                                            @endif
                                                           
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                        <div class="text-right m-r-15">
                                        {{ $users->links('pagination::bootstrap-4') }}
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
