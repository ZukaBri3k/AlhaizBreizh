<header>
        <x-Navbar></x-Navbar>
    </header>
<h1>Bienvenue sur ton compte admin !</h1>

<a href="#" onclick="document.getElementById('deco').submit()">
    <form action="{{route('logout')}}" method="post" id="deco">@csrf</form>
    Se déconnecter
</a>


<form action="{{ route('updateAccount') }}" method="get">
    <input type="text" name="name">
    <button type="submit">Changer le nom</button>
</form>
