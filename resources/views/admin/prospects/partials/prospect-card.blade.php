<div class="card mt-3 prospect-card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-3 col-md-2">
                @if ($prospect->profile_image)
                    <img src="{{ Storage::url($prospect->profile_image) }}" alt="">
                @else
                    <img src="/images/user.png" style="max-width: 100%; max-height: 100px;" alt="">
                @endif
            </div>
            <div class="col-sm-6 col-md-8">
                <h5>{{ $prospect->name }}</h5>
                <ul class="list-style-none">
                    <li><strong>Email:</strong> {{ $prospect->email}}</li>
                    <li><strong>Date Added:</strong> {{ $prospect->pretty_created }}</li>
                </ul>
            </div>
            <div class="col-sm-3 col-md-2">
                <div class="dropdown d-block">
                    <button class="btn btn-outline-secondary btn-block btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Actions
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <a href="{{ route('admin.prospects.prospect.dashboard', ['prospect' => $prospect->id]) }}" class="dropdown-item">Prospect Dashboard</a>
                        <a class="dropdown-item" href="{{ route('admin.prospects.edit', ['prospect' => $prospect->id]) }}">Edit Prospect</a>
                        <a class="dropdown-item" href="{{ route('admin.prospects.activities.dashboard', ['prospect' => $prospect->id]) }}">View Activity</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
