<?php

return [
    'alipay' => [
        'app_id'         => '2016092200572972',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAzbdZB2upJ3GB31snQqmyDg3o/ROyTEy033Hv9h5VLNpbJ3JavxKIjhH70GzQql9sm54jK806I775N5agX/J/FppIEu+r7VdFRedpr8VElblO5bMqn/njoZo4Fx9+qn1+HTcQsbH2g+PrzLbe2l/mFIUv1YUPCps0+IJTuwMUUe+UGOtwZHDxxLwAhQRvqxvXo5TYq3h1APSgLOGw0qLtAjap77fyEJrN5mT9HKssAwgNVoPAiJU9/dAsjSZ/rzOi6gE/pKgCM8YciHh/Q0OffJUlpB8W7eiF6S5wn9V8x+8fsJbnGw6HzjDCzlck86hnApEvQzRLDFo8PLEKH+VwtQIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEAvFo7zy5j8FYhB95ep32cMZSUMKCPLxokYxp4L/od51zn7QjB3NtemFl20ygeI34v0vplqQhZn+sgMzgFJm7EsC2HjfJBs/AAR2i4idK+QFx/BDWHOQN85hdhHuyEbtyqYtOiez+nNQZbYaBkM5UeFuhdkvM/7AMXJ2UJH+VVny+Cs/UIzKHBuUy8snpNtSnODBdiPnjXKIhnVutp9WMalR9nyMG9h6N1sftYWQaOt4/ghU5kH/jhp/V+UGXWvuN5X1EQxr1mIAqzMaaGJu5EL9I8g+5HzMECePSB7JjQGsAFCPzNO6LZD7gxHaQ8huzz9445GPZn1qa3XKjM2BDmIQIDAQABAoIBAAy+RiGkT9qo2R9BKkJGu1SXatdHZaiYKjISTmNglrlajc55szQQG3xPQTzUEAXyuaWaj1o6WGX7cHhGqAKLp/8LdYpjA5L6/+nU6fdZLMoJ+AX+4SE4XTDsEAQZmHQvtc9t5iZUjimGPpSCV4Ut55VBL2OL1Z1QMDbYHR/tUjesz3+yWT4gzZxjv8GVP06RyT1+7cO8SGVoUrYl7vqed46Ne09NpO2ujxmOkek3LJWq57ym2U7aJANyfDEQsSC3+Z2coFN35XA5vedQRe8Qy70SyBuP1AXTyRS8hY5jjiwMjefc0Ym+SM6Th9DpWi4+p+0rNdI4+fxce+MQeRBmEAECgYEA4YKYfbVmg2EnlgyQ+6tBoooGKG0DU2XezJtlSraDqDwNt2c/iby2bOMq4sOMBu+SpoR4ri4AhpR9iUMzHqDmSyINy2n6e2MrCQjmmkxvlv2iy3BQ9TuA638JCTcgbVWdOJvQE5X6U6Ddv3rDC6pIH462fBRlFh2paKzp/6lpc2ECgYEA1dGHccZmGTWKaTK6gNCvfAh3WGE32Gs1jICYpdpx2qzXYkblJdwLltS47xJ4scOhdhLuE9c2bevy1vCCnT8QypyDPuP3LFGIXGLSUx+BK6UMndwTltSyWpzB4oskwI4+vsbaqN8OzA1CsR62hNU0lOkQ1uqKYQDJGZiDyciDKsECgYBSuV6JFsdBQJ2N7JQuzhbosisqHztOF5uQgRy6OJO5XjZF5ikntMNS1E6CGuu+C5pHXWcLtjJZLBWVCcKx5KI2Q4q96OWK58j8qng1d/6ja+2RJWV9YFOdj99XsxJBKVvgTUAaPzUyAlv2BumP2OpWMTr971lZsI3ZqTy5nYLiYQKBgQCgLb+R9Fc4O2vdMyuUpMFR4eXGR85WSrpq70trtCHm9+TCsumnWxkzfVitgOD6CtxCYBwKsQcNgd0COFshAcXKg0WvL4hToyDMVRvLOabC03qIJ/5k2CJkz1pQJHz745QNx1q3d6LWKnjzx1ZkXHRvucnrtvjDgpskmaTg3V2mAQKBgQCCivBL6fZ/P+bSJWs+LAbFnjReWM6osFk/yWdPdB6lBrsjzbkzqEf+R4MsSDL3KymLdf5x8qdS9Us0sKAmJhEhFt5UC0B0zUyiTPWDlXN/HDIBr4m/LgfhXJCQK/Eem24III+QhuxFgstP83Ksus82jsTPgUab2ZFMrqXeuXlGmw==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
