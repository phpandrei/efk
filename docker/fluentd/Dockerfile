FROM fluent/fluentd:v1.12.0-debian-1.0
USER root
RUN gem uninstall -I elasticsearch && gem install elasticsearch -v 7.17.0
RUN ["gem", "install", "fluent-plugin-elasticsearch", "--no-document", "--version", "5.0.3"]
USER root

#FROM fluent/fluentd:v1.14-debian-1
##RUN ["gem", "install", "fluent-plugin-elasticsearch", "--no-rdoc", "--no-ri"]
#RUN ["gem", "install", "fluent-plugin-elasticsearch"]