<?php
/* Patrones de diseño son soluciones conceptuales que se pueden aplicar, 
pateones de creacion
pateones de estructura
pateones de comportamiento
que afectan a las clases

Son ayudas de como puede funcionar nuestra aplicacion. paternitis es poner los patrones en todas las soluciones
*/

/* Singleton
    Que solo se instancie una vez y se pueda usar en diferentes partes (nodejs).
    El singleton tiene su constructor privado pero como se instancia si pasa esto.
    se crea un metodo publico que pueda instanciar el objeto y puedea verficar si ya se instanciop previamente-

*/

/* Factory
    es un patron creacional que ayuda en las instancias de objetos, se usa cuando la creacion de objeto es complejo muchos parametrso o calculos complejos
    logramos codigo abstracto y reutilizable, podemos reducir la complejidad del objeto, y va sobre un nivel de abstraccion.
*/
/* comannd 
    Patron de comportamiento se usa cuando eiste una operacion compleja, cuando necesitamos responder desde navegardor y otrp  de comandos en este caso la funcionalidad puede ser un objeto.
    se implemento con una iinterface con una function execute

    podemos recorrer un array de comando y el comand hara el execute solo unifica la interface

