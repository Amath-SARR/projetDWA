@extends('template')
@section('title','ajout')
@section('titre','Liste des dépenses')
@section('sousTitre','dépense')
@section('bgimage','bg_image_1.jpg')
@section('content')
    @if (empty($depenses))

    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>mois</th>
                    <th>montant</th>
                    <th>categorieDepense</th>
                    <th>description</th>
                    <th>date</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($depenses as $depense)
                    <tr>
                        <td scope="row">{{$depense->idDepense}}</td>
                        <td> {{$depense->mois}}</td>
                        <td>{{$depense->montant}}</td>
                        <td>{{$depense->categorieDepense}}</td>
                        <td>{{$depense->description}}</td>
                        <td>{{$depense->date}}</td>
                        <td>
                            <div>
                                <form action="route('depense.destroy', ['depense'=>$depense])}}" method="post" class="inline">
                                    @csrf
                                    @method('delete')
                                    <button type="button" class="btn btn-primary btn-sm btn-rounded mr-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                        </svg>
                                    </button>
                                    <button type="submit" class="btn btn-danger btn-sm btn-rounded mr-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php
                    static $som1 = 0;
                    static $som2 = 0;
                    static $som3 = 0;
                    if ($depense->categorieDepense=='depenseFixe'){
                        $som1 += $depense->montant;
                    }
                    else if($depense->categorieDepense=='depenseVariable'){
                        $som2 += $depense->montant;
                    }
                    else if($depense->categorieDepense=='depenseSpontane'){
                        $som3 += $depense->montant;
                    }
                ?>
                @endforeach
                <div>{{"Depense fixe-année: ".$som1}}</div>
                <div>{{"Depense variable-année: ".$som2}} </div>
                <div> {{"Depense depense Spontane-année: ".$som3}}</div>


            </tbody>
        </table>
    @endif
@endsection
