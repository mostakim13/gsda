@extends('admin.admin_master')
@section('admin_dashboard_content')

    <div class="d-flex" id="wrapper">
        <div class="container">
            <a href="{{ url('question/topic') }}" class="btn btn-sm btn-danger"><i class="fa fa-arrow-left"></i>Back</a>
            <div class="row">
                <div class="col-md-12 mt-4">
                    <h3 class="page-title">All Questions</h3>
                    <table id="example" class="table table-bordered table-striped datatable">
                        <thead>
                            <tr>
                                <th>Course</th>
                                <th>Topic</th>
                                <th>Question No</th>
                                <th>Questions</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($questions as $question)
                                <tr>
                                    <td>
                                        {{ $question->course->mock_category }}
                                    </td>
                                    <td>
                                        @if ($question->topic)

                                            {{ $question->topic->title }}
                                        @endif
                                    </td>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>
                                        @if (strlen($question->question_text) > 100)
                                            {{ substr($question->question_text, 0, 100) }}...
                                    </td>
                                @else
                                    {{ $question->question_text }}
                            @endif
                            <td>
                                <a href="/question/edit/{{ $question->id }}"
                                    class="btn btn-xs btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                                <a href="/question-delete/{{ $question->id }}" class="btn btn-xs btn-danger" type="submit"> <i class="fa fa-trash"></i> Delete</a>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
          $('#example').DataTable();
          } );
      </script>
@endsection
