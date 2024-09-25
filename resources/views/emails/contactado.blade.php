<h1>{{ __('mail.greeting', ['name' => $nombre]) }}</h1>
<p>{{ str_replace(':mensaje', $cuerpo, __('mail.body')) }}</p> <!-- Aquí se reemplaza :mensaje con el valor de la variable -->
<p>{{ __('mail.farewell') }}</p>
