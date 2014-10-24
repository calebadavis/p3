@extends('_master')

@section('title')
	Lorem Ipsum Generator
@stop

@section('head')

@stop

@section('h1')
  Lorem Ipsum Generator
@stop

@section('content')

  {{ Form::open(array('url' => '/lorem', 'method' => 'GET')) }}
    {{ Form::label('paragraphCount', '# of paragraphs') }}
    {{ Form::input(
         'number', 
         'paragraphCount', 
         $size, 
         array('min' => '1', 'max' => '20')) 
    }}
    {{ Form::submit('Generate'); }}
  {{ Form::close() }}

    <section id="generated_text">
    @foreach ($paragraphs as $paragraph)
      <p>{{$paragraph}}</p>
    @endforeach
    </section>

@stop