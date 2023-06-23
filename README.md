<img src="https://jorgebenitezlopez.com/github/symfony.jpg">
<img src="https://img.shields.io/static/v1?label=PHP&message=Symfony&color=green">

# Symfony translation

Instalación de Symfony, creación de usuarios con validación por email y acceso pr token

# Requisitos

- Symfony CLI: https://symfony.com/download
- PHP: PHP 8.2.3 (cli). Por ejemplo se puede descargar en OSX con: https://formulae.brew.sh/formula/php
- Composer: https://getcomposer.org/download/

# Pasos para la instalación de Symfomy y paquetes

- symfony new symfony-token --version=5.4
- composer require symfony/orm-pack
- composer require symfony/maker-bundle
- composer update
- composer require form validator twig-bundle security-csrf annotations
- composer require symfony/translation

# Configuración y creación de controlador

- Modificamos el .env para que genere un sqlite (https://www.sqlite.org/index.html)
- php bin/console make:controller (Home con su controlador y vista)
- Creo el archivos de traducciones
- Utilizo las traducciones en el controlador
- Hago rutas con variables para las traducciopnes de Twig


// Translation, en base de datos, en twig, en controler o formstypes, servicios y email. En las rutas, cómo construirlas. Ver en archivos en clase de tiddly y hacer Github. 

# Referencias

- https://github.com/diegotham/certificacion-symfony/blob/master/16-Miscellaneous/6-internacionalizacion-y-localizacion-en-symfony.md
- https://symfony.com/doc/5.4/translation.html
