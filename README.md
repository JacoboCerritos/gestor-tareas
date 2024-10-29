# Gestor de Tareas

Este proyecto es un gestor de tareas simple que permite a los usuarios agregar y listar tareas utilizando PHP, MariaDB, JavaScript, HTML y CSS. El proyecto está diseñado para funcionar con XAMPP como servidor local.

## Tabla de Contenidos

- [Características](#características)
- [Tecnologías Utilizadas](#tecnologías-utilizadas)
- [Instalación](#instalación)
- [Uso](#uso)
- [Estructura de Archivos](#estructura-de-archivos)
- [Solución de Problemas](#solución-de-problemas)
- [Contribuciones](#contribuciones)
- [Licencia](#licencia)

## Características

- Agregar nuevas tareas con título y descripción.
- Listar tareas existentes con fecha de creación.
- Diseño responsivo utilizando HTML y CSS.
- Interacción dinámica con JavaScript para una experiencia de usuario mejorada.

## Tecnologías Utilizadas

- **PHP**: Para el backend y la gestión de bases de datos.
- **MariaDB**: Para la gestión de datos de tareas.
- **JavaScript**: Para la interactividad del lado del cliente.
- **HTML/CSS**: Para el diseño de la interfaz de usuario.
- **XAMPP**: Para configurar el entorno de desarrollo local.

## Instalación

1. **Descargar e instalar XAMPP**:
   - Puedes descargar XAMPP desde [Apache Friends](https://www.apachefriends.org/index.html).
   - Sigue las instrucciones para instalar XAMPP en tu sistema operativo.

2. **Configuración de la base de datos**:
   - Abre XAMPP y enciende los módulos de **Apache** y **MySQL**.
   - Accede a **phpMyAdmin** en tu navegador: `http://localhost/phpmyadmin`.
   - Crea una nueva base de datos llamada `gestor_tareas`.
   - Ejecuta el siguiente SQL para crear la tabla de tareas:

   ```sql
   CREATE TABLE tareas (
       id INT AUTO_INCREMENT PRIMARY KEY,
       titulo VARCHAR(255) NOT NULL,
       descripcion TEXT NOT NULL,
       fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );



## Uso
Inicia el servidor Apache y MySQL desde el panel de control de XAMPP.
Abre tu navegador y dirígete a http://localhost/<nombre_de_tu_proyecto>.
Puedes comenzar a agregar tareas utilizando el formulario en la interfaz.
Para ver las tareas existentes, el sistema cargará automáticamente las tareas desde la base de datos al abrir la página.
Las tareas se mostrarán en una lista con sus respectivos títulos y descripciones.

## Estructura de Archivos
  
    /gestor-tareas
    │
    ├── index.html         # Página principal con el formulario de tareas.
    ├── db_config.php      # Archivo de configuración de la base de datos.
    ├── add_task.php       # Script PHP para agregar nuevas tareas.
    ├── list_tasks.php     # Script PHP para listar las tareas.
    └── script.js          # Archivo JavaScript para la interacción en el frontend.
    └── style.css          # Archivo CSS para el diseño de la interfaz.


## Solución de Problemas

Error en la consola: Unexpected token 'E', "Error en l"... is not valid JSON

Este error puede deberse a que el PHP está devolviendo un error en lugar de datos JSON. Asegúrate de que el archivo PHP que maneja la solicitud no tenga errores y esté devolviendo una respuesta JSON válida.
Error en la consola: TypeError: tasks.map is not a function

Este error indica que la respuesta obtenida no es un arreglo. Asegúrate de que la respuesta de tu PHP que carga las tareas esté devolviendo un JSON bien formado y que sea un arreglo.


      

