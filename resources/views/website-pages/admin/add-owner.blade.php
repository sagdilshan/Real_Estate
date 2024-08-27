@extends('dashboard-layouts.body')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Add Owners')
@section('body')


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Owners</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            {{-- <li class="breadcrumb-item"><a href=" ">Back</a></li> --}}
                            <li class="breadcrumb-item active">Add Owners</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content ">
            <div class="container-fluid ">
                <div class="row">

                    <!-- /.col -->
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="tab-content">


                                    <div class="active tab-pane" id="settings">
                                        <form method="POST" action=" " class="form-horizontal"
                                            enctype="multipart/form-data">
                                            @csrf



                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Owner Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="owner_name"
                                                        placeholder="Enter owner name" required>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Mobile Number</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="mobile"
                                                        placeholder="Enter mobile number" required id="mobile">
                                                </div>

                                                <label class="col-sm-2 col-form-label">Date Last Spoke</label>
                                                <div class="col-sm-4">
                                                    <input type="date" class="form-control" name="date_l_s"
                                                         required id="date_l_s">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Area</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="area"
                                                        placeholder="Enter area" required id="area">
                                                </div>

                                                <label class="col-sm-2 col-form-label">Price</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="price"
                                                        placeholder="Enter Price" required id="price">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">TYPE</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="type"
                                                        placeholder="Enter type" required id="type">
                                                </div>

                                                <label class="col-sm-2 col-form-label">Bedroom</label>
                                                <div class="col-sm-4">
                                                    <input type="number" class="form-control" name="bedroom"
                                                        placeholder="Enter bedroom" required id="bedroom">
                                                </div>
                                            </div>

                                            <div class="form-group row">


                                                <label class="col-sm-2 col-form-label">Bathroom</label>
                                                <div class="col-sm-4">
                                                    <input type="number" class="form-control" name="bathroom"
                                                        placeholder="Enter bathroom" required id="bathroom">
                                                </div>

                                                <label class="col-sm-2 col-form-label">Outdoor</label>
                                                <div class="col-sm-4">

                                                    <select class="form-control" name="outdoor">

                                                        <option value="no">No</option>
                                                        <option value="yes">Yes</option>

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">AC</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" name="ac">

                                                        <option value="no">No</option>
                                                        <option value="yes">Yes</option>

                                                    </select>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Floor</label>
                                                <div class="col-sm-4">
                                                    <input type="number" class="form-control" name="floor"
                                                        placeholder="Enter floor" required id="floor">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Lift</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" name="lift">

                                                        <option value="no">No</option>
                                                        <option value="yes">Yes</option>

                                                    </select>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Pet Freindly</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" name="pet_freindly">

                                                        <option value="no">No</option>
                                                        <option value="yes">Yes</option>

                                                    </select>
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Street</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="street"
                                                        placeholder="Enter street" required id="street">
                                                </div>

                                                <label class="col-sm-2 col-form-label">Fake Street</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="fake_street"
                                                        placeholder="Enter fake street" required id="fake_street">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Date Available</label>
                                                <div class="col-sm-4">
                                                    <input type="date" class="form-control" name="date_available"
                                                        placeholder="Enter street" required id="date_available">
                                                </div>

                                                <label class="col-sm-2 col-form-label">Page Link</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="page_links"
                                                        placeholder="Enter street" required id="page_links">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Comments</label>
                                                <div class="col-sm-10">
                                                    <textarea rows="4" class="form-control" name="comment" placeholder="Comments"></textarea>

                                                </div>
                                            </div>






                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-success">Save Details</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>


                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>


@endsection
