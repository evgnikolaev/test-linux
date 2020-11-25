<? /*
Скрипты bush

chmod a+x myscript3.sh trump 3
./myscript3.sh


 	//-- Ввод параметра от пользователя --

    echo "Введите параметр x"
    read x
                   или
    read -p "Введите параметр x" x




    //-- if else --

	if [ $1 == "vasia" ];then
	    echo "Privet $1"
	elseif [ $1 == "trump" ];then
	    echo "Hello $1"
	else echo "Zdorova $1"
	if  // закончился if




	//-- case --

    x=$2
	case $x in
              1) echo "One";;
          [2-9]) echo "Two-One";;
		"petya")  echo "Privet $x";;
			  *) echo "все остальное"
    esac



	 //-- while --
	 $COUNTER = 0

	 while [$COUNTER -lt 10]; do
	    echo "$COUNTER"
		$COUNTER=$(($COUNTER+1))
		# или let COUNTER=COUNTER+1
		# или let COUNTER+=1
	  done




     //-- for (1 пример) --
	for myfile in ls *.txt; do
        cat $myfile
    done


     //-- for (2 пример) --
	for x in {1..10}; do
        echo "x = $x"
    done


   //-- for (3 пример) --
	for (( i=1; i<10; i++ )); do
        echo "number i = $i"
    done



	//-- function --
    //у функции нет return, для этого используем глобальную переменную

    summa = 0
	myFunction(){
        echo 'is myFunction'
        echo 'param1 $1'
        echo 'param2 $2
        summa = $(($1+$2))
    }

	myFunction  50 10  // вызов
	echo "$summa"



*/ ?>