@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">


                <div class="card mt-2">
                    <h5 class="card-header">{{$category->name}}</h5>
                    <div class="card-body">
                        <p class="card-text">{{$category->content}}</p>
                        <br>
                        <small>{{$category->created_at}}</small>
                        <br>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection

