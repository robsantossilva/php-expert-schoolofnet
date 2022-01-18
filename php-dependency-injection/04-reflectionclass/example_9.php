<?php

namespace MyNamespace {
    class Dependency
    {
        public function __construct(string $msg)
        {
        }
        public function showMe()
        {
            return "class Dependency has be used";
        }

        private function hideMe()
        {
            return "Dependency class has ben hided";
        }
    }

    $class = new \ReflectionClass('MyNamespace\Dependency');
    $object = $class->newInstance("Olá");

    var_dump($object->showMe());
    var_dump($class->getMethods());
    var_dump($class->getConstructor());
    var_dump($class->getConstructor()->getParameters());
};
