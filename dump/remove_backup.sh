#!/bin/bash
find ./dump -mtime +5 -name "db_*.sql" -exec rm -rf {} \;