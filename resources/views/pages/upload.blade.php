@extends('layout.layout')

@section('content')

    <div class="container mt-5">
        <!-- File Upload Section -->
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                <h4>Import Bulk Data</h4>
            </div>
            <div class="card-body">
                <form id="uploadForm" action="{{route('businesses.import')}}" method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="file" class="form-label">Choose Excel File</label>
                        <input type="file" name="file" id="file" class="form-control" accept=".xlsx, .xls, .csv"
                               required>
                    </div>
                    <button type="submit" class="btn btn-success">Upload</button>
                </form>
            </div>
        </div>


    </div>

@endsection
