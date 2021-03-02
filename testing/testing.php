<?php
/* 
    introduccion al testing automatizado

Forma de encontra errores.
Testing manual
Se hace de forma manual con personas que usen el software
es costoso, lento y poco confiable

Testing automatizado
escribir porgramas que pueden probar y reportar los software.
Es comoda?, es linda?
son cosas que no se puden testear
existen tipos de testing

Unit TEST
Cada unidad tomada por separada y validarla fuera de su contexto
refactoring, integracion y documentacoin son fortalezas

necesiamos una herramienta que procese y reporte estos test
*/

use PHPUnit\Framework\TestCase;
class StackTest extends TestCase {
    public function testPushandPop(){
        $stack = [];
        $this->assertSame(0,count($stack));
        array_push($stack, 'foo');
        $this->assertSame('foo', $stack[count($stack)-1]);//aseveracion dejamos nuestras expectativas de respuestas
        $this->assertSame(1, count($stack));
        $this->assertSame('foo', array_pop($stack));
        $this->assertSame(0, count($stack));
    }
}

/* INTEGRATION TESTING
    Valida la interaccion entre componenetes, el comportamiento de todo el sistema, vale hacerlo con unit test?
    si por que a nivel global puede fallar
*/
//use PHPUnit\Framework\TestCase;
class WebTest extends TestCase {
    public function testAction(){
        $client = new Httpclient('misitio.com');
        $this->assertErrorCode(200, $client->sendRequest());
    }
}
/* preguntar si el dom tiene, en api podemos verificar que tiene el json */
