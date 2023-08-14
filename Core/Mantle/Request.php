<?php

namespace Chungu\Core\Mantle;


class Request {
    public static $errors = [];
    //get the current URI
    public static function uri() {

        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }
    //get the method as requested by the router
    public static function method() {
        return $_SERVER['REQUEST_METHOD'];
    }
    public function form(String $input) {
        if (!empty($_POST) || !empty($_GET)) {
            if (self::method() == 'POST') {
                return htmlspecialchars(trim($_POST[$input]));
            }
            if (self::method() == 'GET') {
                return htmlspecialchars(trim($_GET[$input]));
            }
        }
    }

    public function get(String $key){
        if(!isset($_GET[$key])){
            return false;
        }
        return htmlspecialchars(trim($_GET[$key]));
    }
    public function validate(array $input, array $fields) {
        $validator = new Validator();
        return $validator->validate($input, $fields);
    }
   
    public function handleAjaxForm() {
        if (!isset($_POST) || empty($_POST)) {
            $data["status"] = "fail";
            $data["message"] = "Please fill in the form";
            return $data;
        } else {
            $data["status"] = "success";
            $data["message"] = "Updated User";
            return $data;
        }
    }
}
