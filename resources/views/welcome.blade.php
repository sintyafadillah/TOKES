@extends('layout.main')

@section('container')

    @include('layout.carousel')
    
    @if (Session::has('success'))
        <div class="alert alert-success show mt-5">{{ Session::get('success') }}</div>
    @endif

    <h1 class="mt-5">Alat Kesehatan</h1>

    <div class="row justify-content-center mb-5 mt-5">
        @foreach ($categories as $item)
            <div class="col-md-2 pb-5">
                <div class="card">
                    <img src="{{ asset('/asset/image/logo.jpg') }}" alt="">
                    <div class="card-body">
                        <div class="card-title">{{ $item->name }}</div>
                        <a href="/category/{{ $item->id }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection