@extends('layouts.app')

@section('content')
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Subtitles</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Movie Title</th>
                                    <th>Content</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subtitles as $subtitle)
                                    <tr>
                                        <td>{{ $subtitle->film->title }}</td>
                                        <td>{{ $subtitle->content }}</td>
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