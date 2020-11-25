<? /*
Cкачивание и установка программ.

wget "полный путь к файлу (без масок)"   - скачать файл из интернета


Скачивание происходит с удаленного package (как google play).
cat /etc/apt/sources.list - удаленные места прописаны здесь.




На Ubuntu/Debian/Kali/Mint Linux:
~~~~~~~~~~~~~~~~~~~~~
sudo apt-get install            - скачать и установить программу.
                                      sudo apt-get install chromium-bsu
                                      whereis chromium-bsu - куда установилась
									  Скачивание происходит с удаленного package (как google play).
sudo apt-get remove             - удалить программу
                                      sudo apt-get remove  chromium-bsu
sudo dpkg –i ляля.deb            - установить программу из файла .deb(таким расширением нужно скачать сперва при помощи wget ляля.deb)
                                      -i  - install
sudo dpkg –r ляля   - удалить программу (здесь указываем просто название package без расширения и т.д)
                                      -r  - remove



На RedHat/CentOS/Amazon Linux:
~~~~~~~~~~~~~~
sudo yum install         - скачать и установить программу
sudo yum remove          - удалить программу
sudo rpm –i              - установить программу из файла .rpm(таким расширением нужно скачать сперва при помощи wget ляля.rpm)
sudo rpm –e              - удалить программу





sudo reboot now     - перезагружать linux
sudo shutdown now   - выключить linux


*/ ?>