
@auth
<h4>Você está logado como {{ Auth::user()->name }}</h4>
<h4>Email: {{ Auth::user()->email }}</h4>
@endauth

@guest
<h4>Você não está logado</h4>
@endguest