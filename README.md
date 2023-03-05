# Symfony Docker


# Modifications apportées
1. Suppression automatique de l'exécution de compose à chaque execution
2. Ajout des drivers MSSQL
3. Ajout de SQL Server
4. Ajout de "host.docker.internal:host-gateway" pour se connecter à SQL Server sur L'hôte



Voici les chaînes de connection SQL Server :
#Si Sql Server dans Docker
#DATABASE_URL=sqlsrv://sa:SQLServerPasw0rd@sqlserver-db/Commandes
#Si connexion à la BDD sur l'host
#DATABASE_URL=sqlsrv://sa:sql2019@host.docker.internal/Commande

## Getting Started


## Features

**Enjoy!**


## Credits

Created by [Kévin Dunglas](https://dunglas.fr), co-maintained by [Maxime Helias](https://twitter.com/maxhelias) and sponsored by [Les-Tilleuls.coop](https://les-tilleuls.coop).
