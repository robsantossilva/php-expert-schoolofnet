<?php

namespace App\Http;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Laminas\Config\Config;
use Laminas\Config\Writer\Xml;
use Laravel\Lumen\Http\ResponseFactory as HttpResponseFactory;

class ResponseFactory extends HttpResponseFactory
{
    public function make($content = '', $status = 200, array $headers = [])
    {
        /** @var Request $request */
        $request = app('request');
        $acceptHeader = $request->header('accept');

        // if (!$acceptHeader) {
        //     return $this->json($content, $status, $headers);
        // }

        $result = "";
        switch ($acceptHeader) {
            case 'application/json':
                $result = $this->json($content, $status, $headers);
                break;
            case 'application/xml':
                $result = $this->getXML($content);
                break;
            default:
                $result = $this->json($content, $status, $headers);
        }

        return $result;
    }

    protected function getXML($data)
    {
        if ($data instanceof Arrayable) {
            $data = $data->toArray();
        }
        $config = new Config([
            'result' => $data,
        ], true);

        $xmlWriter = new Xml();
        return $xmlWriter->toString($config);
    }
}
