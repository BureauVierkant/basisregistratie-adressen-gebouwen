<?php

namespace BureauVierkant\Basisregistratie\Exception;

class GetPandenByIdNotFoundException extends \RuntimeException implements ClientException
{
    function __construct()
    {
        parent::__construct('Not found', 404);
    }
}