docker rm -f $1 
docker build -t $1 .
docker run -d --name $1 $1 

            #  hostport:container Port