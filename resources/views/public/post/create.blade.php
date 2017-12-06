@extends('layouts.app')

@section('content')
    <div class="container">

        @include('partial.error')

        <div class="row">
            <div class="col-md-offset-4 col-md-4">

                <form method="post" action="{{ route('post.store') }}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>

                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea id="body" name="body" class="form-control"></textarea>
                    </div>

                    <input type="submit" value="Submit" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
@endsection