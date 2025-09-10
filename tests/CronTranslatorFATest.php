<?php

namespace Lorisleiva\CronTranslator\Tests;

class CronTranslatorFATest extends TestCase
{
    /** @test */
    public function it_translates_expressions_with_every_and_once_in_persian(): void
    {
        // All 32 combinations of "every"/"once" updated to match current CronTranslator output
        $this->assertCronTranslateTo('هر دقیقه', '* * * * *', 'fa', true);
        $this->assertCronTranslateTo('هر دقیقه در یکشنبه‌ها', '* * * * 0', 'fa', true);
        $this->assertCronTranslateTo('هر دقیقه در ماه ژانویه', '* * * 1 *', 'fa', true);
        $this->assertCronTranslateTo('هر دقیقه در یکشنبه‌ها در ماه ژانویه', '* * * 1 0', 'fa', true);
        $this->assertCronTranslateTo('هر دقیقه در روز اول هر ماه', '* * 1 * *', 'fa', true);
        $this->assertCronTranslateTo('هر دقیقه در یکشنبه‌ها در روز اول هر ماه', '* * 1 * 0', 'fa', true);
        $this->assertCronTranslateTo('هر دقیقه در ژانویه روز اول', '* * 1 1 *', 'fa', true);
        $this->assertCronTranslateTo('هر دقیقه در یکشنبه‌ها در ژانویه روز اول', '* * 1 1 0', 'fa', true);
        $this->assertCronTranslateTo('هر دقیقه در ساعت 0:00', '* 0 * * *', 'fa', true);
        $this->assertCronTranslateTo('هر دقیقه در یکشنبه‌ها در ساعت 0:00', '* 0 * * 0', 'fa', true);
        $this->assertCronTranslateTo('هر دقیقه در ماه ژانویه در ساعت 0:00', '* 0 * 1 *', 'fa', true);
        $this->assertCronTranslateTo('هر دقیقه در یکشنبه‌ها در ماه ژانویه در ساعت 0:00', '* 0 * 1 0', 'fa', true);
        $this->assertCronTranslateTo('هر دقیقه در روز اول هر ماه در ساعت 0:00', '* 0 1 * *', 'fa', true);
        $this->assertCronTranslateTo('هر دقیقه در یکشنبه‌ها در روز اول هر ماه در ساعت 0:00', '* 0 1 * 0', 'fa', true);
        $this->assertCronTranslateTo('هر دقیقه در ژانویه روز اول در ساعت 0:00', '* 0 1 1 *', 'fa', true);
        $this->assertCronTranslateTo('هر دقیقه در یکشنبه‌ها در ژانویه روز اول در ساعت 0:00', '* 0 1 1 0', 'fa', true);
        $this->assertCronTranslateTo('یک بار در هر ساعت', '0 * * * *', 'fa', true);
        $this->assertCronTranslateTo('یک بار در هر ساعت در یکشنبه‌ها', '0 * * * 0', 'fa', true);
        $this->assertCronTranslateTo('یک بار در هر ساعت در ماه ژانویه', '0 * * 1 *', 'fa', true);
        $this->assertCronTranslateTo('یک بار در هر ساعت در یکشنبه‌ها در ماه ژانویه', '0 * * 1 0', 'fa', true);
        $this->assertCronTranslateTo('یک بار در هر ساعت در روز اول هر ماه', '0 * 1 * *', 'fa', true);
        $this->assertCronTranslateTo('یک بار در هر ساعت در یکشنبه‌ها در روز اول هر ماه', '0 * 1 * 0', 'fa', true);
        $this->assertCronTranslateTo('یک بار در هر ساعت در ژانویه روز اول', '0 * 1 1 *', 'fa', true);
        $this->assertCronTranslateTo('یک بار در هر ساعت در یکشنبه‌ها در ژانویه روز اول', '0 * 1 1 0', 'fa', true);
        $this->assertCronTranslateTo('هر روز در ساعت 0:00', '0 0 * * *', 'fa', true);
        $this->assertCronTranslateTo('هر یکشنبه در ساعت 0:00', '0 0 * * 0', 'fa', true);
        $this->assertCronTranslateTo('هر روز در ماه ژانویه در ساعت 0:00', '0 0 * 1 *', 'fa', true);
        $this->assertCronTranslateTo('هر یکشنبه در ماه ژانویه در ساعت 0:00', '0 0 * 1 0', 'fa', true);
        $this->assertCronTranslateTo('روز اول هر ماه در ساعت 0:00', '0 0 1 * *', 'fa', true);
        $this->assertCronTranslateTo('روز اول هر ماه در یکشنبه‌ها در ساعت 0:00', '0 0 1 * 0', 'fa', true);
        $this->assertCronTranslateTo('هر سال در ژانویه روز اول در ساعت 0:00', '0 0 1 1 *', 'fa', true);
        $this->assertCronTranslateTo('در یکشنبه‌ها در ژانویه روز اول در ساعت 0:00', '0 0 1 1 0', 'fa', true);
    }

    /** @test */
    public function it_translate_expressions_with_multiple_in_persian(): void
    {
        $this->assertCronTranslateTo('هر دقیقه 2 ساعت در روز', '* 8,18 * * *', 'fa', true);
        $this->assertCronTranslateTo('هر دقیقه 3 ساعت در روز', '* 8,18,20 * * *', 'fa', true);
        $this->assertCronTranslateTo('هر دقیقه 20 ساعت در روز', '* 1-20 * * *', 'fa', true);
        $this->assertCronTranslateTo('دو بار در ساعت', '0,30 * * * *', 'fa', true);
        $this->assertCronTranslateTo('دو بار در ساعت 5 ساعت در روز', '0,30 1-5 * * *', 'fa', true);
        $this->assertCronTranslateTo('5 بار در روز', '0 1-5 * * *', 'fa', true);
        $this->assertCronTranslateTo('هر دقیقه 5 ساعت در روز', '* 1-5 * * *', 'fa', true);
        $this->assertCronTranslateTo('5 روز در ماه در ساعت 1:00', '0 1 1-5 * *', 'fa', true);
        $this->assertCronTranslateTo('5 روز در ماه 2 ماه در سال در ساعت 1:00', '0 1 1-5 5,6 *', 'fa', true);
        $this->assertCronTranslateTo('2 ماه در سال در روز 5 در ساعت 1:00', '0 1 5 5,6 *', 'fa', true);
        $this->assertCronTranslateTo('روز 5 هر ماه 4 روز در هفته در ساعت 1:00', '0 1 5 * 1-4', 'fa', true);
    }

    /** @test */
    public function it_translate_expressions_with_increment_in_persian(): void
    {
        $this->assertCronTranslateTo('هر 2 دقیقه', '*/2 * * * *', 'fa', true);
        $this->assertCronTranslateTo('هر 2 دقیقه', '1/2 * * * *', 'fa', true);
        $this->assertCronTranslateTo('دو بار هر 4 دقیقه', '1,3/4 * * * *', 'fa', true);
        $this->assertCronTranslateTo('3 بار هر 5 دقیقه', '1-3/5 * * * *', 'fa', true);
        $this->assertCronTranslateTo('هر 2 دقیقه در ساعت 14:00', '*/2 14 * * *', 'fa', true);
        $this->assertCronTranslateTo('یک بار در هر ساعت هر 2 روز', '0 * */2 * *', 'fa', true);
        $this->assertCronTranslateTo('هر دقیقه هر 2 روز', '* * */2 * *', 'fa', true);
        $this->assertCronTranslateTo('یک بار هر 2 ساعت', '0 */2 * * *', 'fa', true);
        $this->assertCronTranslateTo('دو بار هر 5 ساعت', '0 1,2/5 * * *', 'fa', true);
        $this->assertCronTranslateTo('هر دقیقه 2 ساعت از هر 5 ساعت', '* 1,2/5 * * *', 'fa', true);
        $this->assertCronTranslateTo('هر روز هر 4 ماه در ساعت 0:00', '0 0 * */4 *', 'fa', true);
    }

    /** @test */
    public function it_handles_extended_cron_syntax_in_persian(): void
    {
        $this->assertCronTranslateTo('یک بار در زمان راه‌اندازی اجرا شود', '@reboot', 'fa', true);
        $this->assertCronTranslateTo('یک بار در هر ساعت', '@hourly', 'fa', true);
        $this->assertCronTranslateTo('هر روز در ساعت 0:00', '@daily', 'fa', true);
        $this->assertCronTranslateTo('هر یکشنبه در ساعت 0:00', '@weekly', 'fa', true);
        $this->assertCronTranslateTo('روز اول هر ماه در ساعت 0:00', '@monthly', 'fa', true);
        $this->assertCronTranslateTo('هر سال در ژانویه روز اول در ساعت 0:00', '@yearly', 'fa', true);
        $this->assertCronTranslateTo('هر سال در ژانویه روز اول در ساعت 0:00', '@annually', 'fa', true);
    }
}
