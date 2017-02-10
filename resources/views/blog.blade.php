@extends('layout')

@section('head')
    @parent
@stop

@section('nav')
    @parent
@stop

@section('content')
    <div class="blog-spacer"></div>
    <div id="content">
        <div class="container blog-container">
            <section>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h1 class="blog-title"></h1>
                        <p class="author-name text-center"></p>
                        <p class="published-date text-center"></p>
                        <div class="col-md-10 col-md-offset-1">
                            <div class="blog-body"></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        @include('author')

        @include('books-and-blogs')

        @include('footer')

        @include('modal')
    </div>
@stop