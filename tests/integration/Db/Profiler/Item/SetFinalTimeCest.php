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

namespace Phalcon\Test\Integration\Db\Profiler\Item;

use IntegrationTester;

class SetFinalTimeCest
{
    /**
     * Tests Phalcon\Db\Profiler\Item :: setFinalTime()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function dbProfilerItemSetFinalTime(IntegrationTester $I)
    {
        $I->wantToTest('Db\Profiler\Item - setFinalTime()');
        $I->skipTest('Need implementation');
    }
}
