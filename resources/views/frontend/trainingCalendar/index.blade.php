@extends('frontend.layouts.master')


@section('content')



    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url({{ asset('images/banner/banner1.jpg') }});">
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
                    <li>Blog Standard Sidebar</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <div class="content-block">
            <div class="section-area section-sp1">
                <div class="container">
                    <div class="row">
                        <!-- Left part start -->
                        <div class="col-md-7 col-lg-8 col-xl-8">


                            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><link
                            type="text/css"
                            rel="stylesheet"
                            href="resources/sheet.css"
                          />
                          <style type="text/css">
                            .ritz .waffle a {
                              color: inherit;
                            }
                            .ritz .waffle .s3 {
                              border-right: 1px SOLID #000000;
                              background-color: #ead1dc;
                              text-align: center;
                              font-weight: bold;
                              color: #000000;
                              font-family: "docs-PT Serif", Arial;
                              font-size: 10pt;
                              vertical-align: bottom;
                              white-space: nowrap;
                              direction: ltr;
                              padding: 2px 3px 2px 3px;
                            }
                            .ritz .waffle .s17 {
                              border-bottom: 1px SOLID #000000;
                              border-right: 1px SOLID #000000;
                              background-color: #ffffff;
                              text-align: left;
                              color: #333333;
                              font-family: "docs-PT Serif", Arial;
                              font-size: 14pt;
                              vertical-align: top;
                              white-space: nowrap;
                              direction: ltr;
                              padding: 2px 3px 2px 3px;
                            }
                            .ritz .waffle .s9 {
                              border-right: 1px SOLID #000000;
                              background-color: #ffffff;
                              text-align: left;
                              color: #000000;
                              font-family: "docs-PT Serif", Arial;
                              font-size: 10pt;
                              vertical-align: bottom;
                              white-space: nowrap;
                              direction: ltr;
                              padding: 2px 3px 2px 3px;
                            }
                            .ritz .waffle .s0 {
                              border-right: 1px SOLID #000000;
                              background-color: #b4a7d6;
                              text-align: center;
                              color: #000000;
                              font-family: "docs-PT Serif", Arial;
                              font-size: 24pt;
                              vertical-align: bottom;
                              white-space: nowrap;
                              direction: ltr;
                              padding: 2px 3px 2px 3px;
                            }
                            .ritz .waffle .s11 {
                              border-bottom: 1px SOLID #000000;
                              border-right: 1px SOLID #000000;
                              background-color: #ffffff;
                              text-align: center;
                              color: #000000;
                              font-family: "docs-PT Serif", Arial;
                              font-size: 10pt;
                              vertical-align: bottom;
                              white-space: nowrap;
                              direction: ltr;
                              padding: 2px 3px 2px 3px;
                            }
                            .ritz .waffle .s4 {
                              border-bottom: 1px SOLID #000000;
                              border-right: 1px SOLID #000000;
                              background-color: #ead1dc;
                              text-align: center;
                              font-weight: bold;
                              color: #000000;
                              font-family: "docs-PT Serif", Arial;
                              font-size: 10pt;
                              vertical-align: bottom;
                              white-space: nowrap;
                              direction: ltr;
                              padding: 2px 3px 2px 3px;
                            }
                            .ritz .waffle .s10 {
                              border-bottom: 1px SOLID #000000;
                              border-right: 1px SOLID #000000;
                              background-color: #ffffff;
                              text-align: left;
                              color: #000000;
                              font-family: "docs-PT Serif", Arial;
                              font-size: 10pt;
                              vertical-align: bottom;
                              white-space: nowrap;
                              direction: ltr;
                              padding: 2px 3px 2px 3px;
                            }
                            .ritz .waffle .s15 {
                              border-left: none;
                              border-bottom: 1px SOLID #000000;
                              background-color: #ffffff;
                              text-align: left;
                              color: #000000;
                              font-family: "docs-PT Serif", Arial;
                              font-size: 10pt;
                              vertical-align: bottom;
                              white-space: nowrap;
                              direction: ltr;
                              padding: 2px 3px 2px 3px;
                            }
                            .ritz .waffle .s5 {
                              border-bottom: 1px SOLID #000000;
                              border-right: 1px SOLID #000000;
                              background-color: #ead1dc;
                              text-align: left;
                              font-weight: bold;
                              color: #000000;
                              font-family: "docs-PT Serif", Arial;
                              font-size: 10pt;
                              vertical-align: bottom;
                              white-space: nowrap;
                              direction: ltr;
                              padding: 2px 3px 2px 3px;
                            }
                            .ritz .waffle .s8 {
                              border-bottom: 1px SOLID #000000;
                              border-right: 1px SOLID #000000;
                              background-color: #b6d7a8;
                              text-align: center;
                              font-weight: bold;
                              color: #333333;
                              font-family: "docs-PT Serif", Arial;
                              font-size: 10pt;
                              vertical-align: top;
                              white-space: nowrap;
                              direction: ltr;
                              padding: 2px 3px 2px 3px;
                            }
                            .ritz .waffle .s7 {
                              border-bottom: 1px SOLID #000000;
                              border-right: 1px SOLID #000000;
                              background-color: #a2c4c9;
                              text-align: center;
                              font-weight: bold;
                              color: #333333;
                              font-family: "docs-PT Serif", Arial;
                              font-size: 10pt;
                              vertical-align: top;
                              white-space: nowrap;
                              direction: ltr;
                              padding: 2px 3px 2px 3px;
                            }
                            .ritz .waffle .s2 {
                              border-bottom: 1px SOLID #000000;
                              border-right: 1px SOLID #000000;
                              background-color: #b4a7d6;
                              text-align: center;
                              color: #000000;
                              font-family: "docs-PT Serif", Arial;
                              font-size: 24pt;
                              vertical-align: bottom;
                              white-space: nowrap;
                              direction: ltr;
                              padding: 2px 3px 2px 3px;
                            }
                            .ritz .waffle .s6 {
                              border-bottom: 1px SOLID #000000;
                              border-right: 1px SOLID #000000;
                              background-color: #b6d7a8;
                              text-align: center;
                              font-weight: bold;
                              color: #333333;
                              font-family: "docs-PT Serif", Arial;
                              font-size: 10pt;
                              vertical-align: bottom;
                              white-space: nowrap;
                              direction: ltr;
                              padding: 2px 3px 2px 3px;
                            }
                            .ritz .waffle .s16 {
                              border-bottom: 1px SOLID #000000;
                              border-right: 1px SOLID #000000;
                              background-color: #ffffff;
                              text-align: left;
                              color: #333333;
                              font-family: "docs-PT Serif", Arial;
                              font-size: 10pt;
                              vertical-align: top;
                              white-space: nowrap;
                              direction: ltr;
                              padding: 2px 3px 2px 3px;
                            }
                            .ritz .waffle .s12 {
                              border-right: none;
                              border-bottom: 1px SOLID #000000;
                              background-color: #ffffff;
                              text-align: center;
                              color: #000000;
                              font-family: "docs-PT Serif", Arial;
                              font-size: 10pt;
                              vertical-align: bottom;
                              white-space: nowrap;
                              direction: ltr;
                              padding: 2px 3px 2px 3px;
                            }
                            .ritz .waffle .s13 {
                              border-left: none;
                              border-right: none;
                              border-bottom: 1px SOLID #000000;
                              background-color: #ffffff;
                              text-align: center;
                              color: #000000;
                              font-family: "docs-PT Serif", Arial;
                              font-size: 10pt;
                              vertical-align: bottom;
                              white-space: nowrap;
                              direction: ltr;
                              padding: 2px 3px 2px 3px;
                            }
                            .ritz .waffle .s14 {
                              border-left: none;
                              border-bottom: 1px SOLID #000000;
                              background-color: #ffffff;
                              text-align: center;
                              color: #000000;
                              font-family: "docs-PT Serif", Arial;
                              font-size: 10pt;
                              vertical-align: bottom;
                              white-space: nowrap;
                              direction: ltr;
                              padding: 2px 3px 2px 3px;
                            }
                            .ritz .waffle .s1 {
                              border-bottom: 1px SOLID #000000;
                              background-color: #b4a7d6;
                              text-align: center;
                              color: #000000;
                              font-family: "docs-PT Serif", Arial;
                              font-size: 24pt;
                              vertical-align: bottom;
                              white-space: nowrap;
                              direction: ltr;
                              padding: 2px 3px 2px 3px;
                            }
                          </style>
                          <div class="ritz grid-container" dir="ltr">
                            <table class="waffle" cellspacing="0" cellpadding="0">
                              <thead>
                                <tr>
                                  <th class="row-header freezebar-origin-ltr"></th>
                                  <th
                                    id="1472289553C0"
                                    style="width: 29px"
                                    class="column-headers-background"
                                  >
                                    A
                                  </th>
                                  <th
                                    id="1472289553C1"
                                    style="width: 102px"
                                    class="column-headers-background"
                                  >
                                    B
                                  </th>
                                  <th
                                    id="1472289553C2"
                                    style="width: 100px"
                                    class="column-headers-background"
                                  >
                                    C
                                  </th>
                                  <th
                                    id="1472289553C3"
                                    style="width: 54px"
                                    class="column-headers-background"
                                  >
                                    D
                                  </th>
                                  <th
                                    id="1472289553C4"
                                    style="width: 48px"
                                    class="column-headers-background"
                                  >
                                    E
                                  </th>
                                  <th
                                    id="1472289553C5"
                                    style="width: 50px"
                                    class="column-headers-background"
                                  >
                                    F
                                  </th>
                                  <th
                                    id="1472289553C6"
                                    style="width: 44px"
                                    class="column-headers-background"
                                  >
                                    G
                                  </th>
                                  <th
                                    id="1472289553C7"
                                    style="width: 42px"
                                    class="column-headers-background"
                                  >
                                    H
                                  </th>
                                  <th
                                    id="1472289553C8"
                                    style="width: 46px"
                                    class="column-headers-background"
                                  >
                                    I
                                  </th>
                                  <th
                                    id="1472289553C9"
                                    style="width: 36px"
                                    class="column-headers-background"
                                  >
                                    J
                                  </th>
                                  <th
                                    id="1472289553C10"
                                    style="width: 44px"
                                    class="column-headers-background"
                                  >
                                    K
                                  </th>
                                  <th
                                    id="1472289553C11"
                                    style="width: 36px"
                                    class="column-headers-background"
                                  >
                                    L
                                  </th>
                                  <th
                                    id="1472289553C12"
                                    style="width: 45px"
                                    class="column-headers-background"
                                  >
                                    M
                                  </th>
                                  <th
                                    id="1472289553C13"
                                    style="width: 39px"
                                    class="column-headers-background"
                                  >
                                    N
                                  </th>
                                  <th
                                    id="1472289553C14"
                                    style="width: 42px"
                                    class="column-headers-background"
                                  >
                                    O
                                  </th>
                                  <th
                                    id="1472289553C15"
                                    style="width: 100px"
                                    class="column-headers-background"
                                  >
                                    P
                                  </th>
                                  <th
                                    id="1472289553C16"
                                    style="width: 59px"
                                    class="column-headers-background"
                                  >
                                    Q
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr style="height: 20px">
                                  <th
                                    id="1472289553R0"
                                    style="height: 20px"
                                    class="row-headers-background"
                                  >
                                    <div class="row-header-wrapper" style="line-height: 20px">1</div>
                                  </th>
                                  <td class="s0" dir="ltr"></td>
                                  <td class="s1" dir="ltr" colspan="14">Training Calender For 2022</td>
                                  <td class="s1" dir="ltr"></td>
                                  <td class="s2" dir="ltr"></td>
                                </tr>
                                <tr style="height: 20px">
                                  <th
                                    id="1472289553R1"
                                    style="height: 20px"
                                    class="row-headers-background"
                                  >
                                    <div class="row-header-wrapper" style="line-height: 20px">2</div>
                                  </th>
                                  <td class="s3" dir="ltr"></td>
                                  <td class="s4" dir="ltr" rowspan="3">Name of<br />Programme</td>
                                  <td class="s4" dir="ltr" rowspan="3">Course<br />Duration</td>
                                  <td class="s4" dir="ltr" colspan="12" rowspan="2">
                                    Date of Interactive Training
                                  </td>
                                  <td class="s5" dir="ltr" rowspan="3">
                                    Course Fee <br />per Person<br />(Excluding <br />VAT &amp; TAX)
                                  </td>
                                  <td class="s5" dir="ltr" rowspan="3">
                                    Has<br />Include<br />Vendor<br />Exam?
                                  </td>
                                </tr>
                                <tr style="height: 20px">
                                  <th
                                    id="1472289553R2"
                                    style="height: 20px"
                                    class="row-headers-background"
                                  >
                                    <div class="row-header-wrapper" style="line-height: 20px">3</div>
                                  </th>
                                  <td class="s3" dir="ltr"></td>
                                </tr>
                                <tr style="height: 20px">
                                  <th
                                    id="1472289553R3"
                                    style="height: 20px"
                                    class="row-headers-background"
                                  >
                                    <div class="row-header-wrapper" style="line-height: 20px">4</div>
                                  </th>
                                  <td class="s3" dir="ltr"></td>
                                  <td class="s6" dir="ltr">Jan</td>
                                  <td class="s7" dir="ltr">Feb</td>
                                  <td class="s8" dir="ltr">Mar</td>
                                  <td class="s7" dir="ltr">Apr</td>
                                  <td class="s8" dir="ltr">May</td>
                                  <td class="s7" dir="ltr">Jun</td>
                                  <td class="s8" dir="ltr">Jul</td>
                                  <td class="s7" dir="ltr">Aug</td>
                                  <td class="s8" dir="ltr">Sept</td>
                                  <td class="s7" dir="ltr">Oct</td>
                                  <td class="s8" dir="ltr">Nov</td>
                                  <td class="s7" dir="ltr">Dec</td>
                                </tr>
                                <tr style="height: 20px">
                                  <th
                                    id="1472289553R4"
                                    style="height: 20px"
                                    class="row-headers-background"
                                  >
                                    <div class="row-header-wrapper" style="line-height: 20px">5</div>
                                  </th>
                                  <td class="s9" dir="ltr"></td>
                                  <td class="s10" dir="ltr">PRINCE2<br />Foundation</td>
                                  <td class="s10" dir="ltr">18 Hours/<br />2 Days</td>
                                  <td class="s11" dir="ltr"></td>
                                  <td class="s11" dir="ltr">19, 26</td>
                                  <td class="s11" dir="ltr"></td>
                                  <td class="s11" dir="ltr"></td>
                                  <td class="s11" dir="ltr">21, 28</td>
                                  <td class="s11" dir="ltr"></td>
                                  <td class="s11" dir="ltr"></td>
                                  <td class="s11" dir="ltr">20, 27</td>
                                  <td class="s11" dir="ltr"></td>
                                  <td class="s12" dir="ltr"></td>
                                  <td class="s13 softmerge" dir="ltr">
                                    <div class="softmerge-inner" style="width: 83px; left: -5px">
                                      19, 26
                                    </div>
                                  </td>
                                  <td class="s14" dir="ltr"></td>
                                  <td class="s15" dir="ltr">BDT 45503</td>
                                  <td class="s10" dir="ltr">YES</td>
                                </tr>
                                <tr style="height: 20px">
                                  <th
                                    id="1472289553R5"
                                    style="height: 20px"
                                    class="row-headers-background"
                                  >
                                    <div class="row-header-wrapper" style="line-height: 20px">6</div>
                                  </th>
                                  <td class="s9" dir="ltr"></td>
                                  <td class="s10" dir="ltr">PRINCE2<br />Practitoner</td>
                                  <td class="s10" dir="ltr">18 Hours/<br />2 Days</td>
                                  <td class="s11" dir="ltr"></td>
                                  <td class="s11" dir="ltr"></td>
                                  <td class="s11" dir="ltr">26, 31</td>
                                  <td class="s11" dir="ltr"></td>
                                  <td class="s11" dir="ltr"></td>
                                  <td class="s11" dir="ltr">25, 30</td>
                                  <td class="s11" dir="ltr"></td>
                                  <td class="s12" dir="ltr"></td>
                                  <td class="s13 softmerge" dir="ltr">
                                    <div class="softmerge-inner" style="width: 84px; left: -6px">
                                      24, 30
                                    </div>
                                  </td>
                                  <td class="s14" dir="ltr"></td>
                                  <td class="s14" dir="ltr"></td>
                                  <td class="s11" dir="ltr">24, 31</td>
                                  <td class="s10" dir="ltr">BDT 66699</td>
                                  <td class="s10" dir="ltr">YES</td>
                                </tr>
                                <tr style="height: 20px">
                                  <th
                                    id="1472289553R6"
                                    style="height: 20px"
                                    class="row-headers-background"
                                  >
                                    <div class="row-header-wrapper" style="line-height: 20px">7</div>
                                  </th>
                                  <td class="s9" dir="ltr"></td>
                                  <td class="s10" dir="ltr">ITIL4<br />Foundation</td>
                                  <td class="s10" dir="ltr">18 Hours/<br />2 Days</td>
                                  <td class="s11" dir="ltr"></td>
                                  <td class="s11" dir="ltr"></td>
                                  <td class="s11" dir="ltr">4, 5</td>
                                  <td class="s11" dir="ltr"></td>
                                  <td class="s11" dir="ltr"></td>
                                  <td class="s11" dir="ltr"></td>
                                  <td class="s11" dir="ltr">1, 2</td>
                                  <td class="s11" dir="ltr"></td>
                                  <td class="s11" dir="ltr"></td>
                                  <td class="s11" dir="ltr"></td>
                                  <td class="s11" dir="ltr">4, 5</td>
                                  <td class="s11" dir="ltr"></td>
                                  <td class="s10" dir="ltr">BDT 45503</td>
                                  <td class="s10" dir="ltr">YES</td>
                                </tr>
                                <tr style="height: 20px">
                                  <th
                                    id="1472289553R7"
                                    style="height: 20px"
                                    class="row-headers-background"
                                  >
                                    <div class="row-header-wrapper" style="line-height: 20px">8</div>
                                  </th>
                                  <td class="s9" dir="ltr"></td>
                                  <td class="s10" dir="ltr">ISO 27001<br />Lead Auditor</td>
                                  <td class="s10" dir="ltr">40 Hours/<br />4 Days</td>
                                  <td class="s16" dir="ltr">21, 22,<br />28, 29</td>
                                  <td class="s10"></td>
                                  <td class="s16" dir="ltr"></td>
                                  <td class="s16" dir="ltr"></td>
                                  <td class="s16" dir="ltr"></td>
                                  <td class="s10"></td>
                                  <td class="s10"></td>
                                  <td class="s10"></td>
                                  <td class="s10"></td>
                                  <td class="s10"></td>
                                  <td class="s10"></td>
                                  <td class="s10"></td>
                                  <td class="s10" dir="ltr">BDT 25000</td>
                                  <td class="s10" dir="ltr">NO</td>
                                </tr>
                                <tr style="height: 20px">
                                  <th
                                    id="1472289553R8"
                                    style="height: 20px"
                                    class="row-headers-background"
                                  >
                                    <div class="row-header-wrapper" style="line-height: 20px">9</div>
                                  </th>
                                  <td class="s9" dir="ltr"></td>
                                  <td class="s10" dir="ltr">CISA</td>
                                  <td class="s10" dir="ltr">40 Hours/<br />4 Days</td>
                                  <td class="s16" dir="ltr"></td>
                                  <td class="s10" dir="ltr">18, 19,<br />25, 26</td>
                                  <td class="s16" dir="ltr"></td>
                                  <td class="s16" dir="ltr"></td>
                                  <td class="s16" dir="ltr">13, 14<br />20, 21</td>
                                  <td class="s10"></td>
                                  <td class="s10"></td>
                                  <td class="s10"></td>
                                  <td class="s10"></td>
                                  <td class="s10"></td>
                                  <td class="s10"></td>
                                  <td class="s10" dir="ltr">9, 10<br />16, 17</td>
                                  <td class="s10" dir="ltr">BDT 25000</td>
                                  <td class="s10" dir="ltr">NO</td>
                                </tr>
                                <tr style="height: 20px">
                                  <th
                                    id="1472289553R9"
                                    style="height: 20px"
                                    class="row-headers-background"
                                  >
                                    <div class="row-header-wrapper" style="line-height: 20px">10</div>
                                  </th>
                                  <td class="s9" dir="ltr"></td>
                                  <td class="s10" dir="ltr">CISSP</td>
                                  <td class="s10" dir="ltr">40 Hours/<br />4 Days</td>
                                  <td class="s16" dir="ltr"></td>
                                  <td class="s10"></td>
                                  <td class="s16" dir="ltr"></td>
                                  <td class="s16" dir="ltr"></td>
                                  <td class="s16" dir="ltr"></td>
                                  <td class="s10" dir="ltr">10, 11<br />17, 18</td>
                                  <td class="s10"></td>
                                  <td class="s10"></td>
                                  <td class="s10"></td>
                                  <td class="s10" dir="ltr">21, 22<br />28, 29</td>
                                  <td class="s10"></td>
                                  <td class="s10"></td>
                                  <td class="s10" dir="ltr">BDT 25000</td>
                                  <td class="s10" dir="ltr">NO</td>
                                </tr>
                                <tr style="height: 20px">
                                  <th
                                    id="1472289553R10"
                                    style="height: 20px"
                                    class="row-headers-background"
                                  >
                                    <div class="row-header-wrapper" style="line-height: 20px">11</div>
                                  </th>
                                  <td class="s9" dir="ltr"></td>
                                  <td class="s10" dir="ltr">
                                    ITIL4 DITS <br />(Digital &amp;<br />IT Strategy)
                                  </td>
                                  <td class="s10" dir="ltr">40 Hours/<br />4 Days</td>
                                  <td class="s17" dir="ltr"></td>
                                  <td class="s10"></td>
                                  <td class="s16" dir="ltr">18, 19,<br />25, 26</td>
                                  <td class="s17" dir="ltr"></td>
                                  <td class="s17" dir="ltr"></td>
                                  <td class="s10"></td>
                                  <td class="s10"></td>
                                  <td class="s10" dir="ltr">19, 20,<br />26, 27</td>
                                  <td class="s10" dir="ltr"></td>
                                  <td class="s10"></td>
                                  <td class="s10"></td>
                                  <td class="s10 softmerge" dir="ltr">
                                    <div class="softmerge-inner" style="width: 39px; left: -1px">
                                      16, 17,<br />23, 24
                                    </div>
                                  </td>
                                  <td class="s10" dir="ltr">BDT 127500</td>
                                  <td class="s10" dir="ltr">YES</td>
                                </tr>
                                <tr style="height: 20px">
                                  <th
                                    id="1472289553R11"
                                    style="height: 20px"
                                    class="row-headers-background"
                                  >
                                    <div class="row-header-wrapper" style="line-height: 20px">12</div>
                                  </th>
                                  <td class="s9" dir="ltr"></td>
                                  <td class="s10" dir="ltr">AWS</td>
                                  <td class="s10" dir="ltr">40 Hours/<br />4 Days</td>
                                  <td class="s10"></td>
                                  <td class="s10" dir="ltr"></td>
                                  <td class="s10"></td>
                                  <td class="s10"></td>
                                  <td class="s10"></td>
                                  <td class="s10" dir="ltr"></td>
                                  <td class="s10" dir="ltr" colspan="2">29, 30, 5, 6</td>
                                  <td class="s10"></td>
                                  <td class="s10"></td>
                                  <td class="s10"></td>
                                  <td class="s10"></td>
                                  <td class="s10" dir="ltr">BDT 20000</td>
                                  <td class="s10" dir="ltr">NO</td>
                                </tr>
                                <tr style="height: 20px">
                                  <th
                                    id="1472289553R12"
                                    style="height: 20px"
                                    class="row-headers-background"
                                  >
                                    <div class="row-header-wrapper" style="line-height: 20px">13</div>
                                  </th>
                                  <td class="s9" dir="ltr"></td>
                                  <td class="s10" dir="ltr">PMP</td>
                                  <td class="s10" dir="ltr">40 Hours/<br />4 Days</td>
                                  <td class="s10"></td>
                                  <td class="s10"></td>
                                  <td class="s10"></td>
                                  <td class="s10"></td>
                                  <td class="s10"></td>
                                  <td class="s10"></td>
                                  <td class="s10"></td>
                                  <td class="s10"></td>
                                  <td class="s10"></td>
                                  <td class="s10"></td>
                                  <td class="s10"></td>
                                  <td class="s10"></td>
                                  <td class="s10" dir="ltr">BDT 25000</td>
                                  <td class="s10" dir="ltr">NO</td>
                                </tr>
                                <tr style="height: 20px">
                                  <th
                                    id="1472289553R13"
                                    style="height: 20px"
                                    class="row-headers-background"
                                  >
                                    <div class="row-header-wrapper" style="line-height: 20px">14</div>
                                  </th>
                                  <td class="s9" dir="ltr"></td>
                                  <td class="s10" dir="ltr">RMP</td>
                                  <td class="s10" dir="ltr">40 Hours/<br />4 Days</td>
                                  <td class="s10"></td>
                                  <td class="s10"></td>
                                  <td class="s10"></td>
                                  <td class="s10"></td>
                                  <td class="s10" dir="ltr">6, 13,<br />20, 27</td>
                                  <td class="s10"></td>
                                  <td class="s10"></td>
                                  <td class="s10"></td>
                                  <td class="s10"></td>
                                  <td class="s10"></td>
                                  <td class="s10"></td>
                                  <td class="s10"></td>
                                  <td class="s10" dir="ltr">BDT 25000</td>
                                  <td class="s10" dir="ltr">NO</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>


                            <!-- Pagination start -->

                            <!-- Pagination END -->
                        </div>
                        <!-- Left part END -->
                        <!-- Side bar start -->

                        <!-- Side bar END -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content END-->




@endsection
