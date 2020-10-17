FROM devopsedu/webapp

ADD website /var/www/html

RUN rm /var/www/html/indexl.html

CMD apachectl -D FOREGROUND
