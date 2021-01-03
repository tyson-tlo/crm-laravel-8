@extends('layouts.app')

@section('title', $prospect->name . ' Activity')

@section('content')
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex">
                    <h1>{{ $prospect->name }} <small class="text-muted">{{ ucwords(str_replace('_', ' ', $activity->type)) }}</small></h1>
                    <div class="ml-auto">
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                        Actions
                                    </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                                <a class="dropdown-item" href="{{ route('admin.prospects.activities.dashboard', $prospect) }}">View All Activities</a>
                                <a class="dropdown-item" href="{{ route('admin.prospects.prospect.dashboard', $prospect) }}">Prospect Dashboard</a>

                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <h5>Communication Type: {{ ucwords(str_replace('_', ' ', $activity->communication_type)) }}</h5>
                <h5>Notes:</h5>
                <p>{{ $activity->notes }}</p>

                <h5 class="text-right"><small class="text-muted">{{ $activity->created_at_pretty }}</small></h5>
            </div>
        </div>
    </div>
@endsection
