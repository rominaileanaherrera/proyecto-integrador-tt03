<?php
// serchbar
include_once('serchbar.php');


// navbar
/*  include_once('navbar.php');*/

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/faq.css">
    <title>Preguntas Frecuentes</title>
  </head>
  <body >
     <div class=" container " >
      <div class="titulo card-header text-center justify-content-center" style="background-color: #0279f6;" >
        <h1 style="color: #FFF;">Preguntas Frecuentes</h1>
      </div>

      <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" >
                ¿Como comprar en TecnoPrecios.com ? 
              </button>
            </h2>
          </div>
          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              <p> 
                <strong>   
                  Para realizar la compra desde TecnoPrecios.com deberás seguir los siguientes pasos:
                </strong>
              </p>
              <ul style="list-style-type: number;">
                  <li>Seleccioná el Login y pone tu usuario y contraseña. Si todavia no estas logeado, registrate primero.</li>
                  <li>Seleccioná el producto elegido y hacé click en botón de ' Comprar'. La página te redirecciona al carrito de compras.</li>
                  <li>Seleccioná la forma de entrega:
                    <ol>
                      a. <strong>Retiro  en Sucursal </strong>: Podés seleccionar retirar el producto en la sucursal más cercana sin ningún costo adicional.
                      <br>
                      b. <strong>Envío a Domicilio </strong>: Cargá los datos del domicilio en el que querés recibir tu compra. El costo de envío se calcula en base a la dirección ingresada.</li>
                    </ol>
                  </li>
                  <li>Completá los datos de forma de pago, seleccionando entre las diferentes tarjetas de crédito habilitadas con sus respectivas cuotas y promociones.</li>
                  <li>Completá los datos del titular de la tarjeta de crédito y el domicilio de facturación.</li>
                    <ol>
                      a. Si seleccionaste <strong>'Envío a Domicilio'</strong> podés elegir la misma dirección sin tener que completarla nuevamente.
                      <br>
                      b. Si seleccionaste <strong>' Retiro en Sucursal'</strong> necesitamos que completes el formulario para validad tu identidad.
                    </ol> 
                  <li>Tu compra se ha realizado con éxito. ¡Sólo resta que recibas o retires tu pedido, según la modalidad de entrega que hayas elegido!.</li>

                  <li>Recordá que en caso de haber optado por 'Retiro en Sucursal' con fecha diferida, deberás esperar el e-mail que confirma que tu producto ya está disponible para que lo retires.</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              ¿Como me registro?
              </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              <p> <a href="https://www.facebook.com" target="_blank">Registrate</a> en TecnoPrecios.com y empezá a disfrutar de todos nuestros descuentos y promociones.</P>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Cambios y Devoluciones
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
              <p>| Políticas y condiciones generales |</p>
              <p>TecnoPrecios te brinda 30 días de corrido para que puedas cambiar o devolver el producto. Los cambios se encuentran sujetos a disponibilidad de stock.</p>
              <p>Será necesario que el producto esté en las mismas condiciones que se entregó: embalaje en perfectas condiciones, con accesorios y manuales completos.</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingFour">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Quiero anular una compra
              </button>
            </h2>
          </div>
          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
            <div class="card-body">
              <p>Para anular una compra realizada comunicate con el Centro de Atención al Cliente al 0810-444-7025.</p>
            </div>
          </div>
        </div>
        
        <div class="card">
          <div class="card-header" id="headingFive">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              ¿Mi compra está registrada?
              </button>
            </h2>
          </div>
          <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
            <div class="card-body">
              <p>Podes verificar si tú compra está registrada, ingresando a <strong>Mi cuenta</strong>. Para ingresar a Mi cuenta, tenés que registrarte. Una vez registrado, ingresá a la sección Mis compras.</P>
              <p>En el detalle de la compra tenes los datos ingresados, así como también la opción de descargar tú factura. Si tenés problemas, podés completar el siguiente formulario.</p>
            </div>
          </div>
        </div>
        
        <div class="card">
          <div class="card-header" id="headingSix">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
              Cambio de contraseña
              </button>
            </h2>
          </div>
          <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
            <div class="card-body">
              <p><a href="https://www.facebook.com" target="_blank">Iniciá sesión</a>
              en TecnoPrecios.com para cambiar tu contraseña.</p>
            </div>
          </div>
        </div>
        
        <div class="card">
          <div class="card-header" id="headingSeven">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
              Devoluciones en tarjetas de crédito y débito
              </button>
            </h2>
          </div>
          <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
            <div class="card-body">
              <p> Los tiempos de acreditación pueden demorar entre 72 hs hábiles hasta 10 días corridos, dependiendo la tarjeta que hayas utilizado y contemplando el cierre de tú resumen de cuenta.</P>
            </div>
          </div>
        </div>
        
        <div class="card">
          <div class="card-header" id="headingEigth">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
              ¿Qué debo hacer si no me llego el e-mail de confirmacion de compra?
              </button>
            </h2>
          </div>
          <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
            <div class="card-body">
              <p>Te recomendamos que revises tu casilla de correo no deseado. De no haber recibido el mail podés comunicarte con el Centro de Atención al Cliente al <strong>0810-444-7025</strong>. </P>
            </div>
          </div>
        </div>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php

include_once('footer.php');

?>