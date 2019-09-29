<?php namespace Alexsaab\LaravelElasticsearch;

use Illuminate\Support\Facades\Facade as BaseFacade;


/**
 * Class Facade
 *
 * @package Alexsaab\LaravelElasticsearch
 */
class Facade extends BaseFacade
{

    /**
     * @inheritdoc
     */
    protected static function getFacadeAccessor()
    {
        return 'elasticsearch';
    }
}
