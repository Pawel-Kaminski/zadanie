<form method="POST" action="{{ action('Controller@store') }}">
    Podaj liczbę całkowitą:<br>
    <input type="number" id="number" name="number" required>
    <input type="submit" id="send" name="send">
    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
</form>