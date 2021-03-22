@extends('layouts.layout')

@section('content')
<div>
    order for {{ $pizza->name  }}
    <p>tpye : {{ $pizza->type }}</p>
    <p> base : {{ $pizza->base}}</p>
</div>
@endsection