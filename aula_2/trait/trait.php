<?php

trait Log{

    public function escreverLog($msg){
        echo "Log da $msg";
    }

}

class TestaX{


}


class TestaY extends TestaX{
    
    use Log;

    public function save(){ 
        echo $this->escreverLog("Trait");
    }
}

$y = new TestaY();

$y->save();