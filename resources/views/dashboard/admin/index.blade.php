@extends('dashboard.layout.main')

@section('container')
    @foreach ($clusters as $i => $cluster)
    Sample {{ $i }} berada di cluster
    @endforeach
@endsection
