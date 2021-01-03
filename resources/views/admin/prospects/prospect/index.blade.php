@extends('layouts.app')

@section('title', $prospect->name . '\'s Dashboard')

@section('content')
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <h1>Prospect Dashboard <small class="text-muted">{{ $prospect->name }}</small></h1>
            </div>
        </div>
        {{-- Activities preview --}}
        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex">
                    <h3>Recent Activity</h3>
                    <div class="ml-auto">
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                        Actions
                                    </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                                <a class="dropdown-item" href="{{ route('admin.prospects.activities.create', $prospect->id) }}">Add an Activity</a>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <ul class="list-group">
                    @foreach (ProspectActivity::latest()->limit(5)->get() as $activity)
                    <li class="list-group-item">
                        <h5>
                            <a href="{{ route('admin.prospects.activities.show', ['prospect' => $prospect->id, 'activity' => $activity->id]) }}">
                                {{ ucwords(str_replace('_', ' ', $activity->type)) }}
                            </a>
                            <small class="text-muted float-right"><em>{{ date('F m, Y @ g:i A T') }}</em></small>
                        </h5>
                    </li>
                    @endforeach
                </ul>

            </div>
        </div>

        {{-- Documents Preview --}}
        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex">
                    <h3>Prospect Documents</h3>
                    <div class="ml-auto">
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                        Actions
                                    </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addProspectDocumentModal">Add a Document</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Add Documents Modal --}}
        <!-- Modal -->
        <div class="modal fade" id="addProspectDocumentModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                        <div class="modal-header">
                                <h5 class="modal-title">Add a Document <span class="text-muted">{{ $prospect->name }}</span></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                    <div class="modal-body">
                        <form action="#" method="POST">
                            <div class="form-group">
                                <label for="">Document Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>

                            <div class="form-group">
                                <label for="">Document Notes</label>
                                <textarea name="notes" cols="30" rows="10" class="form-control"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="">Select a file</label>
                                <input type="file" class="form-group-file" name="file">
                            </div>

                            <button class="btn btn-primary">Store Document</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $('#exampleModal').on('show.bs.modal', event => {
                var button = $(event.relatedTarget);
                var modal = $(this);
                // Use above variables to manipulate the DOM

            });
        </script>
    </div>
@endsection
