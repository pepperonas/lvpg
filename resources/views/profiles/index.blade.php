@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <img src="http://files.softicons.com/download/android-icons/flat-icons-add-on-1-by-martz90/png/256x256/android.png"
                     class="rounded-circle" style="max-height: 96px; max-width: 96px">
            </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>{{ $user->username }}</h1>
                    <a href="/p/create">Add New Post</a>
                </div>

                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>

                <div class="d-flex">
                    <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                    <div class="pr-5"><strong>95k</strong> followers</div>
                    <div class="pr-5"><strong>211</strong> following</div>
                </div>
                <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
                <div>{{ $user->profile->description }}
                </div>
                <div><a href="https://celox.io"
                        target="_blank">{{ $user->profile->url ?? 'N/A' }}</a></div>
            </div>
        </div>
        <div class="row pt-5">

            @foreach($user->posts as $post)
                <div class="col-4 pb-4">
                    <a href="/p/{{ $post->id }}">
                        <img src="/storage/{{ $post->image }}" class="w-100">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
