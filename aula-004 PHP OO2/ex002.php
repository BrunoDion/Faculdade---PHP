<?php 

    trait Menssagem{
        public function enviarMenssagem($mensagem){
            echo "$mensagem";
        }
    }

    class EmailSender{
        use Menssagem;

        public function writeEmail($write){
            $this->enviarMenssagem("Mensage: $write.");
        }
    }

    class SMSSender{
        use Menssagem;

        public function writeSMS($writeSMS){
            $this->enviarMenssagem("Mensage: $writeSMS");
        }
    }

    $email = new EmailSender();
    echo $email->writeEmail("Hello World!");
    echo "<br>";
    $SMS = new SMSSender();
    echo $SMS->writeSMS("Ola mundo!");


?>