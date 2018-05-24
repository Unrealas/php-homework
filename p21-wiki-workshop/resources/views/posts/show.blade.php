@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">


                    <div class="card mt-2">
                        <h5 class="card-header">{{$post->title}}</h5>
                        <div class="card-body">
                            <p class="card-text">{{$post->content}}
                            </p>
                            <br>
                            Category : <span class="badge badge-dark">{{$post->categoryObject -> name}}</span>
                            <br>
                            <small>Created at: {{$post->created_at}}  by </small> <span class="badge badge-info">{{$post->thisIsUserObject -> name}}</span>
                            <br>
                            <a href={{route('posts.edit', ['id'=>$post->id])}}>Post edit</a>
                            <br>
                            <form action="{{route('posts.destroy', ['id'=>$post->id])}}" method="post">
                                <input type="hidden" name="_method" value="delete">
                                @csrf
                                <button type="submit" class="badge badge-danger">Delete</button>
                            </form>
                            <ul>
                                @foreach($post->fileObject as $file)

                                    {{--jei reikia parodyti image--}}
                                    <li> <img src="{{asset('/storage/'.$file->path)}}" alt=""></li>
                                    <li> <a href={{ asset('/storage/'.$file->path) }}> {{ $file->name }} </a> </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>

            </div>
        </div>
    </div>
@endsection

