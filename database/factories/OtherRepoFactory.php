<?php

foreach (\App\Utility\ModelFactoryParams::params() as $model => $param){
    $factory->define("OtherApp\\${model}", function () use ($param){
        return $param;
    });
}
