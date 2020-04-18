<?php
class Connection {

    public static function make($config){

        try {
            //return new PDO('mysql:host=localhost;dbname=mytodo','root','lampolampo');
            return new PDO(
               $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
               // $config['options']
            );
        } catch (PDOException $e) {
            die('non si riesce conettere...' . $e->getMessage());
        }
    }

}
