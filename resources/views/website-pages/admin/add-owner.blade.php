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
                                        <form method="POST" action="{{ route('store.owner') }}" class="form-horizontal"
                                            enctype="multipart/form-data">
                                            @csrf



                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Owner Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control @error('owner_name') is-invalid @enderror" name="owner_name"
                                                        placeholder="Enter owner name" required>
                                                    @error('owner_name')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Mobile Number</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile"
                                                        placeholder="Enter mobile number"  required id="mobile">
                                                    @error('mobile')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <label class="col-sm-2 col-form-label">Date Last Spoke</label>
                                                <div class="col-sm-4">
                                                    <input type="date" class="form-control @error('date_l_s') is-invalid @enderror" name="date_l_s" required
                                                        id="date_l_s" >
                                                    @error('date_l_s')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Area</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control @error('area') is-invalid @enderror" name="area"
                                                        placeholder="Enter area" required id="area"  >
                                                    @error('area')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <label class="col-sm-2 col-form-label">Price</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control @error('price') is-invalid @enderror" name="price"
                                                        placeholder="Enter Price" required id="price" >
                                                    @error('price')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">TYPE</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control @error('type') is-invalid @enderror" name="type"
                                                        placeholder="Enter type" required id="type" >
                                                    @error('type')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <label class="col-sm-2 col-form-label">Bedroom</label>
                                                <div class="col-sm-4">
                                                    <input type="number" class="form-control @error('bedroom') is-invalid @enderror" name="bedroom"
                                                        placeholder="Number of Bedrooms" required id="bedroom">
                                                    @error('bedroom')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">


                                                <label class="col-sm-2 col-form-label">Bathroom</label>
                                                <div class="col-sm-4">
                                                    <input type="number" class="form-control @error('bathroom') is-invalid @enderror" name="bathroom"
                                                        placeholder="Number of bathroom" required id="bathroom">
                                                    @error('bathroom')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <label class="col-sm-2 col-form-label">Outdoor</label>
                                                <div class="col-sm-4">

                                                    <select class="form-control @error('outdoor') is-invalid @enderror" name="outdoor">

                                                        <option value="no">No</option>
                                                        <option value="yes">Yes</option>

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">AC</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control @error('ac') is-invalid @enderror" name="ac">

                                                        <option value="no">No</option>
                                                        <option value="yes">Yes</option>

                                                    </select>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Floor</label>
                                                <div class="col-sm-4">
                                                    <input type="number" class="form-control @error('floor') is-invalid @enderror" name="floor"
                                                        placeholder="Number of floor" required id="floor">
                                                    @error('floor')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Lift</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control @error('lift') is-invalid @enderror" name="lift">

                                                        <option value="no">No</option>
                                                        <option value="yes">Yes</option>

                                                    </select>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Pet Freindly</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control @error('pet_freindly') is-invalid @enderror" name="pet_freindly">

                                                        <option value="no">No</option>
                                                        <option value="yes">Yes</option>

                                                    </select>
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Street</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control @error('street') is-invalid @enderror" name="street"
                                                        placeholder="Enter street" required id="street">
                                                    @error('street')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <label class="col-sm-2 col-form-label">Fake Street</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control @error('fake_street') is-invalid @enderror" name="fake_street"
                                                        placeholder="Enter fake street" required id="fake_street"  >
                                                    @error('fake_street')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Date Available</label>
                                                <div class="col-sm-4">
                                                    <input type="date" class="form-control @error('date_available') is-invalid @enderror" name="date_available"
                                                        placeholder="Enter street" required id="date_available">
                                                    @error('date_available')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <label class="col-sm-2 col-form-label">Page Link</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control @error('page_links') is-invalid @enderror" name="page_links"
                                                        placeholder="Enter page link" required id="page_links"  >
                                                    @error('page_links')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Comments</label>
                                                <div class="col-sm-10">
                                                    <textarea rows="4" class="form-control @error('comment') is-invalid @enderror" name="comment" placeholder="Comments"></textarea>
                                                    @error('comment')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
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
