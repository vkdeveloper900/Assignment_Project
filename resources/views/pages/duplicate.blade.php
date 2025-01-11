@extends('layout.layout',[
    'pageTitle' => 'Duplicate Listings',
   ])

@section('content')

    <div class="container mt-5">
        <h4 class="mb-4">Duplicate Data Management</h4>

        <!-- Duplicate Data Section -->
        <div class="card mb-4">
            <div class="card-header text-dark d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Duplicate Data</h4>
                <a href="{{ route('businesses.mergeDuplicates') }}" class="btn btn-outline-success">Merge Duplicate
                    Data</a>
            </div>
            <div class="card-body">

                <!-- Table to display duplicate data -->
                <div id="duplicatesResult" class="mt-3">
                    <table id="duplicatesTable" class="table table-striped">
                        <thead>
                        <tr>
                            <th>Business Name</th>
                            <th>Area</th>
                            <th>City</th>
                            <th>Duplicate</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $item)
                            <tr>
                                <td>{{ $item->business_name }}</td>
                                <td>{{ $item->area }}</td>
                                <td>{{ $item->city }}</td>
                                <td>{{ $item->total }}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection
