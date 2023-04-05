# application Golang

## construction d'une image simple

Construisez l'image :

```bash
docker build -t go -f Dockerfile .
```
Démarrer un conteneur à partir de cette image :

```bash
docker run -it --rm -p 8090:8090 go
```

Vérifier que l'application est disponible sur http://localhost:8090/hello.

Vérifier la taille de l'image

```bash
docker image ls go
```

## construction d'une image optimisée

Construisez l'image :

```bash
docker build -t goprod -f prod.Dockerfile .
```

Démarrer un conteneur à partir de cette image :

```bash
docker run -it --rm -p 8090:8090 goprod
```

Vérifier que l'application est disponible sur http://localhost:8090/hello.

Vérifier la taille de l'image :

```bash
docker image ls goprod
```
