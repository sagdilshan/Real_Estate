@extends('dashboard-layouts.body')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Admin Dashboard')
@section('body')

    <div class="content-wrapper ">
        <!-- Contact Start -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Owner's Details</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href=" ">Dashboard</a></li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <div class="container-xxl">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-body">
                                {{-- <h2 style="font-family: Open Sans;">Pending Projects</h2> --}}
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
                                            <th>Page Links</th>
                                            <th>Comments</th>


                                            <th>Actions</th>



                                        </tr>



                                    </thead>
                                    <tbody>
                                        {{-- <tr>
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

                                        </tr> --}}



                                        @foreach ($allowners as $key => $item)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>


                                                <td>{{ $item->owner_name }}</td>
                                                <td>{{ $item->mobile }}</td>
                                                <td>{{ $item->date_l_s }}</td>
                                                <td>{{ $item->area }}</td>
                                                <td>{{ $item->price }}</td>
                                                <td>{{ $item->type }}</td>
                                                <td>{{ $item->bedroom }}</td>
                                                <td>{{ $item->bathroom }}</td>
                                                <td>{{ $item->outdoor }}</td>
                                                <td>{{ $item->ac }}</td>
                                                <td>{{ $item->floor }}</td>
                                                <td>{{ $item->lift }}</td>
                                                <td>{{ $item->pet_freindly }}</td>
                                                <td>{{ $item->street }}</td>
                                                <td>{{ $item->fake_street }}</td>
                                                <td>{{ $item->date_available }}</td>
                                                <td>{{ $item->page_links }}</td>
                                                <td>{{ $item->comment }}</td>


                                                <td>
                                                    <div style="display: flex; align-items: center; gap: 10px;">
                                                        <a href="{{ route('edit.owner', $item->id) }}" class="btn btn-outline-success">Edit</a>

                                                        @if ($item->deleted == 'no')
                                                            <form method="POST" action="{{ route('remove.owner', $item->id) }}">
                                                                @csrf
                                                                @method('PUT')
                                                                {{-- <button type="submit" class="btn btn-outline-danger">Delete</button> --}}
                                                                <button type="button" class="btn btn-outline-danger"
                                                                id="delete"
                                                                data-id="{{ $item->id }}">Delete</button>
                                                            </form>
                                                        @endif
                                                    </div>
                                                </td>


                                            </tr>
                                        @endforeach


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
