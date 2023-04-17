@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($profiles as $profile)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
            
                                <div class="title">
                                    {{ $profile->name }}
                                </div>
                                <div class="body mt-3">
                                    {{ $profile->gender }}
                                </div>
                                <div class="body mt-3">
                                    {{ $profile->hobby }}
                                </div>
                                <div class="body mt-3">
                                    {{ Str::limit($profile->introduction, 100) }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        <hr color="#c0c0c0">
        </div>
    </div>
@endsection