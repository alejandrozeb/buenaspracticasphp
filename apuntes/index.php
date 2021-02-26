<?php
/* APuntes del curso de platzi
    Serie de tecnicas para ser mas mantenibles y robustas.

    beneficios
    -cuando retomemos un codigo desoues e un tiempo, vamos a poder continuar con el desarrollo
    - Beneficia al equipo de trabajo, un codigo entendible hace mas facil que otra persona pueda continuar con el trabajo
    - el cliente tambien sale beneficiado ya que nuestro codigo sera mantenible y entendible.

    Todos los involucrados salen beneficiados.

    Ejen que hacen a la calidad del codigo--------
    se identifica por caracteristicas externas o internas.
    nos concentraremos en las internas.
    Tres ejes se componen
    -Legibilidad que tan facil es interpretar lo que el codigo dice, ejemplo de practica no identar el codigo
    - Mantenibilidad cuanto esfuerzo supondra adaptar el codigo a nuevos requerimientos
    - Testeabilidad cuanto esfuerzo supondra realizar pruebas sobre este código

    ----codigo prolifo    
*/
    $a=1;
    if($a<2 && $a<3)
    {
    print($a);    
    }
    /* se debe corregir la identacion de 25 para que forme parte del bloque if,las llaves de apertura y cierre de bloques de codigo  */
    $a=1;
    if($a<2 && $a<3){
        print($a);    
    }
    /* recuerda el codigo se escribe para humanos, las computadoras tienen copiladores.
    */
    if($a<2 && $a<3)
        print($a);

    if($a<2 && $a<3)
        print($a);
        
    if($a<2 && $a<3){
        print($a);
    }
                
    /* Se debe tener un estandar o todas tinen parentesis o ninguna, pero es recomendable usar en todas llaves asi sea solo de una linea
    Un estandar es una serie de reglas que genera codigo claro y consistente
    Evita que pierdas tiempo en problemas triviales
    */
    $a=1;if($a<2 && $a<3){print($a);}if($a<2 && $a<3){print($a);}
    /*  no se puede comprender el codigo debemos evitar este tipo
    consejos
    -definir un estandar: pensarlo una vez y déjalo por escrito
    - respetalo Haz un esfuerxo por adherir al estandar durante tu dia a dia
    -apoyate en algun linter esta herramineta ayuda a incorporarbuenas practicas, analiza el codigo frente a un estandar

    problemas dificiles invalidar caches y nombrar cosas veamos con nombrar cosas.

    identificador
        un nombre que no existe pero se crea ej variables, clase, módulos, componentes, etc.
    */
    function f(int $b,int$a):float{
        return ($b * $a)/2;
    }
    /* que hace este codigo, tenemos que adivinar que hace y como no es intuitiva */
    function calcula(int $base, int $altura):float{
        return ($base * $altura)/2;
    }
    /* que calcula? */
    function areaRectangulo(int $base, int $altura):float{
        return ($base * $altura)/2;
    }
    /* no calcula un rectangulo, es engañoso */
    function areaTriangulo(int $base, int $altura):float{
        return ($base * $altura)/2;
    }
    /* se sabe que hace la funcion a simple vista 
    
    --------------------CODIGO MODULAR------------
    Hacer codigo organizado en bloque que puedan ser compuesto
    */
    if($a<2 && $a<3){
        print($a);    
        print($a + $a);    
        print($a + 2);    
        print($a + 3);    
        print($a + 7);    
        print($a + 8);    
        print($a + 10);    
        print($a + 12);    
    }
    /* podemos llevarlo a una funcion */
    function sumaA($a){
        if($a<2 && $a<3){
            print($a);    
            print($a + $a);    
            print($a + 2);    
            print($a + 3);    
            print($a + 7);    
            print($a + 8);    
            print($a + 10);    
            print($a + 12);    
        }
    }

    sumaA();
    /* si tenemos que corregir algo podemos buscar en las funciones, al hacer debugs te facilita bastante, bloques dentro de una repetitiva, expresiones de repeticion, codigo que hace calculos complejos y con frecuencia*/

    /* -----------------Codigo reutilizable-------------
        Codigo que se pueda utilizar en diferentes situaciones, el codigo debe ser claro con los objetivos y el copy paste es nuestro peor enemigo los errores se puden ir arrastrando y nunca vamos a tener certeza de lo bueno o lo malo que puede estar nuestro codigo
    */
    $nombre = "alejandro";
    $apellido = "zeballos";
    $nombre = str_replace("?", 'o', $nombre);
    $apellido = str_replace("?", 'o', $apellido);

    /* usamos el codigo dos veces podemos crear una funcion */

    function normalizar($campo){
        return str_replace("?", 'o', $campo);
    }

    $nombre = normalizar($nombre);
    $apellido =
     normalizar($apellido);
    // esto puede prevenir bugs 
    /* ----------------------Codigo Organizado--------------
        nos referimos a como esta el sistema de archivos donde nuestro codigo esta organizado, como esta dispuesto.
        Se trata de logar una organizacion agrupada con sentido.
        /public
        /src    codigo proyecto
        /tests  codigo de test
        /vendor 

        es una convencion otra persona puede verlo y entenderlo sin problema
    */

    /* -------------------HARDcODING----------------------
        Es la paractica de escribir valores literales en lugar de identificadores, las consecuencias impactan en el codigo, volver a desplegar el codigo sin embargo deberia ser un cambio facil.
    */
    $numero = $a + 5;
    echo "el valor es 5 más".$numero;
    //que pasa si deseamos cambiar el 5 suponiendo que sea una constante que podria cambiar cada cierto tiempo como el tipo de cambio

    $constante = 5;
    $numero = $a + $constante;
    echo "el valor es 5 más".$numero;
    /* si hacemos un cambio solo impacta en la variable y no en todo el programa.
    
    el hardcoding tambien oculta informacion*/

    /* ----------EFECTOS COLATERALES----------------
        es algo que sucede mas alla de lo que se esta viedno un ejemplo puede ser afectar a una variable global en una funcion, editar una variable global en un metodo,
        no solo debemos ver el codigo si no extraer del contexto, nunca usar variables globales
    */

print("Hi first commit");