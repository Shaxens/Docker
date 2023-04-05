FROM golang:1.17.7 AS build

WORKDIR /build

COPY app.go .

RUN CGO_ENABLED=0 GOOS=linux GOARCH=amd64 go build app.go

FROM alpine:3.15

COPY --from=build /build/app /app

EXPOSE 8090

CMD ["/app"]