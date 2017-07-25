<?php
class Anuncios extends model{

    public function getQuantidade(){
        $sql = "SELECT COUNT(*) FROM anuncios";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $sql = $sql->fetch();
            return $sql[0];
        }else{
            return 0;
        }
    }

}