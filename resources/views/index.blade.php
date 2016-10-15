@extends('layout')

@section('head')
    @parent
@stop

@section('nav')
    @parent
@stop

@section('content')
    <section data-background="img/full-width/bg-3.jpg" class="full-screen bg-dark-50 table parallax parallax-fixed">

        <div class="table-cell">
            <div class="container">
                <a href="#about" class="btn-scroll-down scroll page-scroll"></a>
            </div>
        </div>
    </section>

    @include('author')

    @include('books-and-blogs')

    @include('footer')

    @include('modal')

@stop