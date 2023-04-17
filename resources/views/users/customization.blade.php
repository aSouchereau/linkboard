@extends('layouts.settings')
@section('settingsContent')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Customization') }}</div>

                <div class="card-body">
                    <div class="row">
                        @if($backgroundImage)
                            <div class="col-3">
                                <h5>Image Preview</h5>
                                <img src="{{ asset('storage/' . $backgroundImage) }}" alt="Background Image" width="150px" height="150px">
                            </div>
                        @endif
                        <div class="col-6">
                            <form method="POST" action="{{ action([App\Http\Controllers\CustomizationController::class, 'updateBackgroundImage']) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <label for="background_image" class="form-label">Background Image</label>
                                <input type="file" name="background_image" id="background_image" accept="image/jpeg" class="form-control mb-1">
                                <button type="submit" class="btn btn-primary">Update Image</button>
                            </form>
                            <form method="POST" action="{{ action([App\Http\Controllers\CustomizationController::class, 'removeBackgroundImage']) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-outline-danger mt-1">Remove Image</button>
                            </form>
                        </div>
                    </div>

                    @include('partials.formErrors')
                </div>
            </div>
        </div>
    </div>
@endsection
