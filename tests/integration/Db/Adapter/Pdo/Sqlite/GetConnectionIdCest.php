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

namespace Phalcon\Test\Integration\Db\Adapter\Pdo\Sqlite;

use IntegrationTester;

/**
 * Class GetConnectionIdCest
 */
class GetConnectionIdCest
{
    /**
     * Tests Phalcon\Db\Adapter\Pdo\Sqlite :: getConnectionId()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function dbAdapterPdoSqliteGetConnectionId(IntegrationTester $I)
    {
        $I->wantToTest('Db\Adapter\Pdo\Sqlite - getConnectionId()');
        $I->skipTest('Need implementation');
    }
}
