Hola <i>{{ $demo->receiver }}</i>,
<p>Este es un email informativo, no reponda a este correo.</p>

<p><u>Datos del usuario:</u></p>
 
<div>
<p><b>Usuario:</b>&nbsp;{{ $demo->demo_one }}</p>
<p><b>Contraseña:</b>&nbsp;{{ $demo->demo_two }}</p>
</div>
 
Gracias,
<br/>
<i>{{ $demo->sender }}</i>