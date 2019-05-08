<?php
namespace Page;

class LoginPage
{
    // include url of current page
    public static $URL = '/login';

    // include url of promo page/
    public static $URLPromo = '/?apppromo';

    // include url of sign up page
    public static $URLStartPage = '/start/user';

    // include url of login link page/
    public static $URLLoginLink = '/log-in/link';

    // include url of lost pass page/
    public static $URLLostPass = 'wp-login.php?action=lostpassword';

    // include url of home page
    public static $URLHomePage = '/';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $usernameField = '#usernameOrEmail';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $passwordField = '#password';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $continueButton = '//button[text()="Continue"]';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $loginButton = '//button[text()="Log In"]';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $continueWithGoogleButton = '//span[text()="Continue with Google"]';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $createNewAccountLink ='//a[text()="Create a new account"]';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $emailMeLoginLink ='//a[text()="Email me a login link"]';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $lostPassLink ='//a[text()="Lost your password?"]';


    /**
     * @var string
     * @since 1.0.0
     */
    public static $backToWordPressLink ='//a[text()="Back to WordPress.com"]';


    /**
     * @var string
     * @since 1.0.0
     */
    public static $signUpLink = '//span[text()="Sign Up"]';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $avatar = '//img[@alt="Me"]';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $logoutButton = '//button[text()="Log Out"]';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $securityLink = '//span[text()="Security"]';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $newPasswordField = '//input[@name="password"]';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $savePasswordButton = '//button[text()="Save Password"]';

    /**
     * @var string
     * since 1.0.0
     */
    public static $iconHideShowPass = '//div[@class="form-password-input"]/span';


    /**
     * @var string
     * since 1.0.0
     */
    public static $evidenceLoginSucess = 'My Site';

    public static $errorUsernameEmpty = 'Please enter a username or email address';
    public static $errorPassEmpty = 'Don\'t forget to enter your password';
    public static $errorUsernameInvalid = 'User does not exist';
    public static $errorPassIncorrect = 'Oops, that\'s not the right password. Please try again!';
    public static $errorLimitLogin = 'You have exceeded the login limit. Please wait a few minutes and try again.';
    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }


}
