@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Consultant
    @parent
@stop

{{-- page level styles --}}


@section('header_styles')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

@stop
{{-- breadcrumb --}}
@section('top')


    <div class="breadcum">
        {{--  <div class="container">
            <div class="row">
                <div class="col-12">


                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18"
                                    data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                            </a>
                        </li>
                        <li class="d-none d-sm-block">
                            <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true"
                                data-c="#01bc8c" data-hc="#01bc8c"></i>
                            <a href="#">Search consultants </a>
                        </li>
                    </ol>

                    <div class="float-right mt-1">
                        <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d"
                            data-hc="#3d3d3d"></i> Search consultants
                    </div>
                </div>
            </div>
        </div> --}}
    </div>


@stop


{{-- Page content --}}
@section('content')
    {{--     <!-- Container Section Start -->
    <div class="container my-3">
        <!--Content Section Start -->
        <h2> &nbsp;&nbsp; write your content here</h2>
        <div style="height:350px;"></div>
        <!-- //Content Section End -->
    </div> --}}
    <div class="container">

        <div class="row">

            <div class="my-3 mt-5">
                <div class="col-lg-12">
                    <div class="card filterable">

                        <div class="card-header bg-primary text-white  clearfix">
                            <div class=" float-left">
                                <div class="caption font-weight-bold">
                                    <h5>An overview of consultants by ranks</h5>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4 my-2">

                                <h5>

                                    <label class="control-label caption font-weight-bold">Select Profession:</label>

                                </h5>

                                <select class="form-control" id="professions" name="professions">

                                    <option hidden selected="selected">Please Select One...</option>
                                    <option>Mechanical Engineers </option>
                                    <option>Select All</option>

                                </select>

                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive table-responsive-lg table-responsive-md table-responsive-sm">

                                <table class="table table-bordered width100 table-hover" id="table3">
                                    <thead>
                                        <tr class="filters">
                                            <th scope="col">S/No</th>
                                            <th scope="col">ID No</th>
                                            <th scope="col">Academic Rank</th>
                                            <th scope="col">Work Experience</th>
                                            <th scope="col">Consultancy Service</th>
                                            <th scope="col">Award and Projects </th>
                                            <th scope="col">Publication and Conference</th>
                                            <th scope="col">Professional License</th>
                                            <th scope="col">Rank</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            {{--                                             <th class="table-cell" scope="row">ABGC/ME/001/23</th>
 --}} <td>ABGC/ME/001/23</td>
                                            <td>Professor</td>
                                            <td>20</td>
                                            <td>30</td>
                                            <td>10</td>
                                            <td>15</td>
                                            <td>1</td>
                                            <td>1st</td>
                                        </tr>


                                        <tr>
                                            <td>2</td>
                                            <td>ABGC/Me/002/23</td>
                                            <td>PHD</td>
                                            <td>20</td>
                                            <td>30</td>
                                            <td>10</td>
                                            <td>15</td>
                                            <td>1</td>
                                            <td>2st</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop
