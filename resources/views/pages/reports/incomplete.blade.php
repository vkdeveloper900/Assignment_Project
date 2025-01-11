@extends('pages.report',[
    'pageTitle' => 'Incomplete Listings',
    'activeTag' => 'incomplete',

   ])

@section('tab-content')

    <div class="container">
        <!-- Table to display unique listings -->
        <div class="card">
            <div class="card-header text-dark d-flex justify-content-between align-items-center">
                <h4>Incomplete Listings</h4>
                <h4 class="">Total Incomplete Records: {{ $count }} </h4>
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
                            <td>{{ $item->business_name ?? 'N/A' }}</td>
                            <td>{{ $item->area ?? 'N/A' }}</td>
                            <td>{{ $item->city ?? 'N/A' }}</td>
                            <td>{{ $item->mobile_no ?? 'N/A' }}</td>
                            <td>{{ $item->category ?? 'N/A' }}</td>
                            <td>{{ $item->sub_category ?? 'N/A' }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
