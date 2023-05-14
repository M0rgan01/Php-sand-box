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

#### Build and run
```bash
$ docker compose -f .docker/docker-compose.yml up -d
```

#### Utilisation de l'image de dev

```bash
$ docker compose run php-fpm ${commande}
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
