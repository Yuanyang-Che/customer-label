@extends('layouts.app')

@section('title', "Create a new label")

@section('content')
    <form method='POST' action='{{ route('label.store') }}'>
        @csrf
        <div class="form-group">
            <label class="col-md-4 control-label">Label</label>

            <div class="col-md-6">
                <input type="text"
                       class="form-control"
                       name="label"
                       value="{{ old('label') }}">
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit"
                            class="btn btn-primary"
                            style="margin-right: 15px;">
                        Create label
                    </button>
                </div>
            </div>
        </div>
    </form>
@endsection
