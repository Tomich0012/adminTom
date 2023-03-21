# Image sur laquelle se bas´ee - Elle sera t´el´echarg´ee lors du build
FROM ubuntu:22.04
# Auteur du Dockerfile - Optionnel
LABEL key="John Doe <john.doe@example.com>" 
# RUN permet de lancer des commandes qui seront ex´ecut´ees lors de la cr´eation de l'image.
RUN apt-get update && apt-get install -y nginx
# Copier un fichier index.html qui se trouve dans le m^eme dossier que le Dockerfile
# vers le dossier /var/www/html/ de l'image.
COPY index.html /var/www/html/
# Variable d'environnement qui sera disponible au sein du conteneur.
ENV MA_VAR ma_valeur
# Ouvrir/Exposer le port 80 du conteneur.
EXPOSE 80
# CMD permet de lancer des commandes directement dans le conteneur lorsqu'il sera lanc´e.
CMD ["nginx", "-g", "daemon off;"]
