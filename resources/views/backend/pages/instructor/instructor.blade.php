@extends('admin.admin_master')
@section('admin_dashboard_content')
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Admin</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="{{ route('admin.home') }}"><i class="fa fa-home"></i>Home</a></li>
                <li>Instructor</li>
            </ul>
        </div>
        <a href="{{ url('admin/home/add/instructor') }}" class="btn btn-sm mb-1 btn-primary"><i class="fa fa-plus"></i>
            Asign Instructor</i></a>
        <table class="table table-bordered" id="search">
            <thead>
                <tr class="text-center">
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($instructors as $ins)
                    <tr class="text-center">
                        <th scope="row">{{ $loop->index+1}}</th>
                        <td>{{ $ins->user->name }}</td>
                        <td>{{ $ins->user->email }}</td>
                        <td>{{ $ins->user->phone }}</td>
                        <td>
                            <a href="{{ url('admin/home/edit/instructor/'.$ins->id) }}" style="padding: 5px;"><i class="fa fa-edit"></i></a>
                            <a href="{{ url('admin/home/delete/instructor/'.$ins->id) }}" style="padding: 5px;"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
