
# REST API Guide

### 1) Get list of users
- ROUTE: **/api/user**
- METHOD: **GET**
```
```
### 2) Get specific user data
- ROUTE: **/api/user/{user_id}**
- METHOD: **GET**

![Mockup for feature A](https://github.com/Maksim1990/PHP_Zend_framework_demo_app/blob/master/data/API_demo/get.png)

### 3) Create new user
- ROUTE: **/api/user/**
- METHOD: **POST**
- Required parameters:
```
username, fullname, email, phoneno, address
```
![Mockup for feature A](https://github.com/Maksim1990/PHP_Zend_framework_demo_app/blob/master/data/API_demo/create.png)

### 4) Update user
- ROUTE: **/api/user/{user_id}**
- METHOD: **PUT**
- Required parameters:
```
username, fullname, email, phoneno, address
```
![Mockup for feature A](https://github.com/Maksim1990/PHP_Zend_framework_demo_app/blob/master/data/API_demo/update.png)

### 5) Delete user
- ROUTE: **/api/user/{user_id}**
- METHOD: **DELETE**
![Mockup for feature A](https://github.com/Maksim1990/PHP_Zend_framework_demo_app/blob/master/data/API_demo/delete.png)
