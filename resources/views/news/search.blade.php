@extends('layouts.front')

@section('content')
    @section('content')
    <div class="container">
        <h1>検索結果</h1>

        @if ($news->count())
            <ul>
                @foreach ($news as $item)
                    <li>
                        <h2><a href="{{ route('news.show', $item->id) }}">{{ $item->title }}</a></h2>
                        <p>{{ $item->content }}</p>
                    </li>
                @endforeach
            </ul>
        @else
            <p>該当するニュースはありません。</p>
        @endif
            <P>
                <a href={{ route('news.index') }}>一覧に戻る</a>
            </P>
    </div>
@endsection