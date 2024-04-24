<?php

    class Conexao {
        private static $dbNome = 'laboratorio';
        private static $dbHost = 'localhost';
        private static $dbUsuario = 'root';
        private static $dbSenha = '';

        private static $cont = null;

        public function __construc()
        {
            die("A função  init não é permitido");
        }

        public static function conectar(){
            if (self::$cont ==  null){
                try{
                    self::$cont = new \PDO("mysql:host=". self::$dbHost .";dbname=" . self::$dbNome, $dbUsuario, $dbSenha);
                }
                catch (\PDOException $exception){
                    die ($exception->getMessage());
                }
            }
            return self::$cont;
        }

        public static function desconectar(){
            self::$cont = null
        }
    }

?>