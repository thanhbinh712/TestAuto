<?php
namespace Page\Acceptance;

class LoginGithubPage
{
    // include url of current page
    /**
     * @var string
     */
    public static $URLGithub = '/login';
    /**
     * @var string
     */
    public static $userName ='//input[@name="login"]';
    /**
     * @var string
     */
    public static $pass = '//input[@name="password"]';
    /**
     * @var
     */

    public static $signInButton = '//input[@name="commit"]';

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
//    public static function route($param)
//    {
//        return static::$URL.$param;
//    }
//
//    /**
//     * @var \AcceptanceTester;
//     */
//    protected $acceptanceTester;
//
//    public function __construct(\AcceptanceTester $I)
//    {
//        $this->acceptanceTester = $I;
//    }
//
}
