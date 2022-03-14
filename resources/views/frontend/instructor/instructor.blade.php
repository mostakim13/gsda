@extends('frontend.layouts.instructorDashboard')
@section('instructor_dashboard_content')
    <div class="container">
        <form method="POST" action="{{ route('store_zoom') }}">
            @csrf
            <div class="form-group row">
                <label for="course" class="col-sm-2 col-form-label" style="text-align: right">Select Course</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="" placeholder="Please enter topic">
                </div>
            </div>

            <div class="form-group row">
                <label for="topic" class="col-sm-2 col-form-label" style="text-align: right">Topic</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="topic" id="" placeholder="Please enter topic">
                </div>
            </div>
            <div class="form-group row">
                <label for="date" class="col-sm-2 col-form-label" style="text-align: right">Start</label>
                <div class="col-sm-5">

                    <input type="date" class="form-control" name="startDate" placeholder="DD-MM-YYYY" min="01-31-2020" max="01-31-2030">
                </div>
                <div class="col-sm-5">

                    <input type="time" class="form-control" name="startTime" placeholder="Please enter start time">
                </div>
            </div>
            <div class="form-group row">
                <label for="duration" class="col-sm-2 col-form-label" style="text-align: right">Duration</label>
                <div class="col-sm-5">
                    <input type="text" name="hour" class="form-control" id="" placeholder="Please enter hours">
                </div>
                <div class="col-sm-5">
                    <input type="text" name="minute" class="form-control" id="" placeholder="Please enter minute">
                </div>
            </div>

            <div class="col-sm-3" style="text-align: right">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>



        </form>
    </div>

    {{-- <script>
    $(".dateFormat").on("change", function() {
    this.setAttribute(
        "data-date",
        moment(this.value, "YYYY-MM-DD")
        .format( this.getAttribute("data-date-format") )
    )
}).trigger("change")
</script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> --}}
@endsection
