@extends('pages.report',[
    'pageTitle' => 'Category + Area-wise Data',
    'activeTag' => 'catArea',
   ])

@section('tab-content')

    <div class="container">

        <!-- Table to display category + area-wise data -->
        <div class="card mb-4">
            <div class="card-header text-dark">
                <h4>Category + Area-wise Data</h4>
            </div>
            <div class="card-body">
                <table class="table table-striped">

                    <thead>
                    <tr>
                        <th>Category</th>
                        <th>Area</th>
                        <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $item)
                        <tr>
                            <td>{{ $item->category }}</td>
                            <td>{{ $item->area }}</td>
                            <td>{{ $item->total }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>


@endsection
