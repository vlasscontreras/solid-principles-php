<?php

namespace Vlass\Solid\LiskovSubstitution\Contracts;

use Throwable;

interface FormController
{
    /**
     * Handle the incoming form request.
     *
     * @param FormRequest $request
     * @throws Throwable
     */
    public function handleRequest(FormRequest $request);
}
