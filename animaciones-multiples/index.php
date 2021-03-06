!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Animaciones sintaxis</title>
	<style>
		body{
			display: flex;
			align-items: center;
			justify-content: center;
			height: 100vh;
			color: white;
			font-family: Arial;

		}
		.container{
			border: 1px solid red;
			width: 100%;

		}
		.container:hover .cuadrado{
			/*Animación pausada al hacer hover*/
			animation-play-state: paused;
		}

		.cuadrado{
			width: 200px;
			height: 200px;
			background: #7dc900;
			margin: 20px;
			/* Nombre de las animaciones*/
			animation-name: cuadrado, rebote;
			/*duración de la animación*/
			animation-duration: 3s, .3s;
			border-radius: 50%;
			display: flex;
			/* alineacion vertical */
			align-items: center;
			/* alineaciónhorizontal */
			justify-content: center;
			/* para utilizar posiciones absolutas como el left:0 */
			position: relative;
			/* tiempo de retraso */
			animation-delay: 1s;

			/* # de veces que se repite la animación*/
			animation-iteration-count: infinite;

			/*suavisado de la animación:ease-in, ease-out, ease-in-out, linear*/
			/* animation-timing-function: ease; */

			/*dirección de la animación*/
			animation-direction: alternate;

			/* como se ve el elemento cuando termina la animacion */
			/* se queda con lo q contenga la última partede la animación */
			animation-fill-mode: forwards;

			/* estado de la animación: running, paused */
			/* animation-play-state: running; */

			/* lento a rápido */
			/* animation-timing-function: ease-in; */
			/* rápido a lento */
			/* animation-timing-function: ease-out; */
			/* extremos lentos y centro normal */
			/* animation-timing-function: ease-in-out; */
			/* velocidad constante  */
			/* animation-timing-function: linear; */

			/* velocidad que nosotros asiganmos en pasos */
			/* animation-timing-function: steps(5); */

			/* animación curba de bezier */
			/* animation-timing-function: cubic-bezier(.75,-0.31,.33,1.4); */
			/* cubic-bezier.com: podemos configurar los parametros q deseamos */

			animation-timing-function: linear, ease-in-out;

		}

		@keyframes cuadrado{
			0%{
				left: 0;
			}
			100%{
				left: calc(100% - 240px);
				/* el 100 % del hancho menos el tamaño del objeto + sus margenes*/
			}
		}

		@keyframes rebote{
			/* 0% */
			from{

			}
			/* 100% */
			to{
				transform: translateY(100px) scale(1,.8);
			}
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="cuadrado">Hola Mundo</div>
	</div>
	</body>
