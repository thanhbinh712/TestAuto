<?php
namespace Step\Acceptance;
use Page\Acceptance\LoginGithubPage;
use Page\Acceptance\HomePage;

class LoginGithubSteps extends \AcceptanceTester
{
    /**
     * @param $user
     * @param $pass
     * @throws \Exception
     */
    public function login($user, $pass)
    {
        $I = $this;
        $I -> amOnPage(LoginGithubPage::$URLGithub);
        //$I -> waitForElementVisible(LoginGithubPage::$userName, 30);
        $I -> fillField(LoginGithubPage::$userName, $user);
        $I -> fillField(LoginGithubPage::$pass, $pass);
        $I -> click(LoginGithubPage::$signInButton);

    }

    /**
     * @param $name
     * @param $description
     * @throws \Exception
     */
    public function createRepository($name, $description)
    {
        $I = $this;
        $I -> click(HomePage::$newButton);
        $I -> waitForElementVisible(HomePage::$nameRepository, 30);
        $I -> fillField(HomePage::$nameRepository, $name);
        $I -> fillField(HomePage::$description, $description);
        $I -> click(HomePage::$createButton);
    }

}