<div class="col-lg-4">
    <form action="{{ route('blog.search') }}" method="post">
        @csrf

        <div class="form-group">
            <input type="text" class="form-input" name="search" id="search" placeholder="Search" required>
            <button type="submit" class="btn-search"><i class="fas fa-arrow-right"></i></button>
        </div>
    </form>

    <div class="sidebar-post-content">
        {{-- Popular Content--}}
        <div class="popular-post">
            <div class="title">
                <h3>Popular Post</h3>
            </div>
            @foreach ($popularPosts as $popularPost)
                <div class="sidebar-item">
                    <div class="sidebar-img">
                        @if (!empty($popularPost->image))
                            <img src="{{ asset('storage/'.$popularPost->image) }}" alt="" class="img-fluid">                              
                        @else
                            <img src="{{ asset('storage/img_post/default.jpg') }}" alt="" class="img-fluid">                             
                        @endif
                    </div>
                    <div class="sidebar-info">
                        <a href="{{ route('blog.detail', $popularPost->slug) }}">{{ $popularPost->title }}</a>
                        <p>{{ date('M d, Y', strtotime($popularPost->created_at)) }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        {{-- Recent Content--}}
        <div class="recent-post">
            <div class="title">
                <h3>Recent Post</h3>
            </div>
            @foreach ($recentPosts as $recentPost)
                <div class="sidebar-item">
                    <div class="sidebar-img">
                        @if (!empty($recentPost->image))
                            <img src="{{ asset('storage/'.$recentPost->image) }}" alt="" class="img-fluid">                              
                        @else
                            <img src="{{ asset('storage/img_post/default.jpg') }}" alt="" class="img-fluid">                             
                        @endif
                    </div>
                    <div class="sidebar-info">
                        <a href="{{ route('blog.detail', $recentPost->slug) }}">{{ $recentPost->title }}</a>
                        <p>{{ date('M d, Y', strtotime($recentPost->created_at)) }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>