@extends('template')
@section('title','ajout')
@section('titre','Formulaire d\'ajout Nouveau')
@section('sousTitre','revenue')
@section('bgimage','bg_image_1.jpg')
@section('content')
    <form action="{{route('revenue.store'),route('depense.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Ordre du Mois</label>
            <input class="form-control" type="number" name="mois" id="mois">
            <!--select class="form-control" name="mois" id="mois" required="required">
                <option value="0">1</option><option value="1">2</option><option value="2">3</option><option value="3">4</option><option value="4">5</option><option value="5">6</option><option value="6">7</option><option value="7">8</option><option value="8">9</option><option value="9">10</option><option value="10">11</option><option value="11">12</option>
            </select-->
        </div>
        <div class="form-group">
            <label for="montant">montant</label>
            <input type="number" class="form-control" name="montant" id="montant" aria-describedby="helpId" placeholder="" min="1" required="required" class="form-control @error('montant') is-invalid @enderror"> @error('montant')<small id="montant" class="form-text text-danger h6">{{$errors->first('montant')}}</small>@enderror
        </div>
        <div class="form-group">
            <label for="typeRevenue">type de Revenue</label>
            <select class="form-control" name="typeRevenue" id="typeRevenue" required="required">
                <option value="salaire">Salaire</option>
                <option value="prime">Prime</option>
                <option value="autre">Autre</option>
            </select>
        </div>
        <div class="form-group">
          <label for="date">date</label>
          <input type="datetime-local" class="form-control" name="date" id="date" aria-describedby="helpId" placeholder="" required="required" >
        </div>
        <button type="reset" class="btn btn-danger">Annuler</button>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
@endsection
