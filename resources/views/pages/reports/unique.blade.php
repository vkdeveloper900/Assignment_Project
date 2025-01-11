@extends('pages.report',[
    'pageTitle' => 'Unique listing',
    'activeTag' => 'unique',

   ])

@section('tab-content')

    <div class="container">
        <!-- Table to display unique listings -->
        <div class="card">
            <div class="card-header text-dark d-flex justify-content-between align-items-center">
                <h4>Unique listing</h4>
                <h4 class="">Total Unique Data: {{ $count }} </h4>
            </div>

            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Business Name</th>
                        <th>Area</th>
                        <th>City</th>
                        <th>Mobile No</th>
                        <th>Category</th>
                        <th>Sub Category</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $item)
                        <tr>
                            <td>{{ $item->business_name }}</td>
                            <td>{{ $item->area }}</td>
                            <td>{{ $item->city }}</td>
                            <td>{{ $item->mobile_no }}</td>
                            <td>{{ $item->category }}</td>
                            <td>{{ $item->sub_category }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
