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

print("Hi first commit");