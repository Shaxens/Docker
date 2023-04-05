# Signaux Docker

Il existe essentiellement deux commandes : `docker stop` et `docker kill` qui peuvent être utilisées pour arrêter un conteneur. Dans les coulisses, `docker stop` arrête un conteneur en cours d'exécution en lui envoyant un signal SIGTERM, laisse le processus principal le traiter et, après une période de grâce, utilise SIGKILL pour terminer l'application.

En exécutant des applications dans Docker, vous pouvez utiliser des signaux pour communiquer avec une application à partir de la machine hôte, recharger la configuration, effectuer un nettoyage à la fin du programme ou coordonner plusieurs exécutables.


Les signaux représentent une forme de communication inter-processus. Un signal est un message envoyé à un processus par le noyau pour notifier qu'une condition s'est produite [1].
Lorsqu'un signal est envoyé à un processus, le processus est interrompu et un gestionnaire de signal est exécuté. S'il n'y a pas de gestionnaire de signal, le gestionnaire par défaut est appelé à la place.
Le processus indique au noyau les types de signaux qu'il souhaite traiter de manière non par défaut en fournissant des fonctions de gestion (rappels). Pour enregistrer un gestionnaire de signal, utilisez l'une des fonctions de l'API de signal[2].
Lorsque vous exécutez la commande `kill` dans un terminal, vous demandez au noyau d'envoyer un signal à un autre processus.
Un signal courant est SIGTERM qui indique au processus de s'arrêter et de se terminer. Il peut être utilisé pour fermer les sockets, les connexions à la base de données ou supprimer des fichiers temporaires. De nombreux démons acceptent SIGHUP pour recharger les fichiers de configuration. SIGUSR1 et SIGUSR2 sont les signaux définis par l'utilisateur et peuvent être gérés d'une manière spécifique à l'application.

# Exercice

Construisez le conteneur `signal` :

```bash
docker build -t signal .
```

Lancez le :

```bash
docker run -it --rm -p 3000:3000 --name="signal" signal
```

Vérifiez que l'application est disponible sur http://localhost:3000

Envoyez le signal `SIGTERM` au conteneur :

```bash
docker kill --signal="SIGTERM" signal
```

ou tout simplement

```bash
docker stop signal
```

Observez le comportement et quelle partie du code est exécutée.

Refaire le même test avec d'autres signaux et observez.