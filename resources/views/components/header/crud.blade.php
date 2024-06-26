<div class="header__crud">
    <h1>{{ $title }}</h1>

    @foreach($btns as $item)
    <div>
        <a href="{{ $item->link }}">
            <button class="btn--{{ $item->type ?? 'primary' }}">{{ $item->name }}</button>
        </a>
    </div>
    @endforeach
</div>