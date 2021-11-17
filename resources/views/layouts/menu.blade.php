<li class="nav-item">
    <a href="{{ route('flights.index') }}"
       class="nav-link {{ Request::is('flights*') ? 'active' : '' }}">
        <p>Flights123Go</p>
    </a>
</li>

<style>
    h1{
        position: relative;
        left: 1px;
        top: 4px;
        color: white; 
        padding-left:20px;
        padding-top: 5px;
        padding-right: 5px;
        padding-bottom: 5px;
        font-size: 15px;
        text-align: center;
        border-radius: 10px;
        background-color: #5d5b5b;
    }
    .content-header{
        padding: 20px;
        margin-left: 400px;
    }
    </style>


<li class="nav-item">
    <a href="{{ route('logs.index') }}"
       class="nav-link {{ Request::is('logs*') ? 'active' : '' }}">
        <p>Logs</p>
    </a>
</li>


