<?php

namespace Vlass\Solid\LiskovSubstitution;

use Vlass\Solid\LiskovSubstitution\Contracts\FormController as FormControllerContract;
use Vlass\Solid\LiskovSubstitution\Contracts\FormRequest;

class FormController implements FormControllerContract
{
    /** {@inheritdoc} */
    public function handleRequest(FormRequest $request)
    {
        $request->validate();

        var_dump($request->getValidatedData());
    }
}
