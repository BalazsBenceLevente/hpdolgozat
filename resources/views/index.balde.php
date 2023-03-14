@extends('layouts.vue')

@section('title',$title)

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>{{$title}}</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Név</th>
                        <th>Nem</th>
                        <th>Munka</th>
                        <th>Varázspálca</th>
                        <th>Patronus</th>
                        <th>Faj</th>
                        <th>Dátum</th>
                        <th>Ház</th>
                        <th>Műveletek</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($character as $a)
                        <tr>
                            <td>{{$a->name}}</td>
                            <td>{{$a->gender}}</td>
                            <td>{{$a->job}}</td>
                            <td>{{$a->wand}}</td>
                            <td>{{$a->patronus}}</td>
                            <td>{{$a->species}}</td>
                            <td>{{$a->birth,death}}</td>
                            <td>{{$a->house_id}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div
@endsection
