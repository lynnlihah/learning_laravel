<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
	// 并不是所有请求都需要避免CSRF攻击，比如去第三方API获取数据的请求。
	// 可以通过在VerifyCsrfToken（app/Http/Middleware/VerifyCsrfToken.php）
	// 中间件中将要排除的请求URL添加到$except属性数组中：

    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'testCsrf'
        //  http://localhost:8000/testCsrf
    ];
}
