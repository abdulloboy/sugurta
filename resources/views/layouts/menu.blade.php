<li class="nav-item">
    <a href="{{ route('obyekts.index') }}"
       class="nav-link {{ Request::is('obyekts*') ? 'active' : '' }}">
        <p>Obyekts</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('risks.index') }}"
       class="nav-link {{ Request::is('risks*') ? 'active' : '' }}">
        <p>Risks</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('oqibats.index') }}"
       class="nav-link {{ Request::is('oqibats*') ? 'active' : '' }}">
        <p>Oqibats</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('mahsulots.index') }}"
       class="nav-link {{ Request::is('mahsulots*') ? 'active' : '' }}">
        <p>Mahsulots</p>
    </a>
</li>


