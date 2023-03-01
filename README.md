# Crud-Php-Store

Store developed in  php

# How to Install


``` shell
git clone https://github.com/YaelGF/Crud-Php-Store.git
```

``` shell
cd docker
docker built -t php:v1 .
```

``` shell
cd
docker run -it -v $(pwd)/Crud-Php-Store:/web -p8080:8080 --name php_conteiner -h php php:v1
```

``` shell
docker start -i php_conteiner
cd web
php -S 0.0.0.0:8080
```

# Run the project

## Main
![main](/assets/index.png)

## Insert
![insert](/assets/insert.png)
![insertR](/assets/insertResult.png)

![add](/assets/add.png)

## View
![view](/assets/view.png)

## Update
![Update](/assets/update.png)

## Delete
![Delete](/assets/delete.png)


# License
[Apache License 2.0](https://github.com/YaelGF/Crud-Php-Store/blob/main/LICENSE)