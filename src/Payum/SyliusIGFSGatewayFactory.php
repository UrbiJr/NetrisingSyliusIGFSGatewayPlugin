<?php
declare(strict_types=1);

namespace Netrising\SyliusIGFSGatewayPlugin\Payum;

use Payum\Core\Bridge\Spl\ArrayObject;
use Payum\Core\GatewayFactory;
use Netrising\SyliusIGFSGatewayPlugin\Payum\Action\StatusAction;

final class SyliusIGFSGatewayFactory extends GatewayFactory
{
    protected function populateConfig(ArrayObject $config): void
    {
        $config->defaults([
            'payum.factory_name' => 'pag_online_imprese',
            'payum.factory_title' => 'UniCredit Bulbank PagOnline',
            'payum.action.status' => new StatusAction()
        ]);
        $config['payum.api'] = function (ArrayObject $config) {
            return new PagOnlineImpreseApi(
				$config['tId'],
				$config['kSing'],
                (bool) $config['testMode'],
	            $config['timeOut'],
	            $config['serverUrl'],
				$config['trType'],
            );
        };

    }
}
