# PHP Sand-box

## Commandes utiles

### Démarrer un server PHP

```bash
$ php -S localhost:8000
```

### Démarrer un server symfony

```bash
$ symfony server:start
```

ou

```bash
$ php -S localhost:8000 -t public/
```

### Trouver le fichier php.ini

```bash
$ php --ini
```

### Récupération des dépendances

```bash
$ composer install
```

### Mise à niveau des dépendances

```bash
$ composer update
```

### Docker

#### Mise en place de la DB

```bash
$ docker compose up -d
```

#### Création de l'image de dev

```bash
$ docker build -t php-dev .
```

#### Utilisation de l'image de dev

```bash
$ docker run --net=host -v=$(pwd):/usr/src/myapp php-dev ${commande}
```

### Doctrine

#### Validation des entités

```bash
$ bin/console doctrine:schema:valid
```

#### Update des entités

```bash
$ bin/console doctrine:schema:update --force
```
