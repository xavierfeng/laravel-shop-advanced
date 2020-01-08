<?php

return [
    'alipay' => [
        'app_id'         => '2016101900724797',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAghupEOn6bs1phMhKPPsQ685XHur516kE4JRscRe5Ur26+hDpS0KZkK0nEjA/RXP7xxxKrA0QhaYjydrO15EDOjcsI/TZov/VQoevtXTKVir86etjEwaBMzKK2UQ3z/gf+e+9M/JctGtauG7vWptn+lc0wXAyAI6qHYzr7gcHuUmA4hpdTUoTp+keh6NiQ+WNhZJR+85Y1jkJrv5eR5rim3nn5R0sO9bHJK9VvqqhVf6itubEUHyxZwKOIpmODBx1byzrD2rWzm9z2jfh2LBbOaBrgtkS7D4RPVWXOzKKT5goG3keYdBhKwNGjzDmtVZfH6kPVyTXlWU03fjwqzXyWQIDAQAB',
        'private_key'    => 'MIIEogIBAAKCAQEAloF0/vCSBoiyF/6GXaJYJlP90jsV8ydInPSeNvodlgdu0YfkTnl4NIGE8URyuXnSEJGhpRq4RrabI7xVR2EQnRJUl7WnKYbN4BxBYa9p0Nr2CI4uap2Tzciawub8I7ro+G7SYuXTSQN/Lvk2FPFsun7JYUrop/t/TL2TMN4Kv4D2nMETn0czb2CJLUrLPla9C24Xg5NdlmUSxgvVeTLRNP+nKy038m2A6DhFSYP5NYd4RSGHns0lprmhIvWY9Hide5kzNgOKLOvKgu6rHiPnPmJh3W64skT/xnFBpkgR3zbgKBuR0cMbgXv0eMu4RWrTB2ehiDqU35vNPdbuFBzclwIDAQABAoIBAE35sEXNGbqs46guxCqKy6S/60caOZsKhUJcMgRFvUJXg4CnKQ/HOxHo8JmXXuDdToorCVZi64onXWU8U+pxTYwzTQR0prCLGOq9eNpFaUs9xi5Ui5PNJCB/iD7mMUfJtJ3RvMpkS/0OBLyvfOeI1U4iFe+EQdmWITP/G907jNH+EUeCsTViQ0dfHbT8f/Yj9hTvmaowTdTCZhly1oojh0cuG3AGy7nASH0Kfi98rE67cC1uIVeoI3AHQqJ56oQXkHcG0OLWoM+ukikrgM8lg8HE6dgbOj5oScDIsDQUMmIit9EDCLLVbRzmn8YRpcLVIdrW0azEuDFexYBa7cNHeGECgYEAyqfQDjKMOxH5RvCTZ0L9gjTlvL5bLDSCly0aakMNCGSUFLjkRbsmQISUSkzBuCLh8kMBYpkwhHiwIdOhuSJmjfOIfCkSadrBzomJbeRp/DHc+avl3v+COki6xn5zBs5xjwnnhq95OttNpe7mTzrPLC39Mb1pmKLGqo3dGGkH2WkCgYEAvh93EfCeA1hk4hddEu0ZabKOViSFO4XNOs2bkqbCPFxj5F7vwSEBmUlOCOAd7B733UAJ3eUTJOFqD0Xxt1Uy6gKLT07fNvuRlGl7XEyDNDQhEqBUIXpn32d3tsILXsSNU/wtm1pG3LIn4MG1bfQiG6c2QjnXeine5neybwHiRf8CgYBmesgOdedN87/f7MZNoKW7024drRFD4GXtduR1ueR8SwhLFlhxHruwQpsOm5QWvqUNsm6f4qGTS8idwnx0t32u6OkrCEYEe5goDosNpEUoQDrjktbSltjPCnpQ6B7Y4Uqxr6uCA3hFmCLC93VFuZKMX9E69vLQOfhGxSh6MJrEiQKBgFEk1sn2W0psOKpydEv2m+kLx0omziJoaf5V8Lc3qyDeAdhfWI6iCq+kpMSO+tZjJUDt6wgkk/YiqwSXwqGPoGpV6aVQsV4jIrAoEPmEwl7OfOsZOK8NMjYcT/DVgsrQss0MjV6HukTJWNHJeyjRkJki1bqQO1Iteq/8mFBeind7AoGAMpUKF5W8m5SM+Pvv/B8MtgRVH5hl8x/9sqgkdI1Ni1F4eJSS5eScgmM7x9OGT5Aa2FW9/cYlVpdKpxk/pwvyAMRT8fnIQrpukuOlzjZnmaGmfyoP2v6BcHy1UI6kMHuWdwfrfAvqXgYdJowLKnG5j6CotVSQVpSyTe22GW9CjB4=',
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
