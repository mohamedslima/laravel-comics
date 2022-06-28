@extends ('layouts.app')

@section('title')
    DC Comics | Comics
@endsection

@section('main_content')
    <div class="bg-main">
        <h2>
            Current Series
        </h2>
        <div class="container">
            <div class="comics-list">
                @foreach ($comics as $card)
                    <div class="comics-card">
                        <img src="{{ $card['thumb'] }}" alt="">
                        <h3>
                            <h3><a href=""></a></h3>
                        </h3>
                    </div>
                @endforeach
            </div>
        </div>
    </div>    
@endsection