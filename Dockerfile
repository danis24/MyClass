FROM danis24/php7.1-apache

MAINTAINER Danis Yogaswara <danis@aniqma.com>

RUN apt-get update -y

RUN apt-get install -y php7.1-gd

RUN apt-get -y autoremove && apt-get clean && rm -rf /var/lib/apt/lists/*

EXPOSE 80
EXPOSE 443

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]