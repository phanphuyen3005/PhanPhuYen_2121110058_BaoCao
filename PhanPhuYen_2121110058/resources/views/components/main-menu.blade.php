<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="#">PHUYEN STORE</a>
        <div class="box">
            <div class="bg-success">
                <input type="text" placeholder="Search">
            </div>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                @foreach ($menus as $menu)
                    <x-main-sub-menu :menu="$menu" />
                @endforeach
            </ul>
        </div>
        <div style="cursor: pointer;">
            
            <i class="fa-solid fa-cart-shopping"></i>
           GIỎ HÀNG
        </div>
    </div>
</nav>
