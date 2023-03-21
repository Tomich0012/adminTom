docker rm -f $1 
docker build -t $1 .
docker run -d -p 80:80 --name $1 $1 