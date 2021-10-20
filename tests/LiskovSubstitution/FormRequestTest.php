<?php

declare(strict_types=1);

namespace Vlass\Tests\LiskovSubstitution;

use Vlass\Solid\LiskovSubstitution\Stable\FormRequest;
use Vlass\Tests\TestCase;

class FormRequestTest extends TestCase
{
    /** @test */
    public function testItReturnsAllDataAsValidated(): void
    {
        $form = new FormRequest([
            'email' => 'test@test.com',
        ]);

        $form->validate();

        $this->assertEquals(['email' => 'test@test.com'], $form->getValidatedData());
    }
}
