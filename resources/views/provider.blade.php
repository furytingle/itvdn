@extends('layouts.app')

@section('content')
    <h3>
        {{ Super::getName() }}
    </h3>
    <h2>
        {{ Super::getProperty() }}
    </h2>
@endsection()