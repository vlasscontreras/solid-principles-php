<?php

namespace Vlass\Solid\LiskovSubstitution\Stable;

use Vlass\Solid\LiskovSubstitution\Stable\Contracts\FormController as FormControllerContract;
use Vlass\Solid\LiskovSubstitution\Stable\Contracts\FormRequest;

class FormController implements FormControllerContract
{
    /** {@inheritdoc} */
    public function handleRequest(FormRequest $request)
    {
        $request->validate();

        var_dump($request->getValidatedData());
    }
}
