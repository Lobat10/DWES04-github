###### *Desarrollo Web en Entorno Servidor - Curso 2017/2018 - IES Leonardo Da Vinci - Alberto Ruiz*
## U5P02 - Acceso al catálogo con JavaEE
----
#### 1. Descripción:

El objetivo es practicar el acceso a bases de datos desde JavaEE, probando casos algo más avanzados como el filtrado o la ordenación de resultados.

#### 2. Formato de entrega:

Incluye capturas del resultado en la Parte 2, o bien enseña el proyecto al profesor

#### 3. Trabajo a realizar:

##### Parte 1: Preparación de la base de datos

Utilizaremos la misma base de datos que en la práctica *U3P03 - Acceso al catálogo con PHP*. Esta base de datos incluirá las tablas **usuario**, **obra** y **autor**, u otras parecidas adaptadas a la temática de tu base de datos. Para describir el enunciado se asumirá que trabajamos con libros.

##### Parte 2: Proyecto de acceso a la base de datos

Vamos a mostrar el contenido del catálogo: en este caso lo lógico será reutilizar las consultas SQL de la práctica de PHP.

###### 2.1 Preparación
1. Crea un proyecto web dinámico llamado `U5P02-Java-Catalogo`
2. Crea una carpeta `img` en la estructura del proyecto y copia en ella las imágenes correspondientes a los elementos de tu catálogo
3. Crea una carpeta `sql` en la estructura del proyecto y copia en ella un script SQL, resultado de exportar tu base de datos
4. Asegúrate de tener el driver JDBC para MariaDB en tu carpeta de instalación de Tomcat

###### 2.2 Listado de obras
5. Codifica la clase `Obra` que representará una obra de tu base de datos. No olvides codificar el constructor. Puedes cambiar el nombre por algo más adecuado a tu temática (Libro,Comic,Disco,...)
6. Codifica un servlet accesible mediante la URL `/MostrarCatalogo`, que creará objetos por cada obra. Al contrario que en PHP, no existe una forma directa de crear un objeto a partir del resultado de la consulta SQL:  para ello sería necesario usar un ORM ("mapeo" o asociación Objeto-Relacional) como Hibernate, que es algo más complejo. De momento utiliza el constructor de la clase para introducir los parámetros que nos llegan de la consulta y construir el objeto.
7. El servlet mostrará las obras en una tabla: pero sólo mostrará los campos de nombre y autor. Recuerda de la práctica de PHP que tendrás que hacer una consulta multitabla para lograr averiguar el nombre del autor.

###### 2.3 Detalle de obras

8. Codifica un servlet accesible mediante la URL `/MostrarObra` que mostrará todos los detalles de una obra (incluyendo el nombre del autor y la imagen, que debe visualizarse) cuyo identificador recibirá como parámetro. Asegúrate de que la página ofrezca un mensaje de error si no recibe el parámetro o este no existe en la base de datos
9. Modifica el servlet `/MostrarCatalogo` para que los nombres de las obras sean en realidad enlaces a  `/MostrarObra` con el parámetro correspondiente a cada obra.

###### 2.4 Ordenación de resultados
Vamos a permitir la ordenación del listado de obras por nombre o autor, y en los dos sentidos (ascendente o descendente).
10. Añade en `/MostrarCatalogo` unos enlaces con forma de triángulo o flecha hacia arriba y hacia abajo en la cabecera de la tabla en la que muestras las obras: hazlo en las dos columnas. Puedes usar imágenes [o entidades HTML](http://www.w3schools.com/charsets/ref_utf_geometric.asp).
11. Cuando se pulse en la flecha hacia arriba, los resultados se mostrarán de la A a la Z, y cuando se pulse en la flecha hacia abajo, al contrario
12. (Opcional): la flecha correspondiente al orden que se está utilizando en este momento, no será un enlace. Puedes usar otro color para el icono.

###### 2.5 Filtro de obras por autor
13. Modifica `/MostrarCatalogo` para que si recibe como parámetro el identificador de un autor se muestren:

* Los datos del autor (incluyendo su imagen si has añadido un campo de imagen a la tabla **autor**)
* El listado de obras, pero mostrando solo aquellas que son de ese autor.
* Un enlace *Eliminar filtros* que lleve a la misma plantilla, esta vez sin parámetros.


* (Opcional): Intenta que los enlaces de ordenación de resultados funcionen también para esta selección de obra
* Ahora modifica `/MostrarCatalogo` para que los nombres de autores sean enlaces al propio servlet, pero añadiendo como parámetro el identificador del autor.

###### 2.6 Filtro de búsqueda
14. Incluye en `/MostrarCatalogo` un formulario con un campo de texto para buscar obras por nombre. El formulario será procesado por el mismo servlet, y mostrará solo aquellas obras cuyo nombre contenga el texto buscado. Esto puede hacerse de dos formas:

* Más sencilla: obligar a que contenga todo el texto leído del campo en el mismo orden
* Más compleja y mejor: separar las palabras introducidas en el campo, y obligar a que las contenga todas

15. Al final incluye el enlace *Eliminar filtros* para volver a la misma plantilla, sin parámetros.
16. (Opcional): permitir la búsqueda también por autor

###### 2.7 Navegabilidad y formato
17. Asegúrate de que tu solución es navegable sin utilizar el botón *Atrás* del navegador: si no es así, incluye enlaces para solucionarlo
18. Añade los estilos que desees a la presentación de resultados (márgenes, espaciado de celdas, colores...)