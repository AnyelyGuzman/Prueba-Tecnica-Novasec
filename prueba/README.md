Para iniciar la app correr el siguiente comando 
php spark serve


los archivos en los que se trabajaron son los siguientes:
-App\Config\Routes.php (Se declararon las rutas)
-App\Config\Database.php (Se configuro conexion a base de datos)
-App\Controllers\DisponibilidadController.php (Se crearon dos metodos uno para el inicio y el otro para hacer el filtro)
-App\Models\DisponibilidadModel.php  (Se declararon tres metodos, uno para obtener todas las habitaciones, el segundo para filtrar las habitaciones disponibles por fecha y habitacion, el tercero es para obtener los clientes )
-App\Views\disponibilidad.php (Se declaro la vista principal donde se piden los datos del filtro)
-App\Views\disponibilidadFilter.php (Se muestra si la habitacion esta o no disponible y un boton para hacer la reserva)
