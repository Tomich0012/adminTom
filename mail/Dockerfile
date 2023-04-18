FROM ubuntu:latest

RUN apt update

RUN apt install dovecot-imapd dovecot-pop3d -y
RUN apt install postfix -y

COPY dovecot.conf /etc/dovecot/
COPY main.cf /etc/postfix/

EXPOSE 25 143 587 993

CMD service postfix start && service dovecot start && tail -f /dev/null