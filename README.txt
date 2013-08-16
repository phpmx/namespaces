Los namespaces o nombres de espacio están disponibles a partir de PHP 5.3 . Como los define php.net de manera muy burda "son la manera de encapsular items", está definición puede sonar demaciado abstracta pero así lo es.

### Ejemplo:

Tenemos un archivo llamado **hola.php** dentro del folder **/home/lib/hola.php** pero también tenemos otro archivo llamado **hola.php** en otro directorio que estamos usando de una librería de terceros, es aquí donde entran los **namespaces** y nos ayuda a evitar conflictos entre clases y funciones con el mismo nombre y actúan de diferente forma.

## sample1.php

run `php sample1.php`

output

    Hola Mundo
    Hola Mundo
    Hola Mundo
    Hola Mundo
    Hola Mundo
    Hola Mundo
    

Código

    <?php
    
    namespace hola\mundo;
    
    class HolaMundo {
        public function hi(){
            echo "Hola Mundo \r\n";
        }
    }
    
    function holaMundo(){
        echo "Hola Mundo \r\n";
    }
    
    const HOLA_MUNDO = "Hola Mundo \r\n";
    
    # llamamos a la clase directamente
    $hola = new HolaMundo;
    $hola->hi();
    
    # llamamos a la funcion directamente
    holaMundo();
    
    # llamamos a la constante directamente
    echo HOLA_MUNDO;
    
    # llamamos a la clase usando namespaces
    $hola = new \hola\mundo\HolaMundo;
    $hola->hi();
    
    # llamamos a la funcion usando namespaces
    \hola\mundo\holaMundo();
    
    # llamamos a la constante usando namespaces
    echo \hola\mundo\HOLA_MUNDO;
    

# IMPORTANTE

Los namespaces solo sirven en **funciones**, **clases** y constantes. **No aplica para variables**

# Definir namespaces

La palabra reservada para definir a los namespaces es **namespace**

ejemplo:

    <?php
    namespace MyProject;
    

Los name spaces deben ser declarados al princio del script, aqui tenemos un ejemplo de un namespace mal declarado

    <?php
    $a = 0;
    namespace MyProject;
    

# Más Info

### [PHP.net][1]

### [Síguenos en Github][2]

### Clonanos

    git clone git@github.com:phpmx/namespaces.git

 [1]: http://php.net/manual/en/language.namespaces.php
 [2]: https://github.com/phpmx