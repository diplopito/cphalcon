<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Integration\Forms\Form;

use IntegrationTester;

/**
 * Class RemoveCest
 */
class RemoveCest
{
    /**
     * Tests Phalcon\Forms\Form :: remove()
     *
     * @param IntegrationTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function formsFormRemove(IntegrationTester $I)
    {
        $I->wantToTest('Forms\Form - remove()');
        $I->skipTest('Need implementation');
    }
}
