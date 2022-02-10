<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# SICEFA

SICEFA Nació como proyecto formativo del programa Tecnológico en Análisis y Desarrollo de sistemas de Información (ADSI), el cual ha evolucionado en su concepción, funcionalidad y metodología de desarrollo desde el primer curso que inicio el proyecto en 2009; Esta version pretende actualizar y seguir el desarrollo, con herramientas que nos permitan implementar de una mejor forma cada desarrollo.

## Comenzando 🚀

_Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para propósitos de desarrollo y pruebas._

Mira **Deployment** para conocer como desplegar el proyecto.


### Pre-requisitos 📋

Para poder ejecutar el proyecto en nuestro equipo vamos a necesitar las siguientes herramientas:

- Laragon 
- Composer
- MysQL
- Editor de codigo
- Git


### Instalación 🔧

_Una serie de ejemplos paso a paso que te dice lo que debes ejecutar para tener un entorno de desarrollo ejecutandose_

_Empezaremos por clonar la rama del repositorio que se nos ha asignado. Abre Git Bash y dijita el siguiente comando._

```
 git clone -b <Rama> <LinkRepo>
```

_Actualizar dependencias de Composer_

```
 composer update
```
_Dependencias de npm_

```
 npm install
```


## Ejecutando las pruebas ⚙️

Una vez actualizadas todas las dependencias vamos a copiar el archivo **.env.example** , lo pegamos en la raiz del proyecto y cambiamos su nombre a **.env**

En ese mismo archivo vamos a configurar las variables para que coincidan con nuestra base de datos local.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

_Para agregar las tablas a la base de datos vamos a correr nuestras migraciones_

```
php artisan module:migrate <Modulo>

php artisan module:seed <Modulo> // Para correr los seeders que contienen los permisos de el modulo especificado.
```

## Construido con 🛠️

_Herramientas utilizadas para crear el proyecto_

* [Laravel](https://laravel.com) - El framework web usado
* [ReactJS](https://es.reactjs.org/docs/getting-started.html) - Libreria de javascript
* [Laragon](https://laragon.org/download/index.html) - Usado para generar RSS  
* [Composer](https://getcomposer.org) - Manejador de dependencias
<!-- ## Contribuyendo 🖇️

Por favor lee el [CONTRIBUTING.md](https://gist.github.com/villanuevand/xxxxxx) para detalles de nuestro código de conducta, y el proceso para enviarnos pull requests. -->

<!-- ## Wiki 📖

Puedes encontrar mucho más de cómo utilizar este proyecto en nuestra [Wiki](https://github.com/tu/proyecto/wiki) -->

<!-- ## Versionado 📌

Usamos [SemVer](http://semver.org/) para el versionado. Para todas las versiones disponibles, mira los [tags en este repositorio](https://github.com/tu/proyecto/tags).
 -->
## Autores ✒️

_Cada grupo de ADSI se ha visto involucrado en el desarrollo del aplicativo desde sus inicios_

* **Diego Mendez** - *Trabajo Inicial y lider del proyeccto* - [damendez](#)


<!-- También puedes mirar la lista de todos los [contribuyentes](https://github.com/your/project/contributors) quíenes han participado en este proyecto.  -->

<!-- ## Licencia 📄

Este proyecto está bajo la Licencia (Tu Licencia) - mira el archivo [LICENSE.md](LICENSE.md) para detalles -->

<!-- ## Expresiones de Gratitud 🎁

* Comenta a otros sobre este proyecto 📢
* Invita una cerveza 🍺 o un café ☕ a alguien del equipo. 
* Da las gracias públicamente 🤓.
* etc.
 -->


---
Centro de Formacion Agroindustrial la Angostura SENA.


