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
                    <h1>{{$user->username}}</h1>
                    <a href="#">Add New Post</a>

                </div>
                <div class="d-flex">
                    <div class="pr-5"><strong>153</strong> posts</div>
                    <div class="pr-5"><strong>95k</strong> followers</div>
                    <div class="pr-5"><strong>211</strong> following</div>
                </div>
                <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
                <div>{{$user->profile->description}}
                </div>
                <div><a href="https://celox.io">{{$user->profile->url ?? 'N/A'}}</a></div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-4">
                <img src="https://www.gravatar.com/avatar/d7948cc7f61791e99d4d3f9b99232fb3?s=328&d=identicon&r=PG&f=1"
                     class="w-100">
            </div>
            <div class="col-4">
                <img src="https://www.gravatar.com/avatar/1a8b4b0204b4de558c200d77bcacea29?s=328&d=identicon&r=PG&f=1"
                     class="w-100">
            </div>
            <div class="col-4">
                <img src="https://www.gravatar.com/avatar/532edc773ae31c876e14ea1cb7c7dbf9?s=328&d=identicon&r=PG&f=1/"
                     class="w-100">
            </div>
        </div>
    </div>
@endsection
