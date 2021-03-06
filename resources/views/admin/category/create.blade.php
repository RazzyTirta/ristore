@extends('admin.templates.default')

@section('title', 'Create a Category')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-body">

                    <h4 class="mt-0 text-center">Create Category</h4>
                    <hr>

                    <form class="" action="{{ route('admin.categories.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control @error('name')
                                is-invalid
                            @enderror" placeholder="Enter a Category" value="{{ old('name') }}"/>
                            @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    Save
                                </button>
                                <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection