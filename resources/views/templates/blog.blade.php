@extends('templates.layout')

@section('title', 'Blog')

@section('content')

    <h1>Blog</h1>

    <div class="row">
        @for($i=0; $i<10; $i++)
            @component('component.card',
               [
                'img_title' => 'Image Blog',
                'img_url' => 'http://lorempixel.com/400/200'
               ]
            )

            @endcomponent
        @endfor

    </div>add .
@stop