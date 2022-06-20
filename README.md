# Componentes

<h2>Como habilitar la ruta principal</h2>
<p>
    Para habilitar una ruta principal <br>
    necesitamos 3 archivos , el index, el controlador y<br>
    el archivo de la ruta.
</p>

<p>
    En el archivo de la ruta que en este caso<br>
    se encuentra en la ruta src/main_view_routes/MainView.php<br>
    esta escrito el codigo que nos retorna <br>
    lo que el usuario final visualizara por pantalla
</p>

<p>
    En la ruta src/url_reader_controller/MainViewController.php<br>
    encontraremos el codigo que ejecuta<br>
    la tarea de incluir el archivo de la vista (MainView.php)<br>
    a el lugar en donde se ejecute la funcion getIndex() y getMainView()<br>
    Respectivamente a su debido tiempo.
</p>

<p>
    Finalmente en el index requerimos<br>
    el archivo del controlador para <br>
    poder ejecutar la funcion getIndex()
</p>