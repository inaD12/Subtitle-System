@extends('layouts.app')

<style>
    a.subtitle-link {
        color: inherit;
        text-decoration: none;
        cursor: pointer;
    }
</style>


@section('content')
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Subtitles</h4>
                        <form method="GET" action="{{ route('subtitles.search') }}">
                        <input type="text" name="search" id="subtitleSearch" placeholder="Search by Movie Title">
                         <button type="submit">Search</button>
                        </form>
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
                                        <td><a href="{{ route('subtitles.show', $subtitle) }}" target="_blank" class="subtitle-link">
                                        {{ Str::limit($subtitle->content, 100) }} (Click to view full)
                                        </a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center mt-4">
                                {{ $subtitles->links('pagination::bootstrap-4') }}
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection