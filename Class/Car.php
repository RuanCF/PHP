<?php
class Carro(){
    public function Andar
    {
        echo "Carro ta andando"
    }
}

class Fiat147 extends  Carro
{
    public function Andar {
        acho "Fiat147 se arrasta pelo chao"
    } 

}
$x = new Fiat147;
$x->andar;
?>