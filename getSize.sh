#!bin/bash

dsize=0
format=''
format1=''

case "$2" in
     Music)
	format="mp3"
	format1="ogg"
	;;
     Picture)
	format="png"
	format1="jpg"
	;;
     Script)
	format="sh"
	;;
     Video)
	format="mp4"
	format1="avi"
	;;
     Text)
	format="txt"
	;;
esac

echo $(find $1 -type f -name *.$format1)

	for j in $(find $1 -type f -name *.$format)
	do
		let dsize=dsize+$(stat -c%s $j)
	done

	for j in $(find $1 -type f -name *.$format1)
	do
		let dsize=dsize+$(stat -c%s $j)
	done

echo "$dsize" 

