<?php

namespace Robsantossilva\Router;

class Router
{
    private $collection;
    private $method;
    private $path;

    public function __construct(string $path, string $method)
    {
        $this->collection = new RouterCollection;
        $this->method = $method;
        $this->path = $path;
    }

    public function get($path, $fn)
    {
        $this->request('GET', $path, $fn);
    }

    public function post($path, $fn)
    {
        $this->request('POST', $path, $fn);
    }

    public function request($method, $path, $fn)
    {
        $this->collection->add($method, $path, $fn);
    }

    public function run()
    {
        $data = $this->collection->filter($this->method);

        foreach ($data as $key => $value) {
            $result = $this->checkUrl($key, $this->path);
            $callback = $value;
            if ($result['result']) {
                break;
            }
        }

        if (!$result['result']) {
            $callback = null;
        }

        return [
            'params' => $result['params'],
            'callback' => $callback
        ];
    }

    private function checkUrl(string $toFind, $subject)
    {

        //toFind "/user/{id}/curso/{id_curso}"
        //subject "/user/1"
        // var_dump('$toFind', $toFind);
        // var_dump('$subject', $subject);
        // echo "\n\n";

        //Encontrar todas as ocorrencia de {} e extrair comovariaveis
        //Exemplo 1 /user/{id} => ['id']
        //Exemplo 2 /user/{id}/curso/{id_curso} => ['id', 'id_curso']
        preg_match_all('/\{([^\}]*)\}/', $toFind, $variables);

        //"/user/{id}/curso/{id_curso}"
        //"/user/1"
        // array(2) {
        // [0]=>
        //     array(2) {
        //         [0]=>
        //         string(4) "{id}"
        //         [1]=>
        //         string(7) "{id_curso}"
        //     }
        //     [1]=>
        //     array(2) {
        //         [0]=>
        //         string(2) "id"
        //         [1]=>
        //         string(5) "id_curso"
        //     }
        // }
        // var_dump('$toFind', $toFind);
        // var_dump('$subject', $subject);
        // var_dump('$variables', $variables);
        // echo "\n\n";

        //Escapas as barras / => \/
        //"\/user\/{id}\/curso\/{id_curso}"
        $regex = str_replace('/', '\/', $toFind);
        // var_dump('$regex', $regex);
        // echo "\n\n";


        //Substitui os pontos de variaveis {var} por uma expressão regular
        foreach ($variables[1] as $k => $variable) {
            $as = explode(':', $variable);
            $replacement = $as[1] ?? '([a-zA-Z0-9\-\_\ ]+)';
            $regex = str_replace($variables[0][$k], $replacement, $regex);

            // "\/user\/{id}\/curso\/{id_curso}"
            // -------------------------------------------------------------------
            // string(4) "{id}"
            // string(20) "([a-zA-Z0-9\-\_\ ]+)"
            // string(47) "\/user\/([a-zA-Z0-9\-\_\ ]+)\/curso\/{id_curso}"
            // -------------------------------------------------------------------
            // string(10) "{id_curso}"
            // string(20) "([a-zA-Z0-9\-\_\ ]+)"
            // string(57) "\/user\/([a-zA-Z0-9\-\_\ ]+)\/curso\/([a-zA-Z0-9\-\_\ ]+)"
            // var_dump($variables[0][$k], $replacement, $regex);
            // echo "\n\n";
        }

        // regex "\/user\/([a-zA-Z0-9\-\_\ ]+)\/curso\/([a-zA-Z0-9\-\_\ ]+)"
        //var_dump($regex);

        $regex = preg_replace('/{([a-zA-Z]+)}/', '([a-zA-Z0-9+])', $regex);

        //regex "\/user\/([a-zA-Z0-9\-\_\ ]+)\/curso\/([a-zA-Z0-9\-\_\ ]+)"
        //var_dump($regex);

        //Validar se o regex esperado é igual a url requisitada
        // "/^\/user\/([a-zA-Z0-9\-\_\ ]+)\/curso\/([a-zA-Z0-9\-\_\ ]+)$/"
        // "/user/1/curso/2"
        //result int(1)
        // params array(3) {
        // [0]=>
        // string(15) "/user/1/curso/2"
        // [1]=>
        // string(1) "1"
        // [2]=>
        // string(1) "2"
        // }

        //var_dump('/^' . $regex . '$/', $subject);
        $result = preg_match('/^' . $regex . '$/', $subject, $params);
        //var_dump($result);
        //var_dump($params);

        return compact('result', 'params');
    }
}
