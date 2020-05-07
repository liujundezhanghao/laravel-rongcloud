<?php
namespace Liujun\LaravelPinyin\Facades;

use Illuminate\Support\Facades\Facade;
use RongCloud\RongCloud as Accessor;

class Rongcloud extends Facade
{
    public static function getFacadeAccessor()
    {
        return Accessor::class;
    }
}
