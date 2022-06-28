@extends ('layouts.app')

@section('title')
    DC Comics | Comics
@endsection

@section('main_content')
    <div class="bg-main">
        <div class="container">
            <h2>
                Current Series
            </h2>
            <div class="comics-list">
                @foreach ($comics as $card)
                    <div class="comics-card">
                        <img src="{{ $card['thumb'] }}" alt="">
                        <h3>
                            <a href="">{{ $card['title'] }}</a>
                        </h3>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
