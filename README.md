# ¿Qué es PHP?

PHP es un lenguaje de programación de código abierto que corre del lado del servidor y se puede incrustar en documentos HTML. A pesar de que PHP es principalmente orientado al servidor se puede implementar en diferentes entornos de ejecución.

 Para que PHP se pueda usar es necesario tener un servidor local (XAMPP en el caso de windows).

## Introducción

#### A continuación vamos a ver los aspectos básicos sobre PHP, como variables, constantes, estructuras de control, estructuras repetitivas, funciones, POO, etc.

### Estructura básica de un script PHP

Al igual que en HTML se deben definir etiquetas que nos dicen el inicio y el final de un script. Es importante entender la estructura básica de un proyecto que soporte desarrollo de scripting con PHP.

Usualmente todos los archivos del script se guardan en una carpeta principal, esto da la oportunidad de que podamos abrir un server local temporal usando el comando:

"php -S localhost:3000"

Haciendo esto podemos verificarlo abriendo localhost en el puerto 300 desde el navegador

## Funciones de salida

Son las que permiten mostrar información al usuario cuando se ejecuta un proceso determinado o cuando se realiza un proceso de petición.

Entre estos están:

#### echo: Se utiliza para mostrar una o varias cadenas de texto en la salida del servidor web.

#### print: Es parecida a echo pero solo puede imprimir una cadena de texto a la vez.

#### print_r: Se utiliza para mostrar información sobre una variable de una manera más legible y amigable.

#### sprintf: Es parecida a print pero no devuelve la cadena formateada en la salida estándar, devuelve la cadena formateada como resultado.

#### var_dump: Es utilizada para mostrar información sobre una variable.

## Variables y constantes

Las variables se definen usando el símbolo "$" seguido al nombre de la variable.

Las constantes de declaran de la siguiente manera:

`define("primer parámetro", "segundo parámetro");`

Donde el primer parámetro es el nombre de la variable y el segundo parámetro es el valor.

## Tipos de datos

Existen varios tipos de datos que se puedan usar para almacenar diferentes tipos de información.

1. Enteros
2. Float
3. Cadenas de texto
4. Booleanos
5. Arrays
6. Objetos
7. Recursos
8. Nulos

## Arrays, arrays asociativos y funciones para arrays

Los arrays son estructuras de datos que permiten almacenar varios valores en una sola variable.

### Arrays asociativos

Son un tipo de estructura de datos que permiten asociar claves con valores.

`$diasDeLaSemana = array( "dia1" => "lunes", "dia2" => "martes" )`

Para acceder a estos valores se usan las claves.

## Isset() y Empty()

Son dos funciones que se utilizan para saber si los datos están definidos o vacios, a pesar de que estas funciones son muy parecidas entre si tienen varias diferencias.

### Isset()

Esta función devuelve true o false dependiendo de si la variable está definida y tiene un valor.

### Empty()

Esta función comprueba si una variable o un elemento de un array está vacio.

## Metodos de arrays más usados

array_flip(): Intercambia las claves con sus valores correspondientes en un array.

array_fill(): Rellena un array con un valor especificado.

array_filter(): Filtra los elementos de un array utilizando una función de devolución de llamada.

array_map(): Aplica una función a cada elemento de un array y devuelve un nuevo array con los resultados. 

array_reduce(): Reduce un array a un solo valor aplicando una función de devolución de llamada. array_key_exists(): Comprueba si una clave existe en un array. 

in_array(): Comprueba si un valor existe en un array. 

array_rand(): Devuelve una o varias claves aleatorias de un array. 

array_unique(): Elimina los valores duplicados de un array. 

array_intersect(): Devuelve un array con los valores comunes a todos los arrays dados. 

array_diff(): Devuelve un array con los valores del primer array que no están presentes en los arrays adicionales. 

array_push(): Agrega uno o más elementos al final de un array. 

array_pop(): Extrae y elimina el último elemento de un array. 

array_reverse(): Revierte el orden de los elementos en un array. 

array_sum(): Devuelve la suma de todos los valores de un array numérico. 

array_product(): Devuelve el producto de todos los valores de un array numérico. 

array_chunk(): Divide un array en fragmentos más pequeños. 

array_keys(): Devuelve todas las claves de un array. 

array_values(): Devuelve todos los valores de un array. 

array_walk(): Aplica una función de devolución de llamada a cada elemento de un array.

## Estructuras de control

Estas son elementos que permiten controlar el flujo de ejecución de un programa.

Las estructuras de control más comunes son:

1. Estructuras condicionales:
   - If-else: Permite ejecutar un bloque de código si se cumple una condición y otro bloque si no se cumple.
   - Switch: Permite evaluar diferentes casos y ejecutar un bloque de código correspondiente a cada caso.
2. Estructuras de bucle (iterativas):
   - For: Permite ejecutar un bloque de código un número específico de veces, estableciendo una condición inicial, una condición de continuación y un incremento o decremento.
   - While: Permite ejecutar un bloque de código mientras se cumpla una condición específica.
   - Do-While: Similar a "while", pero garantiza que el bloque de código se ejecuta al menos una vez antes de evaluar la condición.

## Include, require, include_once, require_once

Son funciones que se utilizan para incluir archivos externos en un programa, estas funciones son parecidas al "export" e "import" de javascript.

**include** e **include_once** permiten incluir un archivo php en el programa, la diferencia es que **include** lo puede incluir varias veces.

**require** y **require_once** son similares a **include** pero si el archivo no es encontrado se va a parar la ejecución del programa.



## EJERCICIO #1 Checked



## Json_encode y json_decode

**json_encode** se utiliza para convertir una estructura de datos de PHP a una cadena JSON.

**json_decode** se utiliza para convertir una cadena JSON en una estructura de datos de PHP, si queremos convertir la cadena JSON a un array asociativo tenemos que agregar un segundo parámetro a la funcion con el valor **true**.

## API'S en PHP

Una API (Application Programming Interface) es un conjunto de reglas y protocolos que permite la comunicación y compartir datos entre sí, en otras palabras, una API define cómo solicitar y proporcionar servicios o funciones de una aplicación.

Una API actúa como una capa de abstracción (Esta es la que permite separar la implementación interna de un componente de su uso externo) que oculta la complejidad de una aplicación y proporciona una interfaz simplificada.

### CRUD

1. Post: Se utiliza para enviar datos a la API.
2. Get: Realiza solicitudes de lectura de datos desde la API.
3. Put: Permite modificar datos de la API.
4. Delete: Borra todo el objeto con datos seleccionado de la API,

## POO en PHP

La programación orientada a objetos es un paradigma de la programación que se centra en la organización y estructuración del código mediante el uso de objetos. Es decir, es un modelo que establece una forma especifica de abordar el código y ejecutarlo de manera mas ordenada.

En la programación orientada a objetos, los objetos son una base fundamental y se crean a partir de clases, las clases son un tipo de plantilla en la cual definimos las propiedades y comportamientos que van a tener los objetos que se creen a partir de ella.

Los principales conceptos de la programación orientada a objetos son:

1. Clases: Es un tipo de plantilla que define la estructura y comportamiento de los objetos.
2. Objeto: Es una instancia de una clase, un ejemplo, hay una clase llamada "Perro" con todas sus propiedades y tenemos un objeto llamado "Korra" creado a base de esa clase con sus propiedades y comportamientos.
3. Propiedades: Son variables que posee una clase y representan características de los objetos, estos mismos se le dan a los objetos creados a partir de esta, siguiendo el mismo ejemplo de arriba, sus propiedades podrían ser "pelo, cola, orejas, etc.".
4. Método: Son las funciones o acciones que un objeto puede hacer.
5. Encapsulación: Es el principio que establece que las propiedades y los métodos relacionados deben agruparse en una clase para ocultar los detalles internos y exponer solo una interfaz pública, Es decir, es establecer si las variables de una clase van a tener acceso publico, privado o protegido. 
6. Herencia: Esto permite crear nuevas clases basadas en clases existente.
7. Polimorfismo: Es la capacidad de una clase de tener múltiples formas o comportamientos.
8. Abstracción: Es el proceso de identificar las características de un objeto en un contexto determinado.

### Modificadores de acceso en PHP

Son palabras clave usadas en la programación orientada a objetos para controlar la visibilidad y el acceso a los atributos y métodos de una clase.

En PHP hay 3 modificadores de acceso:

1. Public: Estos son accesibles desde cualquier lugar, dentro de la clase, clases heredadas o por fuera de la clase incluso.
2. Private: Estos solo son accesibles dentro de la misma clase en la que se define.
3. Protected: Estos son accesibles dentro de la misma clase y desde clases heredadas.

### Clases

Las clases son plantillas que nos permiten definir propiedades y metodos o funciones de los objetos que se pueden crear a prtir de esta misma.

### Métodos estáticos

Es un método que pertenece a la clase como tal mas no a los objetos derivados de la misma, estos métodos se pueden llamar desde la clase misma sin necesidad de crear un objeto.

Estas son unas de las características de los métodos estáticos:

1. No necesitan una instancia: Como decía anteriormente estos métodos no necesitan un objeto o una instancia de la clase para poder usarlos, se pueden invocar directamente desde la clase usando la sintaxix **Clase::metodoEstatico()**.
2. No pueden acceder a propiedades de instancia: Estos métodos no pueden acceder a propiedades de la instancia o del objeto, solo pueden acceder a propiedades estáticas que hagan parte de la clase.
3. No pueden utilizar $this: No pueden usar la palabra clave **$this** para hacer referencia a una instancia de la clase ya que no hay una instancia asociada.
4. Útiles para utilidades compartidas: Son útiles para definir funciones que no dependen de una instancia específica. Se pueden utilizar para operaciones globales, cálculos matemáticos, acceso a bases de datos, manipulación de archivos, etc.

### Herencia

La herencia es un concepto que permite crear clases nuevas basadas en clases existentes, (funciona parecio a un import/export) y para hacerlo se usa la palabra extends.

### Clases abstractas

Es una clase que no se puede instanciar directamente, estas sirven como plantillas para otras clases. Se utiliza para definir la estructura común y los métodos que deben implementar las clases hijas.

Estas se usan para definir métodos abstractos que son vaciós, esto funciona y se usa cuando se necesitan varias clases con los mismos métodos pero diferente desarrollo de los mismos.

### Interfaces

Las interfaces son estructuras que definen métodos que una clase debe implementar. Estos especifican qué métodos debe proporcionar una clase sin especificar como se implementa estos mismo, es parecidos a las clases abstractas a diferencia de que con las interfaces solo se pasan lo métodos y las clases abractas extienden clases hijas con sus métodos.

### Trait

Este es muy parecido a una interfaz a diferencia de que:

1. Se utiliza para reutilizar código.
2. Sus métodos y propiedades son opcionales, es decir, no es necesario usar todos los métodos y propiedades en cambio con una interfaz si.
3. Una clase puede utilizar multiples traits.

### Polimorfismo

Es un concepto que permite tratar objetos de diferentes clases de manera uniforme, utilizando una interfaz común.

1. Herencia: El polimorfismo se logra a través de la herencia, donde una clase hija hereda de una clase padre y puede redefinir los métodos heredados.
2. Sustitución: Los objetos de la clase hija pueden ser tratados como objetos de la clase padre, lo que permite utilizarlos en lugar de objetos de la clase padre sin que se produzcan errores o comportamientos inesperados.

### Singleton

Es un patrón de diseño de software que restringe la creación de instancias a un único objeto.


## EJERCICIO #2 (Calculador sencilla en php) Checked

## Ejercicio #3 (Ejercicio POO) Checked


## Autoload

Es una técnica que permite cargar automaticamente las clases cuando se utilizan por primera vez, es decir, esta función se puede automatizar para cargar todos los archivos php que necesitemos sin necesidad de incluirlos cada uno en  el código, el uso de este ayuda a simplificar la gestión de las clases y archivos en proyectos grandes y evita el tener que cargar cada archivo manualmente. Está basada en la función:

``spl_autoload_register()``

La funcion ``dirname()`` se utiliza para obtener la ruta del directorio padre de un archivo o ubicación determinada determinada.

``__DIR__`` es una constante que devuelve la ruta del directorio en el que se encuentra.

``declare(strict_types=1)`` esta función realiza una cerificación más rigurosa en la asignación de tipos de datos, esto nos sirve para detectar y prevenir errores relacionados con los tipos de datos


## Ejercicio #4 (Autoload con clase hecha con trait) Checked


## Namespaces

La palabra clave **namespace** permite organizar clases, funciones y otros elementos en grupos lógicos. Es como una etiqueta que pones antes de los nombres de tus elementos para diferenciarlos.

La palabra clave **use** se utiliza en definición de **namespaces** para importar clases, funciones y constantes desde otros espacios de nombres.

Cuando se utiliza la palabra **use** se especifica una "ruta" corta adentro del grupo lógico que se creó usando el **namespace**

`namespace App; use App/funcion`

## Composer

El composer se utiliza para demostrar las dependencias de un proyecto. Proporciona una forma sencilla de descargar, instalar y actualizar librerias y paquetes de terceros.

El composer simplifica significativamente el proceso de gestión de dependencias en proyectos PHP.

Este es el equivalente a npm para node JS.


## Ejercicio #5 (Implementar todo lo aprendido)


# PHP AVANZADO

## Integración de bases de datos relacionales (Mysql)