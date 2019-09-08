@extends('layout.app')

@section('content')
    <div class="row my-4">
        <div class="col-12 col-md-3">
            <div class="position-sticky sticky-top pt-4 mb-4">
                <h1 class="h2 mb-2">
                    {{ $user->name }}
                </h1>
            </div>
        </div>
        <div class="col-12 col-md-9 my-4 d-flex flex-column">
            <ul class="chapters-tree">
                @foreach($allChapters as $chapter)

                    <li class="chapters-tree-item">
                        <label>
                            <input type="checkbox" {{ $chapter->is_read ? 'checked' : '' }}>
                        </label>
                        {{ $chapter->path }}
                    </li>

                @endforeach
            </ul>
        </div>
    </div>
@endsection
