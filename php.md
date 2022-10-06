# Commandes utiles

# Récupération des dépendances

```bash
$ composer update
```

## Docker

```bash
$ docker build -t php-dev .
```

```bash
$ docker run --net=host -v=$(pwd):/usr/src/myapp php-dev php ${file}
```

```bash
$ docker run --net=host -v=$(pwd):/usr/src/myapp php-dev composer ${file}
```

## Trouver le fichier php.ini

```bash
$ php --ini
```