# Application Symfony Todolist
## Install Symfony version 4.x.x
__Terminal__: ```composer create-project symfony/website-skeleton my_project_name "4.4.*"```
## Procédure d'installation
## Etapes de développement

### Database
__Config database dans .env__:  
```DATABASE_URL=mysql://root:@127.0.0.1:3306/db_todolist```  

__Création physique de la base de données:__  
```bin/console doctrine:database:create```
### Entités
__Les types de données de l'application__:  
On a deux entités qui apparaissent: _Category_ et _Todo_
1. Category(id, name)
2. Todo(id, title, content, createdAt, updatedAt, todoFor)  

__Terminal__:
Pour créer les deux entités: ```php bin/console make:entity```
Commencer par Category puis Todo.  
La relation se fera à partir de l'entité Todo, avec une propriété _category_id_ qui sera du type __relation__.
### Migration
1. Création du fichier de migration ```php bin/console make:migration```
2. Exécuter la migration ```php bin/console doctrine:migrations:migrate```-> créé les tables Todo et Category dans MySql
## Git commit
1. git add .
2. git commit -m "description_of_commit"

# Fixtures
Installer d'abord: ```composer require orm-fixtures --dev```