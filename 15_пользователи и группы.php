<? /*

Пользователи и группы.


пользователя может только администратор
sudo useradd -m user1  -   создать юзера user1  ( -m  - с домашней  директорией)
							после нужно поставить пароль, чтобы он мог зайти в систему
passwd user1       - задаем пароль

При создании папки пользователя, в нее копируется все из так называемой директории скелета (  cd /etc/skel/  ).
Если мы в ней создадим папки, файлы в этой директории, они будут автоматически попадать в директории пользователя при создании.



sudo userdel –r user1     - стереть юзера user1 ( –r  - с его домашней  директорией, с его барахлом )




группы
sudo groupadd Programmers  - создать группу Programmers
sudo groupdel Programmers  - стереть группу Programmers


sudo usermod –aG Programmers vasya  - добавить юзера vasya в группу Programmers
                                    usermod - user modification
                                    -a      - append
                                    G       - в группу
sudo usermod –aG sudo vasya         - добавить юзера vasya в группу администраторы

sudo deluser vasya Programmers  - удалить юзера vasya  из групы Programmers



*/ ?>