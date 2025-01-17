##### awi40

# Sesiones en PHP

Base de la implementación de sesiones en aplicaciones web.

## index.php

Presenta la página de inicio de sesión que cuenta con las funciones:
* Validar el usuario y contraseña ingresados por el usuario.
    * Si se validan las credenciales: 
        * Se redirecciona a la página de bienvenida.
        * Se crea una variable de sesión con el nombre ```valido``` y un valor ```true```.
    * De lo contrario mostará texto alertando que las credenciales son incorrectas.

## bienvenido.php

Página de bienvenida al usuario que inicia sesión. Funciones:
* Valida que la variable ```valido``` tenga el valor ```true```.
    * Si se coincide:
        * Se mostrará la página de bienvenida y el nombre del usuario.
        * Además de un botón para cerrar sesión.
    * De lo contrario volverá a la página de inicio de sesión.

## borrar.php

Esta página cierra la sesión del usuario. Sus funciones:
* Imprime la variable de sesión ```nombre``` pero al haberse cerrado la sesión se borraron las variables por lo que no mostrará alguna salida.


# Intrucciones

### Entrar a la carpeta del index.php:
Con sessions
```zsh
cd php_sesiones
```
Con cookies
```zsh
cd php_cookies
```

### Iniciar el servidor php:
Con sessions
```zsh
php -S localhost:1989 '/workspaces/awi40/php_sesiones/index.php'
```
Con cookies
```zsh
php -S localhost:1989 '/workspaces/awi40/php_cookies/index.php'
```

### Reiniciar el servidor:
Con sessions
```zsh
php -S localhost:1989 -t /workspaces/awi40/php_sesiones
```
Con cookies
```zsh
php -S localhost:1989 -t /workspaces/awi40/php_cookies
```
