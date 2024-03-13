<div class="footer-top">
    <div class="bg-dc">
        <div class="container">
            <div class="links">
                <div class="left-links">
                    <div class="dc-comics-links">
                        <h4>DC COMICS</h4>
                        <ul>
                            @foreach(config('dc_comics_links') as $link)
                            <li>
                                <a href="#" class="">{{ $link['text'] }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="shop-links">
                        <h4>SHOP</h4>
                        <ul>
                            @foreach(config('shop_links') as $link)
                            <li>
                                <a href="#" class="">{{ $link['text'] }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="dc-links">
                    <h4>DC</h4>
                    <ul>
                        @foreach(config('dc_links') as $link)
                        <li>
                            <a href="#" class="">{{ $link['text'] }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="sites-links">
                    <h4>SITES</h4>
                    <ul>
                        @foreach(config('sites_links') as $link)
                        <li>
                            <a href="#" class="">{{ $link['text'] }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="copyright">All Site Content TM and &#169; 2020 DC Entertainment, unless otherwise <a href="#">noted here</a>. All rights reserved. <br>
                <a href="#">Cookies Settings</a>
            </div>
        </div>
    </div>
</div>
