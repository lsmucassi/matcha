#!/bin/bash
echo Always keep a backup incase the master get messed up
echo Adding all files
git add *
echo commiting changes_
echo Enter commit message\n
read mes
git commit -m $mes
echo Pushing all files
git push -u origin master
echo Done!!
