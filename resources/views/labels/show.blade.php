@extends('layouts.app')

@section('title', "Edit $label->label")

@section('content')
    <form method='POST'>
        @csrf
        <div class="form-group">
            {{--<label class="col-md-4 control-label">Label</label>--}}

            <div class="col-md-6">
                <input type="text"
                       class="form-control"
                       name="label"
                       value="{{ old('label') ?? $label->label }}">
            </div>

            <div class="input-group">
                <div class="col-md-2">
                    <button type="submit"
                            formaction='{{ route('label.update', ['id' => $label->id]) }}'
                            class="btn btn-primary">
                        Update label
                    </button>
                </div>

                <div class="col-md-2">
                    <button type="submit"
                            formaction='{{ route('label.delete', ['id' => $label->id]) }}'
                            class="btn btn-danger">
                        Delete label
                    </button>
                </div>
            </div>
        </div>
    </form>
@endsection
