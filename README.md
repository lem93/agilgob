<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>


## Agilgob Test

### Instalacion

Development environment es [Laravel Homestead](https://laravel.com/docs/7.x/homestead) con todos los settings en default.

Para hecharlo a volar solo hay que correr los comandos
- `composer install`
- `npm install`
- `npm run dev`  
-  copiar las variables del archivo .env.example a .env
- crea la base de datos mysql vacia de nombre `agilgob`
- corren las migraciones y los seeds con el comando `php artisan migrate:refresh --seed`

### Caracteristicas

- Server side pagination with search and sorting
- Usando vue.js
- Validacion de datos con notificacion de errores
