#!/bin/bash
docker build -t trucorp-web-2.0 .
docker run -dit --name trucorp-web-2.0 -p 7000:80 trucorp-web-2.0
