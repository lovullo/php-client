<?php
namespace SplitIO;

class Sdk
{
    const VERSION = '0.0.1';

    const NAME = 'Split-SDK-PHP';

    /** @var array Arguments for creating clients */
    private $args;

    public static function factory(array $args = [])
    {
        echo "Split SDK";
    }
}