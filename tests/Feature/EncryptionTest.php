<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Crypt;
use Tests\TestCase;

class EncryptionTest extends TestCase
{
    public function testEncryption()
    {
        $value = "Ican Tampan";

        $encrypted = Crypt::encryptString($value);
        $encrypted = Crypt::decryptString($encrypted);

        self::assertEquals($value, $encrypted );
    }

}
