@extends('admin.admin_master')
@section('admin_dashboard_content')

<div class="d-flex" id="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-4">
                <h3 class="page-title">Courses</h3>

                @foreach($courses as $course)
                    <div class="card">
                        <div class="card-body mb-2">
                            <h5 class="card-title">{{$course->mock_category}}</h5>

                            <a href="{{ url('admin/course/view/'.$course->id) }}" class="inline_block btn btn-primary">Go
                                To Topic</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
