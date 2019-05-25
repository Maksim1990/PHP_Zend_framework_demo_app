
**HOT TO INSTALL APP**
--
     
* *Start app and build required Docker containers:*

        docker-compose up -d
      
* *Install all composer dependencies:*

        docker exec -it zend_php composer install
        
* *Copy ``.env`` environment config file and set all required settings in it:*

        docker exec -it zend_php cp .env.dist .env


App is available on ``8089`` port
--
    http://127.0.0.1:8089
    
# REST API DEMO 
CHECK [REST API GUIDE](https://github.com/Maksim1990/PHP_Zend_framework_demo_app/blob/master/data/API_demo/API_DEMO.md)
