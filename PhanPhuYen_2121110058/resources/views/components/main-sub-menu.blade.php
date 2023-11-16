@if (count($menus) > 0)
    <li class="nav-item active dropdown">
        <a class="nav-link dropdown-toggle " style="
        color: rgb(0, 0, 0) !important;" href="{{ $menurow->link }}" id="dropdown04"  >{{ $menurow->name }}</a>
        <div class="dropdown-menu" aria-labelledby="dropdown04">
            @foreach ($menus as $menu)
                <a class="dropdown-item " style="
                color: rgb(0, 0, 0) !important;" href="#">{{ $menu->name }}</a>
            @endforeach
        </div>
    </li>
@else
    <li class="nav-item"><a href="{{ $menurow->link }}" class="nav-link"  style="
        color: rgb(0, 0, 0) !important;">{{ $menurow->name }}</a></li>
@endif
