<h1 align="center"> laravel-rongcloud </h1>

<p align="center"> laravel融云sdk([菜鸟教程](https://www.runoob.com)基于融云官方sdk(https://github.com/rongcloud/server-sdk-php-composer),要求laravel>=5.5)</p>


## Installing

```shell
$ composer require liujun/laravel-rongcloud -vvv
```

## Usage
在config目录下的services.php加上如下配置
```
    'rongcloud' => [ //融云IM配置
        'app_key' => 'xxxxx',
        'app_secret' => 'xxxxxx',
    ],
```
使用说明
```
<?php 

use use Liujun\LaravelRongcloud\Facades\Rongcloud;

$user = [
    'id'=> '1',
    'name'=> '小叮当',//用户名称
    'portrait'=> 'http://7xogjk.com1.z0.glb.clouddn.com/IuDkFprSQ1493563384017406982', //用户头像
];
$rongUser = Rongcloud::getUser()->register($user); //注册用户
dump($rongUser);
$rongUser = Rongcloud::getUser()->update($user); //更新用户
dump($rongUser);

```
## API文档
- 官方文档(https://www.rongcloud.cn/docs/server_sdk_api/)
- example(https://github.com/rongcloud/server-sdk-php-composer/tree/master/RongCloud/example)


## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/liujun/laravel-rongcloud/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/liujun/laravel-rongcloud/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT
