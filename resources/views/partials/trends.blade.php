<div class="search">
    <form action="">
        <input type="search" name="search" placeholder="Search...">
        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>
</div>
<div class="top-recent">
    <h3>Top Recent&#128293;</h3>
    <ul>
        @foreach($trends as $post)
            <li>
                <a href="{{ route('gossip.show', $post) }}">
                    {{ strip_tags($post->content) }}
                </a>
                <span class="views-counter"><i class="fa-solid fa-eye"></i> {{ formatLargeNumber($post->views) }}</span>
            </li>
        @endforeach
    </ul>
</div>
