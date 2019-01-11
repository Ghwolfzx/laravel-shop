<?php

return [
    'alipay' => [
        'app_id'         => '2016082000292208',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA1AjrCPHQR19gMFYaTdloyQp56xJ6mHKO7w9CYesx7t8VzSFYeoaESN6vL4YN5jX0RG8QlxtKzyU9BjyVBM2OvoeIXOuw8dYFIOajPAYGnfVuhfZ3jUSlBLwA0XDtJ6p+NMiYY6iSAxgJYfo/0yQKEmCSgsqyjMT6fpakSa/qDx4dOSrRhlThdsxV29Ni2gis+iQzzYdTqlZXhWJ+Z3u/zpvztbkP3T5UcS+xgbz54Tayy69CngjxyzuKozvbE9d8u2NZeU/sEIpIJUzyq4CwtGH2j9u5H++Ub28tjBcKEqyT9w4Bdrj/4jljYkMLGstfBlC8hnebMVptdtOOW45TuQIDAQAB',
        'private_key'    => 'MIIEogIBAAKCAQEAw0SdCRX73v/ZZdQlqWeAmfGnK6gdLFGQXBzHEwjttsg8SsrB+DaZIMgm3cJ2dnoKVaZFKL/Jz/2Vo64/zTrSeTnbVdQLz0WFNcqmNveIAXq/Yi43plthlKdwxES+V/evE/htOPCsCe3V1iJhGMMRQxdpr1z1fwDCIe1EuPlIOICpnjM4txKfS1XUOf+x3oOU9pKz64qL3SLIl8gOmAeJOLmX8DDM4V9i1xZVBC+DASuvR7a1Rav0h0c0Fsz4nvCNMxES8q0y6hjtjcgTM9WwmRlFTSykqxuCuC0UmG22e6zBCUFrqN7+E0hpmCvABeOL3Cw2nZ+tUY16/F+OkBlphwIDAQABAoIBAA5zW3O6rsMYCAyjII5i3H+IBKkUbeRDvP00G/9qn7zxIJUgYC5wS/DDHy02IPIvoegov+F+H/9GcvaEBLC5c64I/BRj9uPF70/FyXsz4lrJrLQlW3TyOkx3/75mn/d+mvRNZDfch77MXRDVxn3AodxnNSkHJhvaAIPmPTm7KP8VVSoCyeYMJPs/jnAnQPdxbOwRv5RVNcV5lOiOdQqFuOlGG0XEBVlRuvMhofvY3Ma28OvYsYSrTZnycEaWKzQ/DxdlJOUvJPfER0trzo6PTzfM5gjCmsR6EDIfsbtCB1qlswnJLwV0ou8QxRwdW0jKkTQuIwfGCWIsVqXv4MJO/hECgYEA+mrkzd/D0wf0pNLbmapIciaEHXha0zfxp5yqyzWN8AUka26RFpq8UfWeal9lZI+TICWsjC/bqHcNh+jWkAcwBdpUUJjaj/pqfP6LXnm8TAczzDUUUblv7w6xZaVd/bsymLbSQcDoW3hAn7Q0Tnt7sueXH5WSlU0tBmwknxnWnSsCgYEAx578tpgSJevxFu06NFqH+DC4kbH1BUAyzDQMZMw2fNthaswxBNpErMH6jLduIxxrFDYeJWyL4Buf2YTtITUjet2iPx0eov5lHsLNH2+TcKbK4P11Wnzeh7kc5FDsUw4eb7Zk/JWInSG/42QZrc/FYU77iBkzxp0lnHQEHABbDxUCgYBcofwfl/3Fa7T437MyRcZky5Cloibe6VvwJ8kaQKZPumc9gnoTRYwSOWyvZriIGYBQLP+GIBH+YIPV2bC9OJtwHtJ/uftntTd9I2AEw71+1k835A6vKIyafvHqauC5Am12BnMCtcx+QZ6ONUgAHDem93p0yYyexBy6unhVjmZQXwKBgGeiesCxInrdi0TD1Dvp5D1NzgSVxwb61WR+gRCzlHYtzt2LNMe4KX8nFdSIRn2j+1N65Ru4xsWKkepzwEhFNi5Lcjgh/g3Q1N6rc6KmYn1RmnJEI/DecwkzaXR/LrHP2q1UnAkl+M7a/qwnA83g2DA0uRFnRCIQ473d3WRMKvohAoGAUFNuquWDoYi8lrqwb47V6HoCN++JhgbA8JVONyJIv+r14St62D28HxYnAISE7OsvkjAlulkH0p/cHp705rjjSq3b4SnQKrxuJVUL9IOGxZkJneWrR58huqJgP4u793mRgd3oJ9GtH3Fk+uyHz/zcQV4fXp92vyhLbaUxM9JTVLI=',
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
