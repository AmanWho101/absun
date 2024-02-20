<style>
    .gap-min {
        margin-bottom: 0px !important;
    }
</style>


@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Register
    @parent
@stop

{{-- page level styles --}}


@section('header_styles')

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="{{ asset('plugins/bs-stepper/css/bs-stepper.min.css') }}">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="{{ asset('plugins/dropzone/min/dropzone.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
@stop
{{-- breadcrumb --}}
@section('top')


    <div class="breadcum">

    </div>




@stop


{{-- Page content --}}
@section('content')


    <div class="container">
        <div class="row">
            <div class=" mt-5">
                <div class="card filterable">




                    <div class="card-header bg-primary text-white  clearfix">
                        <div class=" float-left">
                            <div class="caption font-weight-bold">

                                <h5> Please use this page to register. </h5>
                            </div>
                        </div>
                    </div>



                    <div class="card-body p-0">


                        <div class="bs-stepper linear">


                            {{-- <div class="col-md-12 col-sm-8"> --}}
                            <div class="bs-stepper-header " role="tablist">

                                <div class="row">

                                    <div class="col-sm-2 col-md-3 col">
                                        <div class="step active " data-target="#Personal-details">
                                            <button type="button" class="step-trigger col-md-12" role="tab"
                                                aria-controls="Personal-details" id="Personal-details-trigger"
                                                aria-selected="true">
                                                <span class="bs-stepper-circle">1</span>
                                                <span class="bs-stepper-label">Personal Details</span>
                                            </button>
                                        </div>
                                    </div>

                                    {{-- <div class="line col-sm-1"></div> --}}

                                    <div class="col-sm-2 col-md-3 col">
                                        <div class="step" data-target="#information-part1 ">
                                            <button type="button" class="step-trigger col-md-12" role="tab"
                                                aria-controls="information-part1" id="information-part1-trigger"
                                                aria-selected="false" disabled="disabled">
                                                <span class="bs-stepper-circle">2</span>
                                                <span class="bs-stepper-label">Permanent Address</span>
                                            </button>
                                        </div>
                                    </div>


                                    {{-- <div class="line"></div> --}}

                                    <div class="col-sm-2 col-md-3 col">
                                        <div class="step" data-target="#information-part2">
                                            <button type="button" class="step-trigger col-md-12" role="tab"
                                                aria-controls="information-part2" id="information-part2-trigger"
                                                aria-selected="false" disabled="disabled">
                                                <span class="bs-stepper-circle">3</span>
                                                <span class="bs-stepper-label">Your Banking Details </span>
                                            </button>
                                        </div>
                                    </div>

                                    {{-- <div class="line col-sm-1"></div> --}}

                                    <div class="col-sm-2 col-md-3 col">
                                        <div class="step" data-target="#information-part3">
                                            <button type="button" class="step-trigger col-md-12" role="tab"
                                                aria-controls="information-part3" id="information-part3-trigger"
                                                aria-selected="false" disabled="disabled">
                                                <span class="bs-stepper-circle">4</span>
                                                <span class="bs-stepper-label ">Educational <br>Qualification</span>
                                            </button>
                                        </div>
                                    </div>

                                    {{-- <div class="line col-sm-1"></div> --}}

                                    <div class="col-sm-2 col-md-3 col">
                                        <div class="step" data-target="#information-part4">
                                            <button type="button" class="step-trigger col-md-12" role="tab"
                                                aria-controls="information-part4" id="information-part4-trigger"
                                                aria-selected="false" disabled="disabled">
                                                <span class="bs-stepper-circle">5</span>
                                                <span class="bs-stepper-label ">Work <br>Experience Details*</span>
                                            </button>
                                        </div>
                                    </div>

                                    {{-- <div class="line col-sm-1"></div> --}}

                                    <div class="col-sm-2 col-md-3 col">
                                        <div class="step" data-target="#information-part5">
                                            <button type="button" class="step-trigger col-md-12" role="tab"
                                                aria-controls="information-part" id="information-part5-trigger"
                                                aria-selected="false" disabled="disabled">
                                                <span class="bs-stepper-circle">6</span>
                                                <span class="bs-stepper-label ">Consultancy <br> Experience</span>
                                            </button>
                                        </div>
                                    </div>

                                    {{-- <div class="line col-sm-1"></div> --}}
                                    <div class="col-sm-2 col-md-3 col">
                                        <div class="step" data-target="#information-part6">
                                            <button type="button" class="step-trigger col-md-12" role="tab"
                                                aria-controls="information-part6" id="information-part6-trigger"
                                                aria-selected="false" disabled="disabled">
                                                <span class="bs-stepper-circle">7</span>
                                                <span class="bs-stepper-label ">Declaration*</span>
                                            </button>
                                        </div>
                                    </div>

                                </div>

                                <!-- your steps here -->


                            </div>

                            {{-- </div> --}}


                            <div class="bs-stepper-content   ">
                                <!-- your steps content here -->

                                {{-- 1st form --}}


                                <div id="Personal-details" class="content active dstepper-block" role="tabpanel"
                                    aria-labelledby="Personal-details-trigger">

                                    <div class="row">
                                        <div class="col-sm-4 col-md-4">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label class="mb-0">First Name </label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter First Name">
                                            </div>
                                        </div>

                                        <div class="col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <label class="mb-0">Midlle Name</label>
                                                <input type="password" class="form-control"
                                                    placeholder="Enter Midlle Name">
                                            </div>
                                        </div>

                                        <div class="col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <label class="mb-0">Last Name</label>
                                                <input type="password" class="form-control"
                                                    placeholder="Enter Last Name">
                                            </div>
                                        </div>

                                        <div class="col-sm-4 col-md-4">

                                            <div class="form-group">
                                                <label class="mb-0">Date of Birth</label>
                                                <div class="input-group date" id="reservationdate"
                                                    data-target-input="nearest">
                                                    <input type="text" class="form-control datetimepicker-input"
                                                        placeholder="Enter Date of Birth (dd/mm/yyyy)"
                                                        data-target="#reservationdate">
                                                    <div class="input-group-append" data-target="#reservationdate"
                                                        data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 col-md-4">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label class="mb-0">Nationality</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter your Nationality">
                                            </div>
                                        </div>

                                        <div class="col-sm-4 col-md-4">
                                            <!-- text input -->
                                            <div class="form-group" data-select2-id="90">
                                                <label class="mb-0">Language </label>
                                                <select class="select2bs4 select2-hidden-accessible" multiple=""
                                                    data-placeholder="Select Multiple Languages" style="width: 100%;"
                                                    aria-hidden="true">
                                                    <option>english</option>
                                                    <option>afaan oromoo</option>
                                                    <option>French</option>
                                                    <option>tigrigna</option>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="col-sm-4 col-md-4">

                                            <div class="form-group">
                                                <label class="mb-0">Gender</label>

                                                <select class="form-control">
                                                    <option hidden selected="selected">Select Gender</option>
                                                    <option>Female</option>
                                                    <option>Male</option>
                                                </select>

                                            </div>

                                        </div>
                                        <div class="col-sm-4 col-md-4">
                                            <!-- text input -->
                                            <div class="form-group">

                                                <label class="mb-0">Profile Image </label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="customFile">
                                                    <label class="custom-file-label" for="customFile"> Select Profile
                                                        Image</label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-primary" onclick="stepper.next()">Next</button>

                                </div>


                                {{-- 2nd form --}}


                                <div id="information-part1" class="content" role="tabpanel"
                                    aria-labelledby="information-part1-trigger">


                                    <div class="row">
                                        <div class="col-sm-4 col-md-4">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label class="mb-0">County</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter your County">
                                            </div>
                                        </div>

                                        <div class="col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <label class="mb-0">Region/state</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter your Region">
                                            </div>

                                        </div>

                                        <div class="col-sm-4 col-md-4">

                                            <div class="form-group">
                                                <label class="mb-0">Zones</label>
                                                <input type="text" class="form-control" placeholder="Enter Zones">
                                            </div>
                                        </div>

                                        <div class="col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <label class="mb-0">City</label>
                                                <input type="text" class="form-control" placeholder="Enter City">
                                            </div>

                                        </div>

                                        <div class="col-sm-4 col-md-4">
                                            <!-- text input -->

                                            <div class="form-group">
                                                <label class="mb-0">Woredas (Districts)</label>
                                                <input type="text" class="form-control" placeholder="Enter Woreda">
                                            </div>
                                        </div>

                                        <div class="col-sm-4 col-md-4">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label class="mb-0">Kebeles (Wards)</label>
                                                <input type="text" class="form-control" placeholder="Enter Kebeles">
                                            </div>
                                        </div>



                                        <div class="col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <label class="mb-0">Email</label>
                                                <input type="email" class="form-control" placeholder="Enter Email">
                                            </div>

                                        </div>

                                        <div class="col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <label class="mb-0">Phone Number</label>
                                                <input type="tel" class="form-control" placeholder="Enter Phone">
                                            </div>

                                        </div>
                                        <div class="col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <label class="mb-0">Post code</label>
                                                <input type="text" class="form-control" placeholder="Enter Post code">
                                            </div>

                                        </div>


                                    </div>




                                    <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                                    <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                                </div>

                                {{-- 3rd form --}}


                                <div id="information-part2" class="content" role="tabpanel"
                                    aria-labelledby="information-part2-trigger">


                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="mb-0">Bank Type* </label>
                                                <select class="form-control">
                                                    <option hidden selected> Select bank
                                                    </option>

                                                    <option>Commercial Bank of Ethiopia (CBE)</option>

                                                    <option>Bank of Abyssinia</option>

                                                    <option>Awash Bank</option>

                                                    <option>Dashen Bank </option>

                                                    <option>Berhan Bank </option>

                                                    <option>Hibret Bank </option>

                                                    <option>Gadaa Bank </option>

                                                    <option>Lion Bank </option>

                                                    <option>Oromia Bank </option>

                                                    <option>Siinqee Bank </option>

                                                    <option>Tsehay Bank </option>

                                                    <option>Wegagen Bank </option>

                                                    <option>Zemen Bank </option>

                                                    <option>ZamZam Bank </option>

                                                    <option>Tsedey Bank </option>

                                                    <option>Cooperative Bank of Oromia </option>

                                                    <option>Bunna Bank </option>

                                                    <option> Addis International Bank </option>

                                                    <option> Abay Bank </option>

                                                    <option>Ahadu Bank </option>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="col-sm-4">

                                            <label class="mb-0">Account Number*</label>
                                            <input type="text" class="form-control"
                                                placeholder="Enter your banck account number">

                                        </div>

                                        <div class="col-sm-4">

                                            <div class="form-group">

                                                <label class="mb-0">Are You Vat Registered?</label>
                                                <br>

                                                <div class="form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input"
                                                            name="optradio">Yes</label>
                                                </div>

                                                <div class="form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="optradio">No
                                                    </label>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-sm-4">

                                            <div class="form-group">
                                                <label class="mb-0">Tax Payer Number</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter your Tax Payer Number">

                                            </div>

                                        </div>


                                    </div>




                                    <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                                    <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                                </div>

                                {{-- 4th form --}}

                                <div id="information-part3" class="content" role="tabpanel"
                                    aria-labelledby="information-part3-trigger">


                                    <div class="row mb-3">



                                        <div class="col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <label class="mb-0">Area of Specialization/ Field Department*</label>
                                                <select class="form-control">
                                                    <option hidden selected>Choose...</option>
                                                    <option>Aerospace engineering</option>
                                                    <option>Chemical engineering</option>
                                                    <option>Civil engineering</option>
                                                    <option>Construction engineering</option>
                                                    <option>Electrical Engineering</option>
                                                    <option>Electrical Engineering</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <label class="mb-0">Academic Rank*</label>
                                                <select class="form-control">
                                                    <option hidden selected>Choose...</option>
                                                    <option>M.Sc./MA</option>
                                                    <option>PHD</option>
                                                    <option>Civil engineering</option>
                                                    <option>Assistant professor</option>
                                                    <option>Associate Professor</option>
                                                    <option>Full professor</option>
                                                    <option>Emeritus</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 col-md-4">

                                            <label class="mb-0">Educational qualification in order(B.Sc/B.A.)*</label>


                                            <button type="button" class="btn btn-primary btn-lg btn-block"
                                                data-toggle="modal" data-target=".educational" data-backdrop="static"
                                                data-keyboard="false">ADD</button>

                                            <div class="modal fade educational" tabindex="-1" role="dialog"
                                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">

                                                        <div class="container">


                                                            <div class="modal-header">
                                                                <h5 id="myLargeModalLabel">
                                                                    Educational qualification in chorological order
                                                                    beginning with first university (B.Sc./B.A.)</h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>

                                                            <div class="container">

                                                                <div class="row">

                                                                    <div class="">No</div>

                                                                    <div class="col-md-3">Institution/university </div>

                                                                    <div class="col-md-3">country</div>

                                                                    <div class="col-md-3"> Degree/diploma/certificate
                                                                        obtained </div>
                                                                    <div class="col-md-2"> CGPA
                                                                    </div>

                                                                </div>

                                                                <div class="row">
                                                                    <div>1</div>
                                                                    <div class="col">
                                                                        <input type="text" class="form-control"
                                                                            name="myInputs[]">
                                                                    </div>
                                                                    <div class="col"><input type="text"
                                                                            class="form-control" name="myInputs[]"></div>
                                                                    <div class="col"><input type="text"
                                                                            class="form-control" name="myInputs[]"></div>
                                                                    <div class="col"><input type="text"
                                                                            class="form-control" name="myInputs[]"></div>


                                                                    <div>
                                                                        {{-- <button class="btn btn-primary "
                                                                            onclick="addInput()">
                                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                                        </button> --}}
                                                                    </div>
                                                                </div>


                                                                <br>


                                                                <div id="table">
                                                                </div>

                                                            </div>

                                                            <div class="modal-footer">
                                                                <div class="container">

                                                                    <div class="row">


                                                                        <div class="col-md-6">

                                                                            <button
                                                                                class="btn btn-lg btn-primary btn-block"
                                                                                onclick="education_addInput()">
                                                                                If Any [Add]
                                                                            </button>

                                                                        </div>




                                                                        <div class="col-md-6">
                                                                            <button type="button"
                                                                                class="btn btn-lg btn-success btn-block"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                Save
                                                                            </button>


                                                                        </div>


                                                                    </div>
                                                                </div>





                                                            </div>


                                                        </div>

                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                        {{-- education background --}}

                                        <script>
                                            var education_counter = 1;
                                            var dynamicInput = [];
                                            // <input type="button" value="-" onClick="removeInput(dynamicInput[counter])">
                                            function education_addInput() {
                                                // alert('');
                                                var education = document.createElement('div');
                                                // newdiv.id = dynamicInput[counter];

                                                education.innerHTML = '<div class="row">' +
                                                    '<div>' + (education_counter + 1) + '</div>' +
                                                    '<div class="col"><input type="text"  class="form-control" name="myInputs[]"></div>' +
                                                    '<div class="col"><input type="text" class="form-control" name="myInputs[]"></div>' +
                                                    '<div class="col"><input type="text" class="form-control" name="myInputs[]"></div>' +
                                                    '<div class="col"><input type="text" class="form-control" name="myInputs[]"></div>' +

                                                    '<button value="-" onClick="removeInput(this)" class="btn btn-outline-danger">' +
                                                    '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">' +
                                                    '<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"></path>' +
                                                    '<path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"></path>' +
                                                    '</svg></div><br>';

                                                document.getElementById('table').appendChild(education);
                                                education_counter++;
                                            }

                                            function removeInput(btn) {

                                                btn.parentNode.parentNode.remove();
                                            }
                                        </script>

                                        <div class="col-sm-4 col-md-4">

                                            <label class="mb-0">Research Publication/Conference</label>
                                            <div class="row"></div>

                                            <button type="button" class="btn btn-large btn-primary btn-lg btn-block"
                                                data-toggle="modal" data-target=".research" data-backdrop="static"
                                                data-keyboard="false">ADD</button>

                                            <div class="modal fade research" tabindex="-1" role="dialog"
                                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">

                                                        <div class="container">


                                                            <div class="modal-header">
                                                                <h5 class="modal-title h4" id="myLargeModalLabel">Research
                                                                    Publication/Conference</h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>

                                                            <div class="container">

                                                                <div class="row">

                                                                    <div class="">No</div>

                                                                    <div class="col">Name of journal</div>

                                                                    <div class="col">Title</div>

                                                                    <div class="col">Type</div>
                                                                    <div class="col"> Volume Number</div>
                                                                    <div class="col">Pages</div>

                                                                </div>

                                                                <div class="row">

                                                                    <div>1</div>
                                                                    <div class="col">
                                                                        <input type="text" class="form-control"
                                                                            name="myInputs[]">
                                                                    </div>
                                                                    <div class="col"><input type="text"
                                                                            class="form-control" name="myInputs[]"></div>
                                                                    <div class="col"><input type="text"
                                                                            class="form-control" name="myInputs[]"></div>
                                                                    <div class="col"><input type="text"
                                                                            class="form-control" name="myInputs[]"></div>
                                                                    <div class="col"><input type="text"
                                                                            class="form-control" name="myInputs[]"></div>


                                                                    <div>

                                                                        {{-- <button class="btn btn-primary "
                                                                            onclick="addInput()">
                                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                                        </button> --}}

                                                                    </div>

                                                                </div>


                                                                <br>


                                                                <div id="research1">
                                                                </div>

                                                            </div>

                                                            <div class="modal-footer">
                                                                <div class="container">

                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <button
                                                                                class="btn btn-lg btn-primary btn-block"
                                                                                onclick="research_addInput()">
                                                                                If Any [Add]
                                                                            </button>

                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <button type="button"
                                                                                class="btn btn-lg btn-success btn-block"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                Save
                                                                            </button>

                                                                        </div>


                                                                    </div>
                                                                </div>





                                                            </div>




                                                        </div>

                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                        {{-- research background --}}

                                        <script>
                                            var counter = 1;
                                            var dynamicInput = [];
                                            // <input type="button" value="-" onClick="removeInput(dynamicInput[counter])">
                                            function research_addInput() {
                                                // alert('');
                                                var research = document.createElement('div');
                                                // newdiv.id = dynamicInput[counter];

                                                research.innerHTML = '<div class="row">' +
                                                    '<div>' + (counter + 1) + '</div>' +
                                                    '<div class="col"><input type="text"  class="form-control" name="myInputs[]"></div>' +
                                                    '<div class="col"><input type="text" class="form-control" name="myInputs[]"></div>' +
                                                    '<div class="col"><input type="text" class="form-control" name="myInputs[]"></div>' +
                                                    '<div class="col"><input type="text" class="form-control" name="myInputs[]"></div>' +
                                                    '<div class="col"><input type="text" class="form-control" name="myInputs[]"></div>' +

                                                    '<button value="-" onClick="removeInput(this)" class="btn btn-outline-danger">' +
                                                    '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">' +
                                                    '<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"></path>' +
                                                    '<path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"></path>' +
                                                    '</svg></div><br>';

                                                document.getElementById('research1').appendChild(research);
                                                counter++;
                                            }

                                            function removeInput(btn) {

                                                btn.parentNode.parentNode.remove();
                                            }
                                        </script>


                                        <div class="col-sm-4 col-md-4">

                                            <label class="mb-0">Award Honors and Completed Projects</label>
                                            <div class="row"></div>

                                            <button type="button" class="btn btn-large btn-primary btn-lg btn-block"
                                                data-toggle="modal" data-target=".award" data-backdrop="static"
                                                data-keyboard="false">
                                                ADD</button>

                                            <div class="modal fade award" tabindex="-1" role="dialog"
                                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">

                                                        <div class="container">


                                                            <div class="modal-header">
                                                                <h5 id="myLargeModalLabel">Award
                                                                    Honors and Completed Projects</h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>

                                                            <div class="container">

                                                                <div class="row">

                                                                    <div class="">No</div>

                                                                    <div class="col">Award/project title</div>

                                                                    <div class="col">Place/institute/organization
                                                                    </div>

                                                                    <div class="col">date</div>

                                                                </div>

                                                                <div class="row">

                                                                    <div>1</div>

                                                                    <div class="col">
                                                                        <input type="text" class="form-control"
                                                                            name="myInputs[]">
                                                                    </div>

                                                                    <div class="col"><input type="text"
                                                                            class="form-control" name="myInputs[]"></div>

                                                                    <div class="col"><input type="text"
                                                                            class="form-control" name="myInputs[]"></div>


                                                                    <div>

                                                                        {{-- <button class="btn btn-primary "
                                                                            onclick="addInput()">
                                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                                        </button> --}}

                                                                    </div>

                                                                </div>


                                                                <br>


                                                                <div id="award1">
                                                                </div>

                                                            </div>

                                                            <div class="modal-footer">
                                                                <div class="container">

                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <button
                                                                                class="btn btn-lg btn-primary btn-block"
                                                                                onclick="award_addInput()">
                                                                                If Any [Add]
                                                                            </button>

                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <button type="button"
                                                                                class="btn btn-lg btn-success btn-block"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                Save
                                                                            </button>

                                                                        </div>


                                                                    </div>
                                                                </div>





                                                            </div>




                                                        </div>

                                                    </div>
                                                </div>
                                            </div>


                                        </div>



                                        {{-- award background --}}

                                        <script>
                                            var counter = 1;
                                            var dynamicInput = [];
                                            // <input type="button" value="-" onClick="removeInput(dynamicInput[counter])">
                                            function award_addInput() {
                                                // alert('');
                                                var award = document.createElement('div');
                                                // newdiv.id = dynamicInput[counter];

                                                award.innerHTML = '<div class="row">' +
                                                    '<div>' + (counter + 1) + '</div>' +
                                                    '<div class="col"><input type="text"  class="form-control" name="myInputs[]"></div>' +
                                                    '<div class="col"><input type="text" class="form-control" name="myInputs[]"></div>' +
                                                    '<div class="col"><input type="text" class="form-control" name="myInputs[]"></div>' +

                                                    '<button value="-" onClick="removeInput(this)" class="btn btn-outline-danger">' +
                                                    '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">' +
                                                    '<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"></path>' +
                                                    '<path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"></path>' +
                                                    '</svg></div><br>';

                                                document.getElementById('award1').appendChild(award);
                                                counter++;
                                            }

                                            function removeInput(btn) {

                                                btn.parentNode.parentNode.remove();
                                            }
                                        </script>

                                        <div class="col-sm-4 col-md-4">

                                            <label class="mb-0">Professional License</label>
                                            <div class="row"></div>

                                            <button type="button" class="btn btn-large btn-primary btn-lg btn-block"
                                                data-toggle="modal" data-target=".license" data-backdrop="static"
                                                data-keyboard="false">ADD</button>

                                            <div class="modal fade license" tabindex="-1" role="dialog"
                                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">

                                                        <div class="container">

                                                            <div class="modal-header">
                                                                <h5 id="myLargeModalLabel">
                                                                    Engineering professional license, construction
                                                                    professional license. Etc.</h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>



                                                            <div class="container">

                                                                <div class="row">

                                                                    <div class="">No</div>

                                                                    <div class="col">License/certificate Title or Name
                                                                    </div>

                                                                    <div class="col">ID No</div>

                                                                    <div class="col">Date Given</div>

                                                                </div>

                                                                <div class="row">

                                                                    <div>1</div>

                                                                    <div class="col">
                                                                        <input type="text" class="form-control"
                                                                            name="myInputs[]">
                                                                    </div>

                                                                    <div class="col"><input type="text"
                                                                            class="form-control" name="myInputs[]"></div>

                                                                    <div class="col"><input type="text"
                                                                            class="form-control" name="myInputs[]"></div>


                                                                    <div>

                                                                        {{-- <button class="btn btn-primary "
                                                                            onclick="addInput()">
                                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                                        </button> --}}

                                                                    </div>

                                                                </div>


                                                                <br>


                                                                <div id="license1">
                                                                </div>

                                                            </div>

                                                            <div class="modal-footer">
                                                                <div class="container">

                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <button
                                                                                class="btn btn-lg btn-primary btn-block"
                                                                                onclick="license_addInput()">
                                                                                If Any [Add]
                                                                            </button>

                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <button type="button"
                                                                                class="btn btn-lg btn-success btn-block"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                Save
                                                                            </button>

                                                                        </div>


                                                                    </div>
                                                                </div>





                                                            </div>




                                                        </div>





                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        {{-- license background --}}

                                        <script>
                                            var counter = 1;
                                            var dynamicInput = [];
                                            // <input type="button" value="-" onClick="removeInput(dynamicInput[counter])">
                                            function license_addInput() {
                                                // alert('');
                                                var license = document.createElement('div');
                                                // newdiv.id = dynamicInput[counter];

                                                license.innerHTML = '<div class="row">' +
                                                    '<div>' + (counter + 1) + '</div>' +
                                                    '<div class="col"><input type="text"  class="form-control" name="myInputs[]"></div>' +
                                                    '<div class="col"><input type="text" class="form-control" name="myInputs[]"></div>' +
                                                    '<div class="col"><input type="text" class="form-control" name="myInputs[]"></div>' +

                                                    '<button value="-" onClick="removeInput(this)" class="btn btn-outline-danger">' +
                                                    '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">' +
                                                    '<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"></path>' +
                                                    '<path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"></path>' +
                                                    '</svg></div><br>';

                                                document.getElementById('license1').appendChild(license);
                                                counter++;
                                            }

                                            function removeInput(btn) {

                                                btn.parentNode.parentNode.remove();
                                            }
                                        </script>


                                        <div class="col-sm-4 col-md-4 mt-2">

                                            <label class="mb-0">Professional Associations and Foundations</label>
                                            <div class="row"></div>

                                            <button type="button" class="btn btn-large btn-primary btn-lg btn-block"
                                                data-toggle="modal" data-target=".professional" data-backdrop="static"
                                                data-keyboard="false">ADD</button>

                                            <div class="modal fade professional" tabindex="-1" role="dialog"
                                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">

                                                        <div class="container">

                                                            <div class="modal-header">
                                                                <h5 class="modal-title h4" id="myLargeModalLabel">
                                                                    Society of Mechanical Engineer, Ethiopian Economics
                                                                    Association, Etc. Nonprofits (Foundations, Churches,
                                                                    Charities, Etc.)
                                                                </h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>


                                                            <div class="container">

                                                                <div class="row">

                                                                    <div class="">No</div>

                                                                    <div class="col">Professional Associations and
                                                                        Foundations name /Title
                                                                    </div>

                                                                    <div class="col">Responsibility</div>

                                                                    <div class="col">Date Started</div>

                                                                </div>

                                                                <div class="row">

                                                                    <div>1</div>

                                                                    <div class="col">
                                                                        <input type="text" class="form-control"
                                                                            name="myInputs[]">
                                                                    </div>

                                                                    <div class="col"><input type="text"
                                                                            class="form-control" name="myInputs[]"></div>

                                                                    <div class="col"><input type="text"
                                                                            class="form-control" name="myInputs[]"></div>


                                                                    <div>

                                                                        {{-- <button class="btn btn-primary "
                                                                            onclick="addInput()">
                                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                                        </button> --}}

                                                                    </div>

                                                                </div>


                                                                <br>


                                                                <div id="foundation1">
                                                                </div>

                                                            </div>

                                                            <div class="modal-footer">
                                                                <div class="container">

                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <button
                                                                                class="btn btn-lg btn-primary btn-block"
                                                                                onclick="foundation_addInput()">
                                                                                If Any [Add]
                                                                            </button>

                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <button type="button"
                                                                                class="btn btn-lg btn-success btn-block"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                Save
                                                                            </button>

                                                                        </div>


                                                                    </div>
                                                                </div>





                                                            </div>



                                                        </div>

                                                    </div>
                                                </div>
                                            </div>


                                        </div>



                                        {{-- foundation background --}}

                                        <script>
                                            var counter = 1;
                                            var dynamicInput = [];
                                            // <input type="button" value="-" onClick="removeInput(dynamicInput[counter])">
                                            function foundation_addInput() {
                                                // alert('');
                                                var foundation = document.createElement('div');
                                                // newdiv.id = dynamicInput[counter];

                                                foundation.innerHTML = '<div class="row">' +
                                                    '<div>' + (counter + 1) + '</div>' +
                                                    '<div class="col"><input type="text"  class="form-control" name="myInputs[]"></div>' +
                                                    '<div class="col"><input type="text" class="form-control" name="myInputs[]"></div>' +
                                                    '<div class="col"><input type="text" class="form-control" name="myInputs[]"></div>' +

                                                    '<button value="-" onClick="removeInput(this)" class="btn btn-outline-danger">' +
                                                    '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">' +
                                                    '<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"></path>' +
                                                    '<path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"></path>' +
                                                    '</svg></div><br>';

                                                document.getElementById('foundation1').appendChild(foundation);
                                                counter++;
                                            }

                                            function removeInput(btn) {

                                                btn.parentNode.parentNode.remove();
                                            }
                                        </script>

                                    </div>



                                    <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                                    <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                                </div>

                                {{-- 5th form --}}

                                <div id="information-part4" class="content" role="tabpanel"
                                    aria-labelledby="information-part4-trigger">


                                    <div class="row">
                                        <div class="col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <label class="mb-0">Type*</label>
                                                <select class="form-control">
                                                    <option hidden selected="">Choose...</option>
                                                    <option>Government</option>
                                                    <option>Semi Government</option>
                                                    <option>Non-Government (NGO)</option>
                                                    <option>Private Company</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <label class="mb-0">Work place Affiliation/organization</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter organization">
                                            </div>
                                        </div>

                                        <div class="col-sm-4 col-md-4">
                                            <div class="form-group">
                                                <label class="mb-0">Nature of job/service</label>
                                                <select class="form-control">
                                                    <option hidden selected="">Choose...</option>
                                                    <option>Teaching</option>
                                                    <option>Industry</option>
                                                    <option>Researcher</option>
                                                    <option>Manager</option>
                                                    <option>Expertise</option>
                                                    <option>others</option>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-3 col-sm-4 col-md-4">

                                            <label class="mb-0">Attested copy of proof</label>
                                            <div class="row"></div>

                                            <button type="button" class="btn btn-large btn-primary btn-lg btn-block"
                                                data-toggle="modal" data-target=".proof" data-backdrop="static"
                                                data-keyboard="false">ADD</button>

                                            <div class="modal fade proof " tabindex="-1" role="dialog"
                                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">

                                                        <div class="container">

                                                            <div class="modal-header">
                                                                <h5 class="modal-title h4" id="myLargeModalLabel">
                                                                    Work experience in chorological order starting with
                                                                    first job. (Attested copy of proof of each experience to
                                                                    be attached) </h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>

                                                            <div class="container">

                                                                <div class="row">

                                                                    <div class="">No</div>

                                                                    <div class="col">company</div>

                                                                    <div class="col">Department </div>

                                                                    <div class="col">Scale</div>
                                                                    <div class="col">Duration</div>
                                                                    <div class="col">Job title</div>
                                                                    <div class="col">Total experience</div>

                                                                </div>

                                                                <div class="row">

                                                                    <div>1</div>

                                                                    <div class="col">
                                                                        <input type="text" class="form-control"
                                                                            name="myInputs[]">
                                                                    </div>

                                                                    <div class="col"><input type="text"
                                                                            class="form-control" name="myInputs[]"></div>

                                                                    <div class="col"><input type="text"
                                                                            class="form-control" name="myInputs[]"></div>
                                                                    <div class="col"><input type="text"
                                                                            class="form-control" name="myInputs[]"></div>
                                                                    <div class="col"><input type="text"
                                                                            class="form-control" name="myInputs[]"></div>
                                                                    <div class="col"><input type="text"
                                                                            class="form-control" name="myInputs[]"></div>

                                                                    <div>

                                                                        {{-- <button class="btn btn-primary "
                                                                            onclick="addInput()">
                                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                                        </button> --}}

                                                                    </div>

                                                                </div>


                                                                <br>


                                                                <div id="proof1">
                                                                </div>

                                                            </div>

                                                            <div class="modal-footer">
                                                                <div class="container">

                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <button
                                                                                class="btn btn-lg btn-primary btn-block"
                                                                                onclick="proof_addInput()">
                                                                                If Any [Add]
                                                                            </button>

                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <button type="button"
                                                                                class="btn btn-lg btn-success btn-block"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                Save
                                                                            </button>

                                                                        </div>


                                                                    </div>
                                                                </div>





                                                            </div>


                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        {{-- proof background --}}

                                        <script>
                                            var counter = 1;
                                            var dynamicInput = [];
                                            // <input type="button" value="-" onClick="removeInput(dynamicInput[counter])">
                                            function proof_addInput() {
                                                // alert('');
                                                var proof = document.createElement('div');
                                                // newdiv.id = dynamicInput[counter];

                                                proof.innerHTML = '<div class="row">' +
                                                    '<div>' + (counter + 1) + '</div>' +
                                                    '<div class="col"><input type="text"  class="form-control" name="myInputs[]"></div>' +
                                                    '<div class="col"><input type="text" class="form-control" name="myInputs[]"></div>' +
                                                    '<div class="col"><input type="text" class="form-control" name="myInputs[]"></div>' +
                                                    '<div class="col"><input type="text" class="form-control" name="myInputs[]"></div>' +
                                                    '<div class="col"><input type="text" class="form-control" name="myInputs[]"></div>' +
                                                    '<div class="col"><input type="text" class="form-control" name="myInputs[]"></div>' +

                                                    '<button value="-" onClick="removeInput(this)" class="btn btn-outline-danger">' +
                                                    '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">' +
                                                    '<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"></path>' +
                                                    '<path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"></path>' +
                                                    '</svg></div><br>';

                                                document.getElementById('proof1').appendChild(proof);
                                                counter++;
                                            }

                                            function removeInput(btn) {

                                                btn.parentNode.parentNode.remove();
                                            }
                                        </script>

                                    </div>




                                    <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                                    <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                                </div>

                                {{-- 6th form --}}

                                <div id="information-part5" class="content" role="tabpanel"
                                    aria-labelledby="information-part5-trigger">


                                    <div class="row">
                                        <div class="mb-3 col-sm-4 col-md-4">

                                            <label class="mb-0">Consultancy Experience</label>
                                            <div class="row"></div>

                                            <button type="button" class="btn btn-large btn-primary btn-lg btn-block"
                                                data-toggle="modal" data-target=".experience" data-backdrop="static"
                                                data-keyboard="false">ADD</button>

                                            <div class="modal fade experience " tabindex="-1" role="dialog"
                                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">

                                                        <div class="container">

                                                            <div class="modal-header">
                                                                <h5 id="myLargeModalLabel">
                                                                    Consultancy experience in chorological order starting
                                                                    with first consultancy. (Attested copy of proof of each
                                                                    certificate to be attached)
                                                                </h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>



                                                            <div class="container">

                                                                <div class="row">

                                                                    <div class="">No</div>

                                                                    <div class="col">Institute/Company</div>

                                                                    <div class="col">Areas of consulted</div>

                                                                    <div class="col">Duration From-To</div>

                                                                </div>

                                                                <div class="row">

                                                                    <div>1</div>

                                                                    <div class="col">
                                                                        <input type="text" class="form-control"
                                                                            name="myInputs[]">
                                                                    </div>

                                                                    <div class="col"><input type="text"
                                                                            class="form-control" name="myInputs[]"></div>

                                                                    <div class="col"><input type="text"
                                                                            class="form-control" name="myInputs[]"></div>

                                                                    <div>

                                                                        {{-- <button class="btn btn-primary "
                                                                            onclick="addInput()">
                                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                                        </button> --}}

                                                                    </div>

                                                                </div>


                                                                <br>


                                                                <div id="consultancy1">
                                                                </div>

                                                            </div>

                                                            <div class="modal-footer">
                                                                <div class="container">

                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <button
                                                                                class="btn btn-lg btn-primary btn-block"
                                                                                onclick="consultancy_addInput()">
                                                                                If Any [Add]
                                                                            </button>

                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <button type="button"
                                                                                class="btn btn-lg btn-success btn-block"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                Save
                                                                            </button>

                                                                        </div>


                                                                    </div>
                                                                </div>



                                                            </div>


                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                        {{-- consultancy background --}}

                                        <script>
                                            var counter = 1;
                                            var dynamicInput = [];
                                            // <input type="button" value="-" onClick="removeInput(dynamicInput[counter])">
                                            function consultancy_addInput() {
                                                // alert('');
                                                var consultancy = document.createElement('div');
                                                // newdiv.id = dynamicInput[counter];

                                                consultancy.innerHTML = '<div class="row">' +
                                                    '<div>' + (counter + 1) + '</div>' +
                                                    '<div class="col"><input type="text"  class="form-control" name="myInputs[]"></div>' +
                                                    '<div class="col"><input type="text" class="form-control" name="myInputs[]"></div>' +
                                                    '<div class="col"><input type="text" class="form-control" name="myInputs[]"></div>' +

                                                    '<button value="-" onClick="removeInput(this)" class="btn btn-outline-danger">' +
                                                    '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">' +
                                                    '<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"></path>' +
                                                    '<path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"></path>' +
                                                    '</svg></div><br>';

                                                document.getElementById('consultancy1').appendChild(consultancy);
                                                counter++;
                                            }

                                            function removeInput(btn) {

                                                btn.parentNode.parentNode.remove();
                                            }
                                        </script>


                                        <div class="col-sm-4 col-md-4">

                                            <div class="form-group">

                                                <label class="mb-0" for="exampleInputFile">Upload CV and Document
                                                    Here</label>

                                                <div class="row"></div>

                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            id="exampleInputFile">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose
                                                            file</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">Upload</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>



                                    <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                                    <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                                </div>

                                {{-- 7th form --}}

                                <div id="information-part6" class="content" role="tabpanel"
                                    aria-labelledby="information-part6-trigger">

                                    <div class="row ">

                                        <div class="col-sm-6 col-lg-8 offset-md-2">

                                            <div class="form-group " style="aliment">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="invalidCheck2" required>
                                                    <h6 class="text-justify">
                                                        I hereby declare that the information provided herein above is
                                                        true, complete and correct to the best of my knowledge and
                                                        belief. In
                                                        the event of any information being found false or incorrect
                                                        during the
                                                        selection process, AB Sun General consultancy may cancel my
                                                        candidature or
                                                        selection to the post if selected. In such an eventuality, I
                                                        shall have no
                                                        objection even to initiating of criminal prosecution.
                                                    </h6>
                                                </div>

                                            </div>

                                        </div>


                                        <div class="col-sm-4 col-md-4">


                                        </div>

                                        <div class="col-sm-4 col-md-4">


                                        </div>

                                    </div>


                                    <div class="d-flex align-items-center justify-content-center">

                                        <button class="btn btn-primary " onclick="stepper.previous()">Previous</button>

                                        <button type="submit" class="p-2 m-2 btn btn-secondary ">Save and
                                            Submit
                                            Latter</button>
                                        <button type="submit" class="p-2 m-2 btn btn-warning">Pay
                                            Latter</button>

                                        <button type="submit"
                                            class="p-2 m-2 btn btn-success toastrDefaultSuccess font-weight-bold"
                                            id="btn3">Submit</button>
                                    </div>


                                </div>



                            </div>

                        </div>



                    </div>
                </div>
            </div>

        </div>
        <!-- /.card -->
    </div>





@stop

{{-- page level scripts --}}

@section('footer_scripts')
    <!-- page level js starts-->

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="{{ asset('plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}"></script>
    <!-- InputMask -->
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/inputmask/jquery.inputmask.min.js') }}"></script>
    <!-- date-range-picker -->
    <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- bootstrap color picker -->
    <script src="{{ asset('plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Bootstrap Switch -->
    <script src="{{ asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
    <!-- BS-Stepper -->
    <script src="{{ asset('plugins/bs-stepper/js/bs-stepper.min.js') }}"></script>
    <!-- dropzonejs -->
    <script src="{{ asset('plugins/dropzone/min/dropzone.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('dist/js/demo.js') }}"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', {
                'placeholder': 'dd/mm/yyyy'
            })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', {
                'placeholder': 'mm/dd/yyyy'
            })
            //Money Euro
            $('[data-mask]').inputmask()

            //Date picker
            $('#reservationdate').datetimepicker({
                format: 'L'
            });

            //Date and time picker
            $('#reservationdatetime').datetimepicker({
                icons: {
                    time: 'far fa-clock'
                }
            });

            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })
            //Date range as a button
            $('#daterange-btn').daterangepicker({
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                            'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
                        'MMMM D, YYYY'))
                }
            )

            //Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT'
            })

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            $('.my-colorpicker2').on('colorpickerChange', function(event) {
                $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            })

            $("input[data-bootstrap-switch]").each(function() {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })

        })
        // BS-Stepper Init
        document.addEventListener('DOMContentLoaded', function() {
            window.stepper = new Stepper(document.querySelector('.bs-stepper'))
        })

        // DropzoneJS Demo Code Start
        Dropzone.autoDiscover = false

        // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
        var previewNode = document.querySelector("#template")
        previewNode.id = ""
        var previewTemplate = previewNode.parentNode.innerHTML
        previewNode.parentNode.removeChild(previewNode)

        var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
            url: "/target-url", // Set the url
            thumbnailWidth: 80,
            thumbnailHeight: 80,
            parallelUploads: 20,
            previewTemplate: previewTemplate,
            autoQueue: false, // Make sure the files aren't queued until manually added
            previewsContainer: "#previews", // Define the container to display the previews
            clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
        })

        myDropzone.on("addedfile", function(file) {
            // Hookup the start button
            file.previewElement.querySelector(".start").onclick = function() {
                myDropzone.enqueueFile(file)
            }
        })

        // Update the total progress bar
        myDropzone.on("totaluploadprogress", function(progress) {
            document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
        })

        myDropzone.on("sending", function(file) {
            // Show the total progress bar when upload starts
            document.querySelector("#total-progress").style.opacity = "1"
            // And disable the start button
            file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
        })

        // Hide the total progress bar when nothing's uploading anymore
        myDropzone.on("queuecomplete", function(progress) {
            document.querySelector("#total-progress").style.opacity = "0"
        })

        // Setup the buttons for all transfers
        // The "add files" button doesn't need to be setup because the config
        // `clickable` has already been specified.
        document.querySelector("#actions .start").onclick = function() {
            myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
        }
        document.querySelector("#actions .cancel").onclick = function() {
            myDropzone.removeAllFiles(true)
        }

        // DropzoneJS Demo Code End
    </script>
    <!--page level js ends-->
@stop
