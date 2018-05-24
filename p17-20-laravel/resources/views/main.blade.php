@extends('layouts.header')

@section('content')



        <table class="table table-striped">
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Author</th>
                <th>Date</th>
            </tr>
            @forelse($posts as $post)
                <tr>
                    <td>{{$post->title}}</td>
                    <td>{{$post->content}}</td>
                    <td>{{$post->author}}</td>
                    <td>{{$post->created_at}}</td>
                    <td>
                        <form action={{route('delete_post',['id' => $post->id])}} method="post">
                            @csrf
                            <button type="submit" class="alert alert-danger">X</button>
                        </form>
                    </td>
                </tr>
                @empty
                <p>nera jokiu postu ...</p>
            @endforelse
        </table>

@endsection


{{--{!!$pageTitle!!} kai reik html savybiu. pvz spalva--}}
{{--{{$pageTitle}} be html savybiu, bladeee--}}



{{--@if

    @endif--}}
