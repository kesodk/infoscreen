@extends('layouts.app')

@section('title', 'Forside')

@section('content')
<div class="container mt-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h1 class="display-4">Velkommen til InfoSkærm</h1>
            <p class="lead">Her kan du vise dagens aktiviteter, kantinemenu, billeder og meget mere – direkte på en skærm.</p>
            <a href="/om" class="btn btn-primary btn-lg mt-3">Læs mere</a>
        </div>
        <div class="col-md-6 text-center">
            <img src="https://placehold.co/400x250?text=InfoSkærm" class="img-fluid rounded shadow" alt="Placeholder">
            <img src="https://picsum.photos/400/250" class="img-fluid rounded shadow" alt="Random billede">


        </div>
    </div>
</div>
@endsection

