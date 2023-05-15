FROM ubuntu/bind9:latest

RUN apt-get update && apt-get install -y bind9

COPY named.conf /etc/bind/
COPY woodytoys.public.forward /etc/bind/

RUN mkdir /var/log/named
RUN apt update -y
RUN apt install net-tools -y
RUN apt install nano -y
RUN apt install iputils-ping -y
RUN apt install traceroute -y
RUN apt install dnsutils -y
RUN apt install traceroute -y
RUN apt install links -y
RUN apt install tcpdump -y

EXPOSE 53

CMD ["named","-g"]


