<? /*
Перенаправляем вывод команды не на экран, а в файл, файл создасться


>   - !!! стирает полностью файл names_sorted.txt, и создаст заново
	sort names.txt > names_sorted.txt
	sort names.txt > names.txt          - !!  грохнет names.txt (создает заново файл names.txt , а сортировать то нечего, будет пустым)



>>  - добавляет в файл, не затирает
	sort names.txt >> names_sorted.txt



grep aaa /etc/* 2> ~/Documents/error.txt
Кода линукс выдает результат, он выдает его в 2-ч потоках:
    в хорошем - удача
        >  или  >>
    в плохом - когда есть какая-то ошибка например "permission denied", и тому подобное.
        2>  или 2>>
    Можно записать и хорошие и плохие в один файл
        &>   ( grep aaa /etc/*  &> ~/result.txt )
	Можно оба потока использовать в одной команде, раздельно
	    grep aaa /etc/*  > ~/good.txt   2> error.txt



/dev/null -  вывод в никуда
             grep aaa /etc/* 2> /dev/null











*/ ?>