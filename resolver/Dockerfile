FROM ubuntu

RUN apt update 
RUN apt install bind9 -y
RUN apt update -y
RUN apt install net-tools -y
RUN apt install nano -y
RUN apt install iputils-ping -y
RUN apt install traceroute -y
RUN apt install dnsutils -y
RUN apt install traceroute -y
RUN apt install links -y
RUN apt install tcpdump -y

COPY named.conf etc/bind/

EXPOSE 53/tcp
EXPOSE 53/udp

CMD ["named","-g"]