<div class="sidebar-item">
    <div class="tabs-container">
        <div class="tabs">
            <div data-target="#panel-one" class="tab active">Nổi bật</div>
        </div>
        <div class="panel active" id="panel-one">
            @foreach($popularNews as $popularNew)
            <div class="section-item">
                <h3><a href="{{ route('page.news',$popularNew->slug) }}">{{ $popularNew->title }}</a></h3>
                <ul>
                    <li><i class="far fa-folder"></i> <a href="{{ route('page.category',$popularNew->category->slug) }}">{{ $popularNew->category->name }}</a></li>
                    <li><i class="far fa-clock"></i> {{ $popularNew->created_at->diffForHumans() }}</li>
                </ul>
            </div>
            @endforeach
        </div>
        <div class="panel" id="panel-two">
            @foreach($recentNews as $recentNew)
            <div class="section-item">
                <h3><a href="{{ route('page.news',$recentNew->slug) }}">{{ $recentNew->title }}</a></h3>
                <ul>
                    <li><i class="far fa-folder"></i> <a href="{{ route('page.category',$recentNew->category->slug) }}">{{ $recentNew->category->name }}</a></li>
                    <li><i class="far fa-clock"></i> {{ $recentNew->created_at->diffForHumans() }}</li>
                </ul>
            </div>
            @endforeach
        </div>

        <div class="panel" id="panel-three">
            @foreach($recentNews as $recentNew)
            <div class="section-item">
                <h3><a href="{{ route('page.news',$recentNew->slug) }}">{{ $recentNew->title }}</a></h3>
                <ul>
                    <li><i class="far fa-folder"></i> <a href="{{ route('page.category',$recentNew->category->slug) }}">{{ $recentNew->category->name }}</a></li>
                    <li><i class="far fa-clock"></i> {{ $recentNew->created_at->diffForHumans() }}</li>
                </ul>
            </div>
            @endforeach
        </div>

    </div>
</div>

<div class="sidebar-item">
    <div class="sidebar-news category-news">
        <h2>Danh mục</h2>
        @foreach($categoryLists as $categoryList)
        <div class="section-item">
            <h3>
                <i class="far fa-arrow-alt-circle-right"></i>
                <a href="{{ route('page.category',$categoryList->slug) }}">{{ $categoryList->name }}</a>
                <span>({{ $categoryList->newslist_count }})</span>
            </h3>
        </div>
        @endforeach
    </div>
</div>

<div class="sidebar-item">
    <div class="sidebar-news news-with-image">
        <h2>Tin tức bên lề</h2>
        @foreach($sidebarNews as $sidebarNew)
        <div class="section-item">
            <div class="section-item-news">
                <a href="{{ route('page.news',$sidebarNew->slug) }}">
                    <img src="{{ asset('images/'.$sidebarNew->image) }}" alt="{{ $sidebarNew->title }}" class="width-100">
                </a>
                <h3><a href="{{ route('page.news',$sidebarNew->slug) }}">{{ $sidebarNew->title }}</a></h3>
            </div>
            <ul>
                <li><i class="far fa-folder"></i> <a href="{{ route('page.category',$sidebarNew->category->slug) }}">{{ $sidebarNew->category->name }}</a></li>
                <li><i class="far fa-clock"></i> {{ $sidebarNew->created_at->diffForHumans() }}</li>
            </ul>
        </div>
        @endforeach
    </div>
</div>

<div class="sidebar-item">
    <div class="sidebar-news">
        <h2>Tin tức ngẫu nhiên</h2>


        @foreach($randomNews as $randomNew)
        <div class="section-item">
            <div class="section-item-news">
                <a href="{{ route('page.news',$randomNew->slug) }}">
                    <img src="{{ asset('images/'.$randomNew->image) }}" alt="{{ $randomNew->title }}" class="width-100">
                </a>
                <h3><a href="{{ route('page.news',$randomNew->slug) }}">{{ $randomNew->title }}</a></h3>
            </div>
            <ul>
                <li><i class="far fa-folder"></i> <a href="{{ route('page.category',$randomNew->category->slug) }}">{{ $randomNew->category->name }}</a></li>
                <li><i class="far fa-clock"></i> {{ $randomNew->created_at->diffForHumans() }}</li>
            </ul>
        </div>
        @endforeach
    </div>
</div>


@push('scripts')
<script>
    $(function() {

        const tabs = document.querySelector('.tabs');
        const panels = document.querySelectorAll('.panel');
        tabs.addEventListener('click', function(e) {
            if (e.target.tagName == 'DIV') {
                const targetPanel = document.querySelector(e.target.dataset.target);
                panels.forEach(function(panel) {
                    if (panel == targetPanel) {
                        panel.classList.add('active');
                        targetPanel.classList.add('active');
                    } else {
                        panel.classList.remove('active');
                    }
                });
            }
        });

        $('.tabs > .tab').on('click', function(e) {
            $('.tab').removeClass('active');
            $(this).addClass('active');
        });

    });
</script>
@endpush