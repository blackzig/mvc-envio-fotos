<?php
class galeriaController extends controller{

    public function index(){
        $height = 925;
        $width = 618;
        $dados = array(
            'url'=>'http://plataformageek.net/wp-content/uploads/2015/02/00.jpg',
            'alt'=>'foto da Cammy de costas',
            'height'=>$height,
            'width'=>$width
        );

        $this->loadTemplate('galeria',$dados);
    }
}