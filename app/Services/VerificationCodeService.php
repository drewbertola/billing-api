<?php

namespace App\Services;

class VerificationCodeService {
    public static function generate()
    {
        return substr(str_shuffle(
            str_repeat("aAbBcCdDeEfFgGhHiIjJkKlLmMnNoOpPqQrRsStTuUvVwWxXyYzZ", 6)
        ), 0, 8);
    }
}
