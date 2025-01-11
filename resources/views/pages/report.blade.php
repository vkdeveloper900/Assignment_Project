@extends('layout.layout')

@section('content')

    <!-- Report Section -->
    <div class="container mt-5">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link {{$activeTag == 'display' ? 'active' : ''}}" aria-current="page"
                   href="{{route('businesses.reports.display')}}">Display All</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{$activeTag == 'city' ? 'active' : ''}}"
                   href="{{route('businesses.reports.city')}}">City wise data</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{$activeTag == 'catCity' ? 'active' : ''}}"
                   href="{{ route('businesses.reports.categoryCity') }}">Category + city-wise data</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{$activeTag == 'catArea' ? 'active' : ''}}"
                   href="{{ route('businesses.reports.categoryArea') }}">Category + area-wise data</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{$activeTag == 'unique' ? 'active' : ''}}"
                   href="{{ route('businesses.reports.unique') }}">Unique listing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{$activeTag == 'duplicate' ? 'active' : ''}}"
                   href="{{ route('businesses.reports.duplicate') }}">Duplicate listing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{$activeTag == 'incomplete' ? 'active' : ''}}"
                   href="{{ route('businesses.reports.incomplete') }}">Incomplete listing</a>
            </li>
        </ul>

        <div class="card">
            <div class="card-body">
                @yield('tab-content')
            </div>
        </div>

    </div>


@endsection
