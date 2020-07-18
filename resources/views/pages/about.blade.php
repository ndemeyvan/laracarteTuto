@extends('layouts.default',['title'=>'About'])
@section('content')


<div class="container text-center mt-4">
    <h2 class=" ">Bienvenue sur le laracarte de <strong>Ndeme Yvan</strong></h2>
    <p class="my-3 ">Finally a little Javascript is needed to set an interval which
         will load and update the next image in the sequence and update the css. Initially 
         I was just saving the image src in the loaded array however the browser was 
         re-loading previously displayed images for some reason and there was a slight
          flash of black as the background-image was set. Saving the entire image object
           and using that seems to resolve the issue.</p>
           <strong class="my-2">Faites vous plaisir sur cette application de test tutoriel , moi a ce niveau il etait deja 2h03 du matin , donc jetais deja bien keff :)</strong>

</div>


@endsection