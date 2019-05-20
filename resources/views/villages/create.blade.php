@extends('layout.default')
@section('content')
<div class="content">
        <div class="row">
          <div class="col-12">
<form method="POST" action="" name ="form-create-user" id="id-form-create-user">
    <div class="form-group">
      <label for="exampleInputEmail1">Nom</label>
      <input type="text" class="form-control" id="input-nom" aria-describedby="emailHelp" placeholder="Enter le nom svp">
      <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Prenom</label>
      <input type="text" class="form-control" id="input-prenom" aria-describedby="emailHelp" placeholder="Enter le prenom svp">
      <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Email</label>
      <input type="text" class="form-control" id="input-email" placeholder="Enter l'adresse mail svp">
    </div>
     <!-- <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> -->
    <button type="submit" class="btn btn-block btn-primary">Enregistrer</button>
  </form>
</div>
</div>
</div>
  @endsection