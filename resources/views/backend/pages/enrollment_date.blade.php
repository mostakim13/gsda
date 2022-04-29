@extends('admin.admin_master')
@section('admin_dashboard_content')
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Users</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="{{ route('admin.home') }}"><i class="fa fa-home"></i>Home</a></li>
                <li>User</li>
                <li>Enrollment Date</li>
            </ul>
        </div>
        @if (Session::has('user_deleted'))
            <div class="alert alert-danger" role="alert">

                <div class="alert-body">
                    {{ Session::get('user_deleted') }}
                </div>
            </div>
        @endif
        <!-- Card -->
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Enrollment Date</h4>
                    </div>

                    <div class="table table-responsive">
                        <table id="user_list" class="table table-bordered">
                            <thead class="text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Enrollment Course</th>
                                    <th>Enrollment Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($enrollments as $row)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>
                                            {{ $row->course->course_title }}
                                        </td>
                                        <td>
                                            {{ $row->created_at->format('d-m-Y') }}
                                        </td>
                                        <td>
                                            <a href="/admin/home/enrollment-course/delete/{{ $row->id }}"><i
                                                    class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        {{-- @include('backend.modals.enroll') --}}
    </div>

    <style>
        .btn:active,
        .btn:hover,
        .btn:focus,
        .active>.btn {
            background-color: #d8a409;
            color: #000000;
        }

    </style>
@endsection
