@extends('layouts.app')

@section('content')
    <div class="container">

        @include('partial.success')

        <a class="btn btn-default" href="{{ route('post.create') }}">Create</a>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Operations</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @if (count($posts))
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>
                                <a class="btn btn-link" href="{{ route('post.show', ['id' => $post->id]) }}">
                                    {{ $post->title }}
                                </a>
                            </td>
                            <td>
                                @if ($post->published)
                                    <p class="bg-success">
                                        Published
                                    </p>
                                @else
                                    <p class="bg-danger">
                                        Unpublished
                                    </p>
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-default" href="{{ route('post.edit', ['id' => $post->id]) }}">Edit</a>
                            </td>
                            <td>
                                <form method="post" action="{{ route('post.destroy', ['id' => $post->id]) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                    <input type="submit" value="Delete" class="btn btn-danger">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection