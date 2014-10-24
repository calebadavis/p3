<?php


// Homepage
Route::get('/', function() {
    return View::make('index');	
});

Route::get('/lorem/{size?}', function($size = 1) {

  if (Input::has('paragraphCount')) $size = Input::get('paragraphCount');
  $loremGenerator = new LoremGenerator();
  return View::make('lorem')
    ->with('size', $size)
    ->with('paragraphs', $loremGenerator->generate($size));

});

Route::get('/userGen/{size?}', function($size = 1) {
  $userGen = new UserGenerator();
  if (Input::has('size')) $size = Input::get('size');
  $wantBirthdate = 
    (Input::has('wantBirthdate')) ?
      Input::get('wantBirthdate') :
      FALSE;

  $wantBlurb = 
    (Input::has('wantBlurb')) ?
      Input::get('wantBlurb') :
      FALSE;

  return View::make('usergen')
    ->with('size', $size)
    ->with('wantBirthdate', $wantBirthdate)
    ->with('wantBlurb', $wantBlurb)
    ->with('newUsers', $userGen->generate($size, $wantBirthdate, $wantBlurb));
});





















