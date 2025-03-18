@extends('layouts.master')

@section("content")
<div class="content-wrapper d-flex flex-column mt-3">
<h1 class="h1 mb-4">Trova il tuo treno</h1>
<div class="row g-2 mb-5" >
    @foreach ($trains as $train) 
    <div class="col-6">
        <div class="card mb-4 shadow-sm">
            <div class="card-body">

                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h5 class="card-title mb-0">{{ $train->society }}</h5>
                    <span class="badge bg-secondary fs-5">Economy Class</span>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <a href="#" class="text-decoration-none">Vedi percorso</a>
                    <span class="text-muted">{{ $train->carriage_total }} Vagoni disponibili</span>
                </div>

                <div class="row">
                    <div class="col-5">
                        <div class="fw-semibold">
                            {{ $train->departure_time}}
                            <small class="text-muted ms-1">({{ $train->departure_station }})</small>
                        </div>
                    </div>
                    <div class="col-2 text-center text-muted">
    

                    </div>
                    <div class="col-5 text-end">
                        <div class="fw-semibold">
                            {{ $train->arrive_time }}
                            <small class="text-muted ms-1">({{ $train->arrive_station }})</small>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center mt-3">
                    <span class="fs-5 fw-bold text-primary">
                        EUR {{$train->price}} / Tratta
                    </span>
                    <a href="#" class="btn btn-warning">
                        Select
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>
@endsection