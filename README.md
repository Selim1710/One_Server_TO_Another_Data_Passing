<h3 align="center"> Sending data from child server to parent server </h3>

# Steps:

* install yajra data table in parent server
* copy route, controller, resouces, data-table(app>>DataTables>>datatable) from this project and paste it into parent server code.
* Install guzzle-http-package in child server: composer require guzzlehttp/guzzle
* go to ResearchAndDevelopmentController. copy clientServerCodeNote-method code and paste it into child server login controllers method(by which method user doing login).
  

## Parent Server:
![main-server](https://github.com/Selim1710/One_Server_TO_Another_Data_Passing/assets/93088169/f7808cb3-f187-4c5b-b02e-09dc115ba867)

## Child Server:
![child-server-1](https://github.com/Selim1710/One_Server_TO_Another_Data_Passing/assets/93088169/4ead3799-8a90-43d2-bfb6-68dcbe24d32e)
