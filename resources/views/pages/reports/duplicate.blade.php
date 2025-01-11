@extends('pages.report',[
    'pageTitle' => 'Duplicate Listings',
    'activeTag' => 'duplicate',
   ])

@section('tab-content')

    <div class="container">
        <!-- Table to display unique listings -->
        <div class="card">
            <div class="card-header text-dark d-flex justify-content-between align-items-center">
                <h4>Duplicate Listings</h4>
                <h4 class="">Total Duplicate Records: {{ $count }} </h4>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Business Name</th>
                        <th>Area</th>
                        <th>City</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $item)
                        <tr>
                            <td>{{ $item->business_name }}</td>
                            <td>{{ $item->area }}</td>
                            <td>{{ $item->city }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
@endsection
