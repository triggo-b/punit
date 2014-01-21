<<<<<<< HEAD
ZEND, ajax, WeatherAPI
========
https://github.com/moriony/padawan

php_memcache.dll для php/ext/
http://windows.php.net/downloads/pecl/releases/memcache/3.0.8/

установка:
Многие разработчики используют Memcached, систему кэширования различных объектов в оперативной памяти. Устанавливается она очень просто
:

1. Cкачиваем сам memcached в виде binaries.

2. Распаковываем архив на локальной машине в любую директорию, например c:\wampp\bin\memcached\

3. Для того, чтобы memcached работал как служба, нужно из директории, где установлен memcached, открыть командную строку (cmd) и прописать memcached.exe -d install

4. Запуск службы memcached можно сделать автоматическим или ручным. Заходим в Пуск->Настройка->Панель управления->Администрирование->Службы, ищем memcached server и запускаем его, если он остановлен.
Memcached готов, но для работы с ним нужно API для того языка, на котором вы пишите.
Список API

5. Для работы с memcached из PHP скачиваем PECL-модуль под нужную версию PHP c http://windows.php.net/downloads/pecl/releases/memcache/3.0.8/

6. Сохраняем dll-файл в директорию с расширениями PHP (у меня c:\program files\PHP5\ext\)

7. В файле php.ini в секцию с подключенными расширениями дописываем строку
[PHP_MEMCACHED]
extension = php_memcache.dll

8. Проверяем правильность установки через phpinfo(). Должен появится блок memcache с директивами memcache.allow_failover, memcache.chunk_size, memcache.default_port, memcache.hash_function, memcache.hash_strategy, memcache.max_failover_attempts.

9. Добавляем сервер/сервера memcached в исключения c://windows/system32/drivers/etc/hosts

10. Memcached готов к работе! :)
=======
first
=====

testRep
>>>>>>> c8a1273b9327845b62de899ad2b19a63cb67a630
