<?php

declare(strict_types=1);

namespace Vlass\Tests\LiskovSubstitution;

use Vlass\Solid\LiskovSubstitution\Stable\CreateUserRequest;
use Vlass\Solid\LiskovSubstitution\Stable\Exceptions\ValidationException;
use Vlass\Tests\TestCase;

class CreateUserRequestTest extends TestCase
{
    /** @test */
    public function testItPassesOnSuccessValidation(): void
    {
        $data = [
            'email'    => 'test@test.com',
            'password' => 'secret',
        ];

        $form = new CreateUserRequest($data);

        $form->validate();

        $this->assertEquals($form->getValidatedData(), $data);
    }

    /** @test */
    public function testItIgnoresUnrequiredFields(): void
    {
        $form = new CreateUserRequest([
            'email'    => 'test@test.com',
            'password' => 'secret',
            'is_admin' => true,
        ]);

        $form->validate();

        $this->assertEquals($form->getValidatedData(), [
            'email'    => 'test@test.com',
            'password' => 'secret',
        ]);
    }

    /** @test */
    public function testItThrowsAnExceptionOnFailedValidation(): void
    {
        $this->expectException(ValidationException::class);

        $form = new CreateUserRequest([
            'email' => 'test@test.com',
        ]);

        $form->validate();
    }
}
