echo Building Docker Images

docker build -t rams-rd-img .

echo Docker Image Built Image Name rams-rd-img

echo Creating Container...

docker run -p 3000:8080 --name rams-rd-con -it -v "/home/dev/rams-rd:/rams-rd" rams-rd-img