@extends('layouts.app')

@section('title', 'Your Labels')

{{--@section('content')--}}
{{--    --}}{{-- <table class='table'>--}}
{{--        <tr><td>label1</td></tr>--}}
{{--    </table> --}}

{{--    <form method="POST" action="{{ route('') }}">--}}
{{--        @csrf--}}

{{--        <div class="form-group">--}}
{{--            <label class="col-md-4 control-label">New Label</label>--}}

{{--            <div class="col-md-6">--}}
{{--                <input type="text"--}}
{{--                       class="form-control"--}}
{{--                       name="new-label"--}}
{{--                       value="{{ old('new-label') }}">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="form-group">--}}
{{--            <div class="col-md-6 col-md-offset-4">--}}
{{--                <button type="submit"--}}
{{--                        class="btn btn-primary"--}}
{{--                        style="margin-right: 15px;">--}}
{{--                    Add a new label--}}
{{--                </button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--    <br />--}}

{{--    <form>@csrf--}}

{{--        <div class="form-group">--}}
{{--            <label>Select</label>--}}
{{--            <select id="category" name="name[]" multiple class="form-control">--}}
{{--                <option value="Codeigniter">Codeigniter</option>--}}
{{--                <option value="CakePHP">CakePHP</option>--}}
{{--                <option value="Laravel">Laravel</option>--}}
{{--                <option value="YII">YII</option>--}}
{{--                <option value="Zend">Zend</option>--}}
{{--                <option value="Symfony">Symfony</option>--}}
{{--                <option value="Phalcon">Phalcon</option>--}}
{{--                <option value="Slim">Slim</option>--}}
{{--            </select>--}}
{{--        </div>--}}

{{--        <div class="form-check">--}}
{{--            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">--}}
{{--            <label class="form-check-label" for="defaultCheck1">--}}
{{--                Default checkbox--}}
{{--            </label>--}}
{{--        </div>--}}

{{--        <input type='checkbox' class='btn-check' name='label[]' id='label-1' autocomplete='off'>--}}
{{--        <label class='btn btn-outline-primary' for='label-1'>Label 1</label><br />--}}

{{--        <input type="checkbox" class="btn-check" name='label[]' id="label-2" autocomplete="off">--}}
{{--        <label class="btn btn-outline-primary" for="label-2">Label 2</label><br>--}}

{{--    </form>--}}

{{--@endsection--}}

@section('content')
    @if ($labels->isEmpty())
        <h3>There are no labels yet. <a href='{{ route('label.create') }}'> Create your label.</a></h3>
    @else
        <table class='table'>
            <tr>
                <th>ID</th>
                <th>Label</th>
                <th>Details</th>
            </tr>
            @foreach($labels as $label)
                <tr>
                    <td>{{ $label->id }}</td>
                    <td>{{ $label->label }}</td>
                    <td><a href='{{ route('label.show',['id' => $label->id]) }}'>Details</a></td>
                </tr>
            @endforeach
        </table>
    @endempty
@endsection
