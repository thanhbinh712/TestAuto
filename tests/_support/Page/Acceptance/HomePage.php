<?php
namespace Page\Acceptance;

class HomePage
{
    // include url of current page
    /**
     * @var string
     */
   // public static $URL = '';
    /**
     * @var string
     */
    public static $newButton = '//a[@class="btn btn-sm btn-primary text-white"]';
    /**
     * @var string
     */
    public static $nameRepository = '//input[@id="repository_name"]';
    /**
     * @var string
     */
    public static $description = '//input[@name="repository[description]"]';
    /**
     * @var string
     */
    public static $createButton = '(//button[@type="submit"])[3]';
    /**
     * @var string
     */
    public static $cloneValue = '//input[@id="empty-setup-clone-url"]';


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
    public static function route($param)
    {
        return static::$URL.$param;
    }

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

}
