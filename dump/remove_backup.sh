#!/bin/bash
find ./dump/ -name "db_*.sql" -mtime +7 -exec rm -rf {};