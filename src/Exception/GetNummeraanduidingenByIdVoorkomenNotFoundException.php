<?php

namespace BureauVierkant\Basisregistratie\Exception;

class GetNummeraanduidingenByIdVoorkomenNotFoundException extends \RuntimeException implements ClientException
{
    function __construct()
    {
        parent::__construct('Not found', 404);
    }
}