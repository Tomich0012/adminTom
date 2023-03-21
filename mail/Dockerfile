FROM ubuntu

RUN apt-get update && \
    apt-get -y install postfix dovecot-core dovecot-imapd dovecot-pop3d dovecot-lmtpd dovecot-managesieved dovecot-sieve 

# Copier les fichiers de configuration
COPY ./etc/postfix/main.cf /etc/postfix/main.cf
COPY ./etc/postfix/master.cf /etc/postfix/master.cf
COPY ./etc/dovecot/dovecot.conf /etc/dovecot/dovecot.conf

# Exposer les ports nécessaires pour le serveur de messagerie
EXPOSE 25 143 587 993

# Démarrer les services Postfix et Dovecot
CMD service postfix start && service dovecot start && tail -f /dev/null


