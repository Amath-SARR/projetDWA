@extends('template')
@section('title', 'ajout')
@section('titre', 'Enrégistrer un dépense')
@section('sousTitre', '')
@section('bgimage','bg_image_1.jpg')
@section('content')
    <form action="{{route('depense.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="montant">montant à payer</label>
            <input type="number" class="form-control" name="montant" id="montant" aria-describedby="helpId" placeholder="" min="1" required="required" class="form-control @error('montant') is-invalid @enderror" value="{{old('montant')}}"> @error('montant')<small id="montant" class="form-text text-danger h6">{{$errors->first('montant')}}</small>@enderror
        </div>
        <div class="form-group">
            <label for="categorieDepense">categorie de depense</label>
            <select class="form-control" name="categorieDepense" id="categorieDepense" required="required">
                <optgroup label="Depense Obligatoire par mois">
                    <option value="depenseFixe">depense Fixe</option>
                    <option value="depenseVariable">depense Variable</option>
                </optgroup>
                <option value="depenseSpontane">Depense Spontane</option>
            </select>
        </div>
        <div class="form-group">
            <label for="date">date</label>
            <input type="date" class="form-control" name="date" id="date" aria-describedby="helpId" placeholder="" required="required" >
        </div>
        <div class="form-group">
            <label for="description">description</label>
            <input type="text" class="form-control" name="description" id="description" aria-describedby="helpId" placeholder="" required="required" >
        </div>
        <button type="reset" class="btn btn-danger">Annuler</button>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
@endsection
