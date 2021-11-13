<?php
require_once 'customer.model.php';

class customer_cc{
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new customer();
    }
    
    public function Index(){
        require_once 'view/app.php';
    }
    
    public function save(){
        $customer = new customer();

        $customer->id = "";
        $customer->fullname = $_REQUEST['full_name'];
        $customer->email = $_REQUEST['email'];
        $customer->phone = $_REQUEST['phone'];
        
        $this->model->Registrar($customer);
        echo "OK";
    }
    
    public function delete(){
        $this->model->Eliminar($_REQUEST['id']);
        echo "OK";
    }

    public function edit(){

        $customer = new customer();

        $customer->id = $_REQUEST['userId'];
        $customer->fullname = $_REQUEST['full_name'];
        $customer->email = $_REQUEST['email'];
        $customer->phone = $_REQUEST['phone'];

        $this->model->Actualizar($customer);
        echo 'OK';
    }

    public function activateCustomer(){

        $customer = new customer();

        $customer->id = $_REQUEST['userId'];
        $customer->activate = $_REQUEST['activate'];
        
        $this->model->activarCliente($customer);
        echo "OK";
    }

    public function award(){

        $setAward = $_REQUEST['award'];
        
        $this->model->setAward($setAward);
    }

    public function list(){

        $list = $this->model->listar();
        
        echo '{"data": '. json_encode($list) .'}';
        
    }
    
    public function count_active(){

        echo json_encode($this->model->usersActive());
    }
}
?>