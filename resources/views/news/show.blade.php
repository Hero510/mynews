@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
            <div class="row">
                <div class="posts col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="caption mx-auto">
                                <div class="image">
                                    @if ($posts->image_path)
                                        <img src="{{ secure_asset('storage/image/' . $posts->image_path) }}">
                                    @endif
                                </div>
                                <div class="title p-2">
                                    <h1>{{ ($posts->title) }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                        <p>
                            {{ $posts->body }}
                        </p>
                    
                    <P>
                        <a href={{ route('news.index') }}>一覧に戻る</a>
                    </P>
                </div>
            </div>
        <hr color="#c0c0c0">
    </div>
@endsection
