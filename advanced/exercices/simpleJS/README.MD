# Simple Node.js + Docker example

The simplest possible example of using Node.js and Docker.

## Files

- /
  - src/index.js      Example Express web server.
  - .dockerignore     Make Docker ignore specified files.
  - Dockerfile        Script file for building our Docker image.
  - package.json      Node.js package file, specifies npm dependencies.

## Setup without Docker

You need Node.js and Docker installed.

First change to the directory and install dependencies:

```bash
npm install
```

### Directly run

The example Node.js application is just "Hello world", you run it directly like this:

```bash
npm start
```

## Build and run using Docker

To build the Docker image:

```bash
docker build --tag=simplejs .
```

To run the Docker image:

```bash
docker run -p 3000:3000 -d --name=simplejs simplejs
```

To see what Docker images you have locally:

```bash
docker image ls
```

To see what Docker containers you have running:

```bash
docker ps
```

To stop the container:

```bash
docker stop simplejs
```
