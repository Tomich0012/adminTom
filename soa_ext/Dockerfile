FROM ubuntu/bind9

RUN apt-get update && apt-get install -y bind9

COPY named.conf /etc/bind/
COPY woodytoys.lab /etc/bind/
COPY reverse.lab /etc/bind/

RUN mkdir /var/log/named

EXPOSE 53/tcp
EXPOSE 53/udp

CMD ["/usr/sbin/named","-g"]


