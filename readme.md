# Procedure d'installation
## Prérequis
- Serveur web local
- PHP 7.3
## Install pour un utilisateur lambda
- Ouvrir un dossir en local.
- Faire un git clone du repository
- Composer update/install?
## Création de la base de donnée
```bin/console doctrine:database:create```
## Migration
1. Création du fichier de migration ```php bin/console make:migration```
2. Exécuter la migration ```php bin/console doctrine:migrations:migrate```
## Fixtures
Les fixtures fonctionnent en mode developpement, "normalement".
```php bin/console doctrine:fixtures:load```