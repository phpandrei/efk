### EFK

### Больно настраивается. Лучше бы filebit воткнуть

При создании надо сделать create index

Указываем *
на следующем шаге выбираем @timestamp

потом идем в Discover и там всё видим

### Так же настроил чтение файла по регулярке.

https://kamaok.org.ua/?p=3386

#### Плагин
fluent-plugin-elasticsearch:
https://rubygems.org/gems/fluent-plugin-elasticsearch/versions/5.2.3

#### Докер образ
https://hub.docker.com/r/fluent/fluentd/

#### В примере старые версии были. Потому юзал их

- ./docker/fluentd/plugins:/usr/lib/ruby/gems/2.5.0 - решаем проблему с установкой fluent-plugin-elasticsearch. 
выдал права папке по всем пунктам 

