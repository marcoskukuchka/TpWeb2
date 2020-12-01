<?php
$pagina = 'Carrito';
require_once("includes/head.php");



?>

<main>
    <script>
        window.onload = function() {
            // Variables

            <?php $a_multi_productos = json_decode(file_get_contents('json/detalleproductos.json'), true); ?>



            let baseDeDatos = <?php echo json_encode($a_multi_productos) ?>;

            let $items = document.querySelector('#items');
            let carrito = [];
            let total = 0;
            let $carrito = document.querySelector('#carrito');
            let $total = document.querySelector('#total');
            let $botonVaciar = document.querySelector('#boton-vaciar');



            // Funciones
            function renderItems() {
                for (let info in baseDeDatos) {

                   
                        nombre = baseDeDatos[info].nombre;
                        precio = baseDeDatos[info].precio;
                        id_prod = baseDeDatos[info].id_producto

                        console.log(id_prod);

                      

                        // Estructura
                        let miNodo = document.createElement('div');
                        miNodo.classList.add('card', 'col-sm-5');
                        // Body
                        let miNodoCardBody = document.createElement('div');
                        miNodoCardBody.classList.add('card-body');
                        // Titulo
                        let miNodoTitle = document.createElement('h5');
                        miNodoTitle.classList.add('card-title');
                        miNodoTitle.textContent = nombre;
                        // Imagen
                        let miNodoImagen = document.createElement('img');
                        miNodoImagen.classList.add('img-fluid');
                        miNodoImagen.setAttribute('src', info['id_producto']);
                        // Precio
                        let miNodoPrecio = document.createElement('p');
                        miNodoPrecio.classList.add('card-text');
                        miNodoPrecio.textContent = precio;
                        // Boton 
                        let miNodoBoton = document.createElement('button');
                        miNodoBoton.classList.add('btn', 'btn-warning');
                        miNodoBoton.textContent = 'Añadir';
                        miNodoBoton.setAttribute('marcador', id_prod);
                        miNodoBoton.addEventListener('click', anyadirCarrito);
                        // Insertamos
                        miNodoCardBody.appendChild(miNodoImagen);
                        miNodoCardBody.appendChild(miNodoTitle);
                        miNodoCardBody.appendChild(miNodoPrecio);
                        miNodoCardBody.appendChild(miNodoBoton);
                        miNodo.appendChild(miNodoCardBody);
                        $items.appendChild(miNodo);
                    }
                

            }

            function anyadirCarrito() {
                // Anyadimos el Nodo a nuestro carrito
                carrito.push(this.getAttribute('marcador'))
                // Calculo el total
                calcularTotal();
                // Renderizamos el carrito 
                renderizarCarrito();
            }

            function renderizarCarrito() {
                // Vaciamos todo el html
                $carrito.textContent = '';
                // Quitamos los duplicados
                let carritoSinDuplicados = [...new Set(carrito)];
                // Generamos los Nodos a partir de carrito
                carritoSinDuplicados.forEach(function(item, indice) {
                    // Obtenemos el item que necesitamos de la variable base de datos
                    let miItem = baseDeDatos.filter(function(itemBaseDatos) {
                        return itemBaseDatos['id_producto'] == item;
                    });
                    // Cuenta el número de veces que se repite el producto
                    let numeroUnidadesItem = carrito.reduce(function(total, itemId) {
                        return itemId === item ? total += 1 : total;
                    }, 0);
                    // Creamos el nodo del item del carrito
                    let miNodo = document.createElement('li');
                    miNodo.classList.add('list-group-item', 'text-right', 'mx-2');
                    miNodo.textContent = `${numeroUnidadesItem} x ${miItem['nombre']} - ${miItem['precio']}$`;
                    // Boton de borrar
                    let miBoton = document.createElement('button');
                    miBoton.classList.add('btn', 'btn-danger', 'mx-5');
                    miBoton.textContent = 'X';
                    miBoton.style.marginLeft = '1rem';
                    miBoton.setAttribute('item', item);
                    miBoton.addEventListener('click', borrarItemCarrito);
                    // Mezclamos nodos
                    miNodo.appendChild(miBoton);
                    $carrito.appendChild(miNodo);
                })
            }

            function borrarItemCarrito() {
                console.log()
                // Obtenemos el producto ID que hay en el boton pulsado
                let id = this.getAttribute('item');
                // Borramos todos los productos
                carrito = carrito.filter(function(carritoId) {
                    return carritoId !== id;
                });
                // volvemos a renderizar
                renderizarCarrito();
                // Calculamos de nuevo el precio
                calcularTotal();
            }

            function calcularTotal() {
                // Limpiamos precio anterior
                total = 0;
                // Recorremos el array del carrito
                for (let item of carrito) {
                    // De cada elemento obtenemos su precio
                    let miItem = baseDeDatos.filter(function(itemBaseDatos) {
                        return itemBaseDatos['id_producto'] == item;
                    });
                    total = total + miItem[0]['precio'];
                }
                // Formateamos el total para que solo tenga dos decimales
                let totalDosDecimales = total.toFixed(2);
                // Renderizamos el precio en el HTML
                $total.textContent = totalDosDecimales;
            }

            function vaciarCarrito() {
                // Limpiamos los productos guardados
                carrito = [];
                // Renderizamos los cambios
                renderizarCarrito();
                calcularTotal();
            }

            // Eventos
            $botonVaciar.addEventListener('click', vaciarCarrito);

            // Inicio
            renderItems();
        }
    </script>

    <div class="container">
        <div class="row">

        <?php require_once("includes/aside.php")?>;


            <!-- Elementos generados a partir del JSON -->
            <main id="items" class="col-sm-4 row"></main>
            <!-- Carrito -->
            <aside class="col-sm-2">
                <h2>Carrito</h2>
                <!-- Elementos del carrito -->
                <ul id="carrito" class="list-group"></ul>
                <hr>
                <!-- Precio total -->
                <p class="text-right">Total: $ <span id="total"></span></p>
                <button id="boton-vaciar" class="btn btn-danger">Vaciar</button>
            </aside>
        </div>
    </div>
    </main>

<?php
require_once("includes/footer.php");
?>

