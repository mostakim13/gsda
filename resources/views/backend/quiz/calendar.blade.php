@extends('admin.admin_master')
@section('admin_dashboard_content')
    <div class="card-datatable">
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>Calendar</li>
                </ul>
            </div>
        </div>
        <div style="background-color: #B4A7D6;">
            <h2 class="text-center">Training Calender For 2022</h2>
        </div>
        <a href="" class="btn btn-primary btn-sm mb-2"><i class="fa fa-plus"></i></a>
        <table class="dt-complex-header table table-bordered table-responsive">
            <thead>
                <tr>
                    <th rowspan="2" style="background-color: #EAD1DC;">Name of Programme</th>
                    <th rowspan="3" style="background-color: #EAD1DC;">Course Duration</th>
                    <th colspan="12" style="background-color: #EAD1DC;" class="text-center">Date of Interactive Training
                    </th>
                    <th rowspan="3" style="background-color: #EAD1DC;">Course Fee per Person(Excluding VAT & TAX)</th>
                    <th rowspan="3" style="background-color: #EAD1DC;">Has Include Vendor Exam?</th>
                    <th rowspan="2" style="background-color: #EAD1DC;">Action</th>
                </tr>
                <tr>
                    <th style="background-color: #B6D7A8">January</th>
                    <th style="background-color: #A2C4C9;">February</th>
                    <th style="background-color: #B6D7A8">March</th>
                    <th style="background-color: #A2C4C9;">April</th>
                    <th style="background-color: #B6D7A8">May</th>
                    <th style="background-color: #A2C4C9;">June</th>
                    <th style="background-color: #B6D7A8">July</th>
                    <th style="background-color: #A2C4C9;">August</th>
                    <th style="background-color: #B6D7A8">September</th>
                    <th style="background-color: #A2C4C9;">October</th>
                    <th style="background-color: #B6D7A8">November</th>
                    <th style="background-color: #A2C4C9;">December</th>
                </tr>
            </thead>
        </table>
    </div>

@endsection
