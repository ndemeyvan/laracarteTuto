@extends('layouts.default',['title'=>'About'])
@section('content')


<div class="container mt-4">
   
    <h2 class=" text-center">Vous voulez nous contacter ? </h2>
    <p class=" text-center">Pas de probleme , remplissez juste le formulaise ci dessous .</p>



    <form>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name">
            {!!$errors->first('name',' <small id="name" class="form-text text-danger">:message</small>')!!}
          </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
          {!!$errors->first('email',' <small id="email" class="form-text text-danger">:message</small>')!!}
        </div>
        <div class="form-group">
            <label for="message">Votre message</label>
            <textarea class="form-control" id="message" rows="4" name="message"></textarea>
            {!!$errors->first('message',' <small id="message" class="form-text text-danger">:message</small>')!!}
          </div>
        <button type="submit" class="btn btn-primary btn-block">Envoyer</button>
    </form>

</div>


@endsection