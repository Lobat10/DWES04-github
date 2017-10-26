###### *Desarrollo Web en Entorno Servidor - Curso 2017/2018 - IES Leonardo Da Vinci - Alberto Ruiz*
## U2P03 - Control de flujo
#### Entrega de: *Adrián Lobato*
----
#### 1. Descripción:

Vamos a practicar las sentencias de control de flujo en PHP

#### 2. Formato de entrega:

Este u otro documento en el que se incluya el codigo fuente del archivo o archivos generados, así como una captura de pantalla de una ejecución.

#### 3. Trabajo a realizar:

Crea un nuevo proyecto PHP *U2P03-PHP-Control de flujo* que consistirá en una página web “index.php” o “index.html” con enlaces a las siguientes páginas, que resolverán diferentes problemas. En cada una de las páginas se incluirá un enlace “Volver” para regresar a la página principal.

##### Parte 1: “ecf-diferencia.php”


Pedir al usuario dos números A y B entre el 1 y el 10. Escribir en pantalla tantos asteriscos como diferencia haya entre los números (resolviéndolo con while, mientras uno sea menor que otro se escribe asterisco) y repetir con almohadillas (resolviéndolo con for utilizando la diferencia entre a y b como número de repeticiones).

##### Parte 2: “ecf-suma.php”

Pedir un número X y calcular la suma de los X primeros números naturales (1 + 2 + 3 + …).

##### Parte 3: “ecf-potencia.php”

Pedir dos números A y B y calcular la potencia A elevado a B utilizando iteraciones (no una función matemática predefinida).

##### Parte 4: “ecf-factorial.php”

Pedir un número X y calcular su factorial utilizando iteraciones.

##### Parte 5: “ecf-multiplicacion.php”

Pedir un número X y mostrar su tabla de multiplicar.

##### Parte 6: “ecf-recorte.php”

Pedir una cadena de texto y mostrarla varias veces: en cada línea se mostrará un carácter menos que en la anterior. Sólo se puede usar una función de strings: “strlen()”

```
Mi casa
Mi cas
Mi ca
Mi c
Mi 
Mi
M 
```

##### Parte 7: “ecf-meses”

En un formulario se recogerá un valor en un cuadro de texto y un radio group para indicar si el año actual es bisiesto o no. Habrá que comprobar si el valor leído corresponde al número de un mes (de 1 a 12) o a su nombre (“enero”, “febrero”). Si es así se mostrará el número de días que tiene ese mes, y si no es así se mostrará un error. Nota:para comparar String, busca referencia de las funciones *strcmp* y *strcasecmp*. 

##### Parte 8: “ecf-acumulador”

Ir pidiendo por formulario una serie de números enteros (de uno en uno) e irlos sumando. Se deja de pedir números al usuario cuando la cantidad supera el valor 50. Escribir entonces la suma de todos los números introducidos. Pista: para poder mantener el valor acumulado (antes de estudiar técnicas más avanzadas) utilizar un campo de formulario de tipo oculto (“hidden”).

##### Parte 9: “ecf-multiplos”

Mostrar en pantalla los múltiplosde 3 y 5 entre el 1 y el 1000. A continuación mostrar en pantalla los 20 primeros múltiplos de 3 y 5.

##### Parte 10: “ecf-cuadrado”

Pedir un número X y generar un cuadrado como el que se muestra en la figura (en este caso X vale 10). Una vez resuelto, mejorarlo para que las filas pares salgan en un color más claro (lightblue por ejemplo) para facilitar la lectura. En la figura se ha usado un “padding” de 3 para los elementos de celda (td).

![U2P03](U2P03.png)

