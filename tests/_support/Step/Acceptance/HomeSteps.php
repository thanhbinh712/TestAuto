<?php
namespace Step\Acceptance;
use Page\Acceptance\HomePage;
class HomeSteps extends \AcceptanceTester
{
    /**
     * @throws \Exception
     */
    public function testClone()
    {
        $I = $this;
        $I -> waitForElementVisible(HomePage::$cloneValue, 30);

    }
}