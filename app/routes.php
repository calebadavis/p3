<?php


// Homepage
Route::get('/', function() {
    return View::make('index');	
});

// Lorem Ipsum Generator
Route::get('/lorem/{size?}', function($size = 1) {

  if (Input::has('paragraphCount')) $size = Input::get('paragraphCount');
  $loremGenerator = new LoremGenerator();
  return View::make('lorem')
    ->with('size', $size)
    ->with('paragraphs', $loremGenerator->generate($size));

});

// Fake User Generator
Route::get('/userGen/{size?}', function($size = 1) {

  $userGen = new UserGenerator();
  $wantBirthdate = FALSE;
  $wantBlurb = FALSE;

  if (Input::has('size')) $size = Input::get('size');

  if (Input::has('birthdate')) {
    if (Input::get('birthdate') == 'yes') $wantBirthdate = TRUE;
  }

  if (Input::has('blurb')) {
    if (Input::get('blurb') == 'yes' ) $wantBlurb = TRUE;
  }

  return View::make('usergen')
    ->with('size', $size)
    ->with('wantBirthdate', $wantBirthdate)
    ->with('wantBlurb', $wantBlurb)
    ->with('newUsers', $userGen->generate($size, $wantBirthdate, $wantBlurb));
});





















