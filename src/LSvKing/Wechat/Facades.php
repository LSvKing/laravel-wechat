<?php

namespace LSvKing\Wechat\Facades;

use Illuminate\Support\Facades\Facade;

class Wechat extends Facade {
    protected static function getFacadeAccessor() { return 'wechat'; }
}
