@extends('_master')

@section('title')
	Lorem Ipsum Generator
@stop

@section('head')

@stop

@section('h1')
  Lorem Ipsum Generator
@stop

@section('description')

In publishing and graphic design, lorem ipsum is a filler text commonly used to demonstrate the graphic elements of a document or visual presentation. Replacing meaningful content that could be distracting with placeholder text may allow viewers to focus on graphic aspects such as font, typography, and page layout.

@stop

@section('body')

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