<? /*

Архивирование

		tar cvf mytar.tar Folder1     -   (   tar cf 'название архива'     'Что в него запихать'  )
					 c - create
		             v - variable (увидеть что он добавляет)
					 f - в файл, всегда должна быть в конце!

		tar tf mytar.tar      -  посмотреть содержимое mytar.tar
		tar xf mytar.tar      - распакавать



Команды для компрессии , компрессируют файл, не директорию! Поэтому сперва нужно создать tar файл
		gzip mytar.tar       - этот же файл скомпрессирует и  добавть расширение.
		gunzip mytar.tar.gz  - раскопрессирвать

		bzip2 mytar.tar         -  компрессировать
		bunzip2 mytar.tar.bz2   -  раскопрессирвать

		xz mytar.tar         -  компрессировать
		unxz mytar.tar.xz    -  раскопрессирвать



Архивирование и сжатие
tar czf mytar.gz Folder1       z - gzip
tar cjf mytar.bz2 Folder1     j - bzip2
tar cJf mytar.xz Folder1      J - xz




Также в линуксе есть zip архивирование как в виндовс
zip -r  myzip.zip  Folder1  - архивирование
unzip  myzip.zip            - разархивирование



*/ ?>