@extends('pages.report',[
    'pageTitle' => 'Category + City-wise Data',
    'activeTag' => 'catCity',

   ])

@section('tab-content')

    <div class="container">

        <!-- Table to display category + city-wise data -->
        <div class="card mb-4">
            <div class="card-header text-dark">
                <h4>Category + City-wise Data</h4>
            </div>
            <div class="card-body">
                <table class="table table-striped">

                    <thead>
                    <tr>
                        <th>Category</th>
                        <th>City</th>
                        <th>Count</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $row)
                        <tr>
                            <td>{{ $row->category }}</td>
                            <td>{{ $row->city }}</td>
                            <td>{{ $row->count }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
@endsection
