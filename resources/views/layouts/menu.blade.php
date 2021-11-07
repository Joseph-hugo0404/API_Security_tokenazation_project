<li class="nav-item">
    <a href="{{ route('flights.index') }}"
       class="nav-link {{ Request::is('flights*') ? 'active' : '' }}">
        <p>Flights123</p>
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
        border-radius: 10px;
        background-color: #FF6700;
        
        
    
  
    </style>


<li class="nav-item">
    <a href="{{ route('logs.index') }}"
       class="nav-link {{ Request::is('logs*') ? 'active' : '' }}">
        <p>Logs</p>
    </a>
</li>


