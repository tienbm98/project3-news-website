<div class="header-menu-container">
    <div class="container">
        <div class="header-menu">
            <nav>
                <ul>
                    <li><a href="{{ route('home') }}"><i class="fas fa-home"></i>Trang chủ</a></li>
                    @if(isset($mainmenus))
                    @foreach($mainmenus as $mainmenu)
                    <li>
                        <a href="/page/category/{{ $mainmenu->slug }}">{{ $mainmenu->name }}</a>
                    </li>
                    @endforeach
                    @endif
                </ul>
            </nav>
            <div class="search">
                <form action="{{ route('page.search') }}" method="GET">
                    <input id="searchinput" type="text" name="search" placeholder="Tìm kiếm">
                    <button class="search-btn" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>