@extends('pages.report',[
    'pageTitle' => 'All Business List',
    'activeTag' => 'display',

   ])

@section('tab-content')

    <div class="container">
        <div class="card mb-4">
            <div class="card-header text-dark d-flex justify-content-between align-items-center">
                <h4 class="mb-0">All Business List </h4>
                <h4 class="">Total Businesses: {{ $count }} </h4>
            </div>
            <div class="card-body">

                <!-- Table to display duplicate data -->
                <div id="duplicatesResult" class="mt-3">
                    <table id="duplicatesTable" class="table table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Business Name</th>
                            <th>Area</th>
                            <th>City</th>
                            <th>Mobile No</th>
                            <th>Category</th>
                            <th>Sub Category</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- Dummy Data for Demo -->
                        @foreach($data as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->business_name}}</td>
                                <td>{{$item->area}}</td>
                                <td>{{$item->city}}</td>
                                <td>{{$item->mobile_no}}</td>
                                <td>{{$item->category}}</td>
                                <td>{{$item->sub_category}}</td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
                <!-- Display pagination links -->
                <div class="text-center">
                    {{ $data->links('pagination::bootstrap-5') }}
                </div>

            </div>
        </div>
    </div>
@endsection
