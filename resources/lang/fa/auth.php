<?php

declare(strict_types=1);

return [
    'accept_term' => 'من شرایط و مقررات را خوانده و پذیرفته ام',
    'active' => [
        'attribute' => 'فعال سازی',
        'error' => [
            'activated' => 'حساب کاربری قبلا فعال شده است، نیازی به فعال سازی مجدد نیست',
            'disable' => 'فعال سازی حساب کاربری غیرفعال است، می توانید بدون فعال سازی وارد شوید!',
            'throttle' => 'محدودیت درخواست فعال سازی به اتمام رسیده است، لطفا عملیات را به صورت پیوسته انجام ندهید! در صورت بروز مشکل با :email تماس بگیرید.',
        ],
        'promotion' => 'حساب کاربری هنوز فعال نشده است، لطفا ابتدا ":action" را انجام دهید!',
        'sent' => 'ایمیل فعال سازی ارسال شده است، لطفا ایمیل خود را از جمله پوشه هرزنامه بررسی کنید.',
    ],
    'aup' => 'شرایط و مقررات قابل قبول استفاده',
    'captcha' => [
        'attribute' => 'کپچا',
        'error' => [
            'failed' => 'تایید کپچا ناموفق بود، لطفا مجددا تلاش کنید',
            'timeout' => 'کپچا منقضی شده است، لطفا صفحه را بارگذاری مجدد کرده و دوباره امتحان کنید.',
        ],
        'required' => 'لطفا کپچا را کامل کنید!',
        'sent' => 'کپچا به ایمیل شما ارسال شده است، لطفا ایمیل خود را از جمله پوشه هرزنامه بررسی کنید.',
    ],
    'email' => [
        'error' => [
            'banned' => 'ارائه دهنده ایمیل شما مسدود شده است، لطفا از ایمیل دیگری استفاده کنید.',
            'invalid' => 'ایمیل شما پشتیبانی نمی شود.',
        ],
    ],
    'error' => [
        'account_baned' => 'حساب کاربری شما مسدود شده است!',
        'login_error' => 'خطای ورود، لطفا بعدا دوباره امتحان کنید!',
        'login_failed' => 'ورود ناموفق بود، لطفا ایمیل و رمز عبور را بررسی کنید!',
        'not_found_user' => 'حساب کاربری یافت نشد، لطفا روش های ورود دیگر را امتحان کنید.',
        'repeat_request' => 'لطفا صفحه را بارگذاری مجدد کرده و دوباره امتحان کنید.',
        'url_timeout' => 'لینک منقضی شده است، لطفا دوباره درخواست دهید.',
    ],
    'failed' => 'مشخصات وارد شده با اطلاعات ما سازگار نیست.',
    'invite' => [
        'attribute' => 'کد دعوت',
        'error' => [
            'unavailable' => 'کد دعوت نامعتبر است، لطفا دوباره امتحان کنید.',
        ],
        'get' => 'دریافت کد دعوت',
        'not_required' => 'نیازی به کد دعوت نیست، می توانید به صورت مستقیم ثبت نام کنید!',
    ],
    'login' => 'ورود',
    'logout' => 'خروج',
    'maintenance' => 'تعمیر و نگهداری',
    'maintenance_tip' => 'در حال تعمیر و نگهداری',
    'oauth' => [
        'bind_failed' => 'اتصال ناموفق بود',
        'bind_success' => 'اتصال موفقیت آمیز بود',
        'login_failed' => 'ورود از طریق شخص ثالث ناموفق بود!',
        'rebind_success' => 'اتصال مجدد موفقیت آمیز بود',
        'register' => 'ثبت نام سریع',
        'register_failed' => 'ثبت نام ناموفق بود',
        'registered' => 'قبلا ثبت نام کرده اید، لطفا مستقیما وارد شوید.',
        'unbind_failed' => 'لغو اتصال ناموفق بود',
        'unbind_success' => 'لغو اتصال موفقیت آمیز بود',
    ],
    'one-click_login' => 'ورود یک کلیکه',
    'optional' => 'اختیاری',
    'password' => [
        'forget' => 'رمزعبور را فراموش کرده اید؟',
        'new' => 'رمزعبور جدید را وارد کنید',
        'original' => 'رمزعبور فعلی',
        'reset' => [
            'attribute' => 'بازنشانی رمزعبور',
            'error' => [
                'demo' => 'تغییر رمزعبور ادمین در نسخه نمایشی ممکن نیست.',
                'disabled' => 'بازنشانی رمزعبور غیرفعال است، لطفا برای کمک با :email تماس بگیرید.',
                'failed' => 'بازنشانی رمزعبور ناموفق بود.',
                'same' => 'رمزعبور جدید نمی تواند مشابه رمزعبور قدیم باشد، لطفا دوباره وارد کنید.',
                'throttle' => 'شما تنها می توانید رمزعبور را :time بار در 24 ساعت بازنشانی کنید، لطفا عملیات را به صورت پیوسته انجام ندهید.',
                'wrong' => 'رمزعبور نادرست است، لطفا دوباره امتحان کنید.',
            ],
            'sent' => 'لینک بازنشانی به ایمیل شما ارسال شده است، لطفا ایمیل خود را از جمله پوشه هرزنامه بررسی کنید.',
            'success' => 'رمزعبور جدید با موفقیت بازنشانی شد، اکنون می توانید وارد شوید.',
        ],
    ],
    'register' => [
        'attribute' => 'ثبت نام',
        'code' => 'کد ثبت نام',
        'error' => [
            'disable' => 'متاسفانه ثبت نام کاربران جدید موقتا متوقف شده است.',
            'throttle' => 'مکانیزم ضد هرزنامه فعال شده است، لطفا به صورت پیوسته ثبت نام نکنید!',
        ],
        'failed' => 'ثبت نام ناموفق بود، لطفا بعدا دوباره امتحان کنید.',
        'promotion' => 'هنوز حساب کاربری ندارید؟ لطفا به ',
        'success' => 'ثبت نام موفقیت آمیز بود',
    ],
    'remember_me' => 'مرا به خاطر بسپار',
    'request' => 'درخواست',
    'throttle' => 'دفعات تلاش شما برای ورود بیش از حد مجاز است. لطفا پس از :seconds ثانیه مجددا تلاش فرمایید.',
    'tos' => 'شرایط استفاده کاربر',
];
