#!/bin/sh
mysqldump -u root -pmasa1234 masasikatano > app/database/masasikatano.sql
sudo git add *
sudo git commit -m 'commit'
sudo git push
