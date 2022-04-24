@extends('frontend.layouts.master')


@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url({{ asset('images/banner/banner2.jpg') }});">
            <div class="container">
                <div class="page-banner-entry">
                    <br />
                    <br />

                </div>
            </div>
        </div>
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Certificate Verify</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- inner page banner END -->
        {{-- @php
            $classroomCertificateNo = App\Models\UserRequestCertificateModel::all();
        @endphp --}}

        {{-- {{ dd($classroomCertificateNo) }} --}}


        <div class="">
            <!-- About Us -->
            <div class="section-area section-sp1 ">
                <div class="container">
                    {{-- {{ dd($classroomCertificateNo) }} --}}
                    @if (isset($classroomCertificateNo) || isset($elearningCertificateNo))
                        Certificate Found!
                        <div>

                            <table class="table table-striped">
                                <thead>
                                    <tr>

                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Course Completed Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($classroomCertificateNo))
                                        {{-- {{ dd($classroomCertificateNo) }} --}}
                                        <tr>

                                            <td>{{ $classroomCertificateNo->name }}</td>
                                            <td>{{ $classroomCertificateNo->email }}</td>
                                            <td>{{ $classroomCertificateNo->phone }}</td>
                                            <td>{{ $classroomCertificateNo->end_date }}</td>
                                        </tr>
                                    @elseif(isset($elearningCertificateNo))
                                        {{-- {{ dd($classroomCertificateNo) }} --}}
                                        <tr>

                                            <td>{{ $elearningCertificateNo->users->name }}</td>
                                            <td>{{ $elearningCertificateNo->users->email }}</td>
                                            <td>{{ $elearningCertificateNo->users->phone }}</td>
                                            <td>{{ date('d-m-Y', strtotime($elearningCertificateNo->end_date)) }}</td>
                                        </tr>
                                    @endif

                                </tbody>
                            </table>
                        </div>
                    @else
                        <h4 class="text-center"><span style="color: red">Sorry!</span> No result found</h4>
                    @endif

                </div>
            </div>
            <!-- contact area END -->

        </div>
        <!-- Content END-->
    @endsection
