

@extends('Layouts.app')

@section('content')
<main>
    <div class="container">
       <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Movies</h4>
                </div>
                <div class="card-body">
                    <table class="table table table bordered">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Year</th>
                                <th>Genre</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($movies as $movie)
                            <tr>
                                <td>{{$movie->title}}</td>
                                <td>{{$movie->year}}</td>
                                <td>{{$movie->genre}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
       </div>
    </div>
    </main>
@endsection