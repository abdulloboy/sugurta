<li class="nav-item">
    <a href="{{ route('obyekts.index') }}"
       class="nav-link {{ Request::is('obyekts*') ? 'active' : '' }}">
        <p>Obyektlar</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('risks.index') }}"
       class="nav-link {{ Request::is('risks*') ? 'active' : '' }}">
        <p>Risklar</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('oqibats.index') }}"
       class="nav-link {{ Request::is('oqibats*') ? 'active' : '' }}">
        <p>Oqibatlar</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('mahsulots.index') }}"
       class="nav-link {{ Request::is('mahsulots*') ? 'active' : '' }}">
        <p>Mahsulotlar</p>
    </a>
</li>


