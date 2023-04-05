FROM golang:1.17.7

COPY app.go .

RUN CGO_ENABLED=0 GOOS=linux GOARCH=amd64 go build app.go
RUN chmod +x app

EXPOSE 8090

CMD ["./app"]