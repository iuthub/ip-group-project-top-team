@extends('layouts.admin')


@section('title')

@endsection


@section('content')

    <h2>{{ $action }} details!</h2>
        <form method="post" action="{{ $action  }}">
        @csrf
        @foreach( $fields as $key => $object)
            <div class="form-group">
                <div @if($key == "id") hidden  @endif>
                    <label for="{{ $key }}">{{ $key }}</label>
                    <input type="{{ $object['type'] }}" value="{{ $object['value'] }}" class="form-control"
                           name="{{ $key }}" id="{{ $key }}" aria-describedby="emailHelp">
                </div>
            </div>
        @endforeach
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
