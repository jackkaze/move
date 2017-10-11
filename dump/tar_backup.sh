#!/bin/bash
tar zcvf ./dump/dump.tar.gz ./dump --exclude=./dump/dump.tar.gz --exclude=./dump/backup.sh --exclude=./dump/remove_backup.sh --exclude=./dump/tar_backup.sh