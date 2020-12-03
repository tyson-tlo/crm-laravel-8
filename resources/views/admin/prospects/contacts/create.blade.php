@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex">
                    <h1>Create Contact Details <small class="text-muted">{{ $prospect->name }}</small></h1>
                    <div class="ml-auto">
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Actions
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">View Prospect</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.card -->

        <div class="card mt-3">
            <div class="card-body">
                <form action="{{ route('admin.prospects.contacts.store', $prospect->id) }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="" class="col-md-3">Phone (Primary)</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="phone">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-3">Phone Mobile</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="phone_mobile">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-3">Fax</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="fax">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-3">Address</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="address">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-3">Address 2</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="address_2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-3">Unit #</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="unit">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-3">City</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="city">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-3">Province / State / Region</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="province">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-3">Postal Code / Zip Code</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="postal_code">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-3">Country</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="country">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-md-3">Additional Notes</label>
                        <div class="col-md-9">
                            <textarea name="notes" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </div>

                    <button class="btn btn-primary float-right">Create Contact Details</button>
                </form>
            </div>
        </div>
    </div>
@endsection
