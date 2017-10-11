#!/bin/bash
now_date=$(date +"%Y%m%d%H")
mysqldump -ujackkaze_dump -pdump@392022 -h127.0.0.1 jackkaze_wedding_database > ./dump/db_${now_date}.sql
mysqldump -ujackkaze_dump -pdump@392022 -h127.0.0.1 jackkaze_move_project > ./dump/db_project_${now_date}.sql