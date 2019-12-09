<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Phalcon\Test\Integration\Firewall\Adapter\Annotations;

use IntegrationTester;

class ConstructCest
{
    /**
     * Tests Phalcon\Firewall\Adapter\Annotations :: __construct()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2019-05-12
     */
    public function firewallAdapterAnnotationsConstruct(IntegrationTester $I)
    {
        $I->wantToTest('Firewall\Adapter\Annotations - __construct()');

        $I->skipTest('Need implementation');
    }
}
