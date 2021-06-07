#!/usr/bin/env bash
./gen.services.sh
oz db ts-bundle ./dashboard/src/
oz db build -a
oz db source ./default.sql