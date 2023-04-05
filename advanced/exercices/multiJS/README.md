# Multi-stage Docker build example

A more complicated Node.js and Docker example that has a multi-stage build.

This includes a build process for compiling TypeScript files to JavaScript.

## Files

- /
  - src/index.ts      Example Express web server in TypeScript.
  - .dockerignore     Make Docker ignore specified files.
  - Dockerfile        Script file for building our Docker image.
  - package.json      Node.js package file, specifies npm dependencies.
  - tsconfig.json     Configuration file for the TypeScript compiler.

## Setup without Docker

You need Node.js and Docker installed.

First change to the directory and install dependencies:

```bash
npm install
```

### Directly run

Before running the Node.js application you must build the TypeScripot code:

```bash
npm run build
```

Now, run it directly like this:

```bash
npm start
```

## Build and run using Docker

To build the Docker image:

```bash
docker build --tag=multijs .
```

To run the Docker image:

```bash
docker run -p 3000:3000 -d --name=multijs multijs
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
docker stop multijs
```
