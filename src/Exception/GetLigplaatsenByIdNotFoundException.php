<?php

namespace BureauVierkant\Basisregistratie\Exception;

/**
 * Class GetLigplaatsenByIdNotFoundException
 *
 * @package BureauVierkant\Basisregistratie\Exception
 */
class GetLigplaatsenByIdNotFoundException extends \RuntimeException implements ClientException
{
    function __construct()
    {
        parent::__construct('Not found', 404);
    }
}