@extends('layouts.app')

@section('content')
    <div>
        <div class="d-flex justify-content-between align-items-baseline mb-2">
            <h2>Friends</h2>
        </div>

        <div class="container">
            <div class="row row-cols-3">
                @forelse($users as $user)
                    <div class="col">
                        <div class="card">
                            <div class="card-body py-4 px-4">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl">
                                        <img src="assets/images/faces/{{ $user->face }}.jpg" alt="Face 1">
                                    </div>
                                    <div class="ms-3 name">
                                        @if($user->id == auth()->id())
                                            <h5 class="font-bold">{{ $user->name }} (Me)</h5>
                                        @else
                                            <a href="{{ route('home', $user->id) }}"><h5 class="font-bold">{{ $user->name }}</h5></a>
                                        @endif
                                        <h6 class="text-muted mb-0">&#64;{{ $user->username }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center">
                        <span class="font-bold">Sorry, nobody is here :(</span>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
