@if (Auth::user()->is_favoriting($micropost->id))
    <form method="POST" action="{{ route('favorites.unfavorite', $micropost->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-error btn-sm normal-case basis-1/2">Unfavorite</button>
    </form>
@else
    <form method="POST" action="{{ route('favorites.favorite', $micropost->id) }}">
        @csrf
        <button type="submit" class="btn btn-primary btn-sm normal-case">Favorite</button>
    </form>
@endif
