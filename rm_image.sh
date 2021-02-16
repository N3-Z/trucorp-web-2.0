#!/bin/bash
docker container pause trucorp-web-2.0
docker container rm trucorp-web-2.0 --force
docker image rm trucorp-web-2.0 --force
