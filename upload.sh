#!/bin/sh
mysqldump -u root -pmasa1234 masasikatano > app/database/masasikatano.sql
git add *
git commit -am 'commit'
git push
