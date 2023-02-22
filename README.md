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

Долнжно быть много свободной памяти

файл у меня
Elasticsearch Disk watermark exceeded.pdf
elasticsearch - FORBIDDEN_12_index read-only _ allow delete (api) _ serveradmin.ru.pdf
попробовать 
```
arrow_upward
9
arrow_downward

Действительно, запуск curl -XPUT -H "Content-Type: application/json" http://localhost:9200/_all/_settings -d '{"index.blocks.read_only_allow_delete": null}', предложенный @Nishant Saini, решает очень похожую проблему, с которой я только что столкнулся.

Я исчерпал лимит водяных знаков на диске на своей машине.

person kghbln    schedule 02.02.2019
comment
я попробовал это, но я получил завиток: (7) Не удалось подключиться к локальному порту 9200: соединение отклонено --- завиток: (3) [подстановка] несоответствующая закрывающая фигурная скобка / скобка в столбце 5 - person ZINE Mahmoud; 15.05.2021

arrow_upward
3
arrow_downward

Используйте следующую команду:

curl -s -H 'Content-Type: application/json' -XPUT '[IP-server]:9200/_all/_settings?pretty' -d ' {
"index":{
"blocks" : {"read_only_allow_delete":"false"}
}
}'
```

```
curl -s -H 'Content-Type: application/json' -XPUT 'http://localhost:9200/_all/_settings?pretty' -d ' {
"index":{
"blocks" : {"read_only_allow_delete":"false"}
}
}'
```
```
curl -XPUT -H "Content-Type: application/json" http://localhost:9200/_all/_settings -d '{"index.blocks.read_only_allow_delete": null}'
curl -XPUT -H "Content-Type: application/json" http://localhost:9201/_all/_settings -d '{"index.blocks.read_only_allow_delete": null}'
```