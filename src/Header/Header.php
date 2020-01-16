<?php

namespace NFePHP\NFSe\SimplISS\Factories;

/**
 * @category   NFePHP
 * @package    NFePHP\NFSe\SimplISS\Factories\
 * @copyright  Copyright (c) 2008-2020
 * @license    http://www.gnu.org/licenses/lesser.html LGPL v3
 * @author     Marlon O. Barbosa <marlon.academi at gmail dot com>
 * @link       https://github.com/Focus599Dev/sped-nfse-simpliss for the canonical source repository
 */


class Header
{
    /**
     * Return header
     * @param string $namespace
     * @param int $cUF
     * @param string $version
     * @return string
     */
    public static function get($version)
    {
        return "<cabecalho "
            . "versao=\"$version\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\" xmlns=\"http://www.abrasf.org.br/nfse.xsd\">"
            . "<versaoDados>$version</versaoDados>"
            . "</cabecalho>";
    }
}
