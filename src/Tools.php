<?php 

namespace NFePHP\NFSe\SimplISS;

/**
 * @category   NFePHP
 * @package    NFePHP\NFSe\SimplISS
 * @copyright  Copyright (c) 2008-2020
 * @license    http://www.gnu.org/licenses/lesser.html LGPL v3
 * @author     Marlon O. Barbosa <marlon.academi at gmail dot com>
 * @link      https://github.com/Focus599Dev/sped-nfse-simpliss for the canonical source repository
 */

use NNFePHP\NFSe\SimplISS\Common\Tools as ToolsBase;
use NFePHP\Common\Strings;
use NNFePHP\NFSe\SimplISS\Common\Signer;
use DOMDocument;
use NFePHP\Common\DOMImproved as Dom;


class Tools extends ToolsBase {

	public function DistDFe(){

		$servico = 'ConsultarNfseServicoTomado';

        $this->servico(
            $servico,
            $this->config->municipio,
            $this->tpAmb
        );

        $namespaces = array(
            'xmlns="http://www.abrasf.org.br/nfse.xsd"',
            'xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"',
            'xmlns:xsd="http://www.w3.org/2001/XMLSchema"'
        );

        $xml = '<ConsultarNfseServicoTomadoEnvio ';

            $xml .= implode(' ', $namespaces) . '>';

        $xml = '</ConsultarNfseServicoTomadoEnvio>';

        var_dump($xml);
	}

}                                                                                                                            

?>