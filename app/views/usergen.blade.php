@extends('_master')

@section('title')
  User Generator
@stop

@section('head')

@stop

@section('h1')
  User Generator
@stop

@section('description')

User generation (for testing purposes) can be a tedious task. Manual entry of Names, addresses, and text can be very, very boring. This utility does it for you!

@stop

@section('content')

  {{ Form::open(array('url' => '/userGen', 'method' => 'GET')) }}
    {{ Form::label('size', '# of users') }}
    {{ Form::input(
         'number', 
         'size', 
         $size, 
         array('min' => '1', 'max' => '99')) 
    }}
    <br/>

    <label>
    {{ Form::checkbox('birthdate', 'yes', $wantBirthdate) }}
    Create a Birthdate    
    </label>
    <br/>
    <label>
    {{ Form::checkbox('blurb', 'yes', $wantBlurb) }}
    Create a Blurb
    </label>    
    <br/>

    {{ Form::submit('Generate'); }}
  {{ Form::close() }}

    <section id="generated_text">
    @foreach ($newUsers as $newUser)
      <p class='name'>{{$newUser->getName()}}</p>
      <p class='birthdate'>{{$newUser->getBirthdate()}}</p>
      <p class='blurb'>{{$newUser->getBlurb()}}</p>
    @endforeach
    </section>
@stop