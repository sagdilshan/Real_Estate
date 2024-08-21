@extends('dashboard-layouts.body')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Admin Dashboard')
@section('body')

    <div class="content-wrapper ">
        <!-- Contact Start -->
        <div class="container-xxl">


            <br>
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <!-- /.card-header -->
                            <div class="card-body">
                                <h2 style="font-family: Open Sans;">Pending Projects</h2>
                                <br>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Owner Name</th>
                                            <th>Mobile Number</th>
                                            <th>Date last spoke</th>
                                            <th>Area</th>
                                            <th>Price</th>
                                            <th>TYPE</th>
                                            <th>Bedroom</th>
                                            <th>Bathroom</th>
                                            <th>Outdoor</th>
                                            <th>AC</th>
                                            <th>Floor</th>
                                            <th>Lift</th>
                                            <th>Pet Freindly</th>
                                            <th>Street</th>
                                            <th>Fake Street</th>
                                            <th>Date Available</th>
                                            <th>Comments</th>
                                            <th>Page Links</th>

                                            <th>Actions</th>



                                        </tr>



                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>dd</td>
                                            <td>dd</td>
                                            <td>dd</td>
                                            <td>dd</td>
                                            <td>dd</td><td>dd</td>
                                            <td>dd</td>
                                            <td>dd</td>
                                            <td>dd</td>
                                            <td>dd</td><td>dd</td>
                                            <td>dd</td>
                                            <td>dd</td>
                                            <td>dd</td>
                                            <td>dd</td>
                                            <td>dd</td>
                                            <td>dd</td>
                                            <td>dd</td>
                                            <td>dd</td>
                                            <td>dd</td>

                                        </tr>

                                        <tr>
                                            <td>ghfh</td>
                                            <td>fhf</td>
                                            <td>nv</td>
                                            <td>dd</td>
                                            <td>vnv</td><td>dd</td>
                                            <td>dd</td>
                                            <td>dd</td>
                                            <td>vn</td>
                                            <td>dd</td><td>dd</td>
                                            <td>dd</td>
                                            <td>vnvnfh</td>
                                            <td>dd</td>
                                            <td>dd</td>
                                            <td>hfhrh</td>
                                            <td>dd</td>
                                            <td>dd</td>
                                            <td>dd</td>
                                            <td>dd</td>

                                        </tr>

                                        {{-- @foreach ($pending_project as $key => $item)
                                     <tr>
                                         <td>{{ $key + 1 }}</td>


                                         <td>{{ $item->p_name }}</td>
                                         <td>{{ $item->association }}</td>
                                         <td>{{ $item->p_fee }}</td>
                                         <td>{{ $item->s_month }}</td>

                                         <td>
                                             @if ($item->project_status == 'completed')
                                                 <span class="badge badge-success text-uppercase"
                                                     style="font-size: 1rem;background-color: rgb(42, 253, 0);">Completed</span>
                                             @elseif ($item->project_status == 'pending')
                                                 <span class="badge badge-danger text-uppercase"
                                                     style="font-size: 1rem;background-color: rgb(255, 18, 18);">Pending</span>
                                             @else
                                                 <span class="badge badge-warning text-uppercase"
                                                     style="font-size: 1rem;background-color: rgb(255, 144, 18);">Canceled</span>
                                             @endif
                                         </td>
                                         {{-- {{ route('manage.edit.products', $item->id) }} --}}
                                        {{-- <td>
                                             <a href="" class="btn btn-outline-success">Edit</a>
                                         </td>

                                     </tr>
                                 @endforeach --}}


                                        </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>


                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- Contact End -->
    </div>





@endsection
