<?php

namespace MCBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MCBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
