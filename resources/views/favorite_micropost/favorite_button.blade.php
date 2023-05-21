@if (Auth::user()->is_favoriting($micropost->id))
    {{-- unfavoriteボタンのフォーム --}}
    <form method="POST" action="{{ route('favorites.unfavorite', $micropost->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-warning btn-sm normal-case" 
            onclick="return confirm('id = {{ $micropost->id }} をお気に入りから外します。よろしいですか？')">Unfavorite</button>
    </form>
@else
    {{-- favoriteボタンのフォーム --}}
    <form method="POST" action="{{ route('favorites.favorite', $micropost->id) }}">
        @csrf
        <button type="submit" class="btn btn-secondary btn-sm normal-case">Favorite</button>
    </form>
@endif
