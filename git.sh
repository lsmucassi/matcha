#!/bin/bash
echo Always keep a backup incase the master get messed up
echo Adding all files_
git add *
echo commiting changes_
echo Enter commit message:
read mes
git commit -m $mes
git pull 
echo Pushing all files_
git push -u origin master
echo Done!!
