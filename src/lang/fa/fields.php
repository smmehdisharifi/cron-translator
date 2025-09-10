<?php

return [
    'extended' => [
        '@reboot' => 'یک بار در زمان راه‌اندازی اجرا شود',
    ],
    'minutes' => [
        'every' => 'هر دقیقه',
        'increment' => 'هر :increment دقیقه',
        'times_per_increment' => ':times هر :increment دقیقه',
        'multiple' => ':times در ساعت',
    ],
    'hours' => [
        'every' => 'هر ساعت',
        'once_an_hour' => 'یک بار در هر ساعت',
        'increment' => 'هر :increment ساعت',
        'multiple_per_increment' => ':count ساعت از هر :increment ساعت',
        'times_per_increment' => ':times هر :increment ساعت',
        'increment_chained' => 'از هر :increment ساعت',
        'multiple_per_day' => ':count ساعت در روز',
        'times_per_day' => ':times در روز',
        'once_at_time' => 'در ساعت :time',
    ],
    'days_of_month' => [
        'every' => 'هر روز',
        'increment' => 'هر :increment روز',
        'multiple_per_increment' => ':count روز از هر :increment روز',
        'multiple_per_month' => ':count روز در ماه',
        'once_on_day' => 'در روز :day',
        'every_on_day' => 'در روز :day هر ماه',
    ],
    'months' => [
        'every' => 'هر ماه',
        'every_on_day' => 'روز :day هر ماه',
        'increment' => 'هر :increment ماه',
        'multiple_per_increment' => ':count ماه از هر :increment ماه',
        'multiple_per_year' => ':count ماه در سال',
        'once_on_month' => 'در ماه :month',
        'once_on_day' => 'در :month روز :day',
    ],
    'days_of_week' => [
        'every' => 'هر :weekday',
        'increment' => 'هر :increment روز هفته',
        'multiple_per_increment' => ':count روز هفته از هر :increment روز',
        'multiple_days_a_week' => ':count روز در هفته',
        'once_on_day' => 'در :day‌ها',
    ],
    'years' => [
        'every' => 'هر سال',
    ],
    'times' => [
        'am' => 'ق.ظ',
        'pm' => 'ب.ظ',
    ],
];

