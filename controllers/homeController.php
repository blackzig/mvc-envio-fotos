<?php
class homeController extends controller{
    
    public function index(){
        $dados = array(
            'quantidade'=>5,
            'nome'=>'Michel',
            'idade'=>38
        );

        $this->loadTemplate('home', $dados);

    }

}