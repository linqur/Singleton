<?php

namespace Linqur\Singleton;

trait SingletonTrait
{
    protected static $instance;

    /**
	 * Защита от создадания класса через new 
	 */
	protected function  __construct()
    {}

    /**
	 * Защита от клонирования класса
	 */
	protected function  __clone()
    {}

    /** @return static */
    final public static function getInstance()
    {
        if (empty(static::$instance)) {
            static::$instance = new static();
        }
        return static::$instance;
    }
}