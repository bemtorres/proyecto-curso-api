# API REST


## Datos

Nombre:

Rama:


# Instrucciones
## Requisitos

Instalar Laragon https://laragon.org/download/

| | |
|---|---|
| PHP | 7.4  |
| MySQL | 5.6 |
| Laravel | 8 |


Clonar repositorio en /www aprentando directorio root de laragon

```cmd
git clone https://github.com/leon-romero/rest-api-laravel.git
```

## Inicio de proyecto

```cmd
composer install

cp .env.example .env

php artisan key:generate
```

## Base de datos

* Crear base de datos
* agregar el nombre de la base de datos en el archivo .env

```md
DB_DATABASE=laravel
```

* Correr las migraciones

```md
php artisan migrate
php artisan migrate:fresh
```

## Comando de Git

Configuración

```md
git config --global user.name
git config --global user.email
```

Iniciar proyecto
```md
git init
```

Añadir cambios
```md
git add -A
git commit -m "comentario del commit"
```

Subir combios
```md
git push
```

Bajar cambios
```md
git pull
```


Otros
```md
git stash     // guardar cambios en memoria
git stash pop // bajar los cambios de memoria


git diff name_file // ver cambios de un archivo
git status         // ver el estado de los archivos
git log            // ver el historial de los commit



git branch // ver ramas
git checkout -b nombre_rama // crear rama y unirse
```

### Mejorando el flujo de trabajo
https://www.atlassian.com/es/git/tutorials/comparing-workflows/

```md
git flow init

git flow feature start nombre_rama

git push nombre_rama
```


## Recursos utilizados

 * [Laravel](https://laravel.com/docs/9.x/installation)
 * [GitFlow](https://www.atlassian.com/es/git/tutorials/comparing-workflows)

## APIS

 * [Jsonplaceholder](https://jsonplaceholder.typicode.com/)
  * [Poke api](https://pokeapi.co/)
  * [Rick and morty](https://rickandmortyapi.com/)


