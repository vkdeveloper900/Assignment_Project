@extends('pages.report',[
    'pageTitle' => 'City-wise Report',
    'activeTag' => 'city',

   ])

@section('tab-content')

    <div class="container">

        <!-- City-wise Data Table -->
        <div class="card mb-4">
            <div class="card-header text-dark">
                <h4>City-wise Report</h4>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>City</th>
                        <th>Total Businesses</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $item)
                        <tr>
                            <td>{{ $item->city }}</td>
                            <td>{{ $item->total }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
