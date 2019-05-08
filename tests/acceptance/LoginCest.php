<?php

use Page\LoginPage as LoginPage;
use Step\Acceptance\LoginSteps as LoginSteps;


class LoginCest
{
    /**
     * @var string
     */
    protected $email;
    /**
     * @var
     */

    protected $userName;
    /**
     * @var string
     */

    protected $pass;
    /**
     * LoginCest constructor.
     * _construct function to init email, username, pass
     */
    public function __construct()
    {
        $this->email = 'trinhthanhbinh.ttb@gmail.com';
        $this->userName = 'thanhbinh712';
        $this->pass = 'binhbinh111';
    }

    /**
     * @param LoginSteps $I
     * @throws Exception
     * TestCase LG_01 : Verify if a user will be able to login with a valid email and valid password
     */

    public function LG_01(LoginSteps $I)
    {
        $I->wantToTest('Verify if a user will be able to login with a valid email and valid password');
        $I->loginWithEmailAndPass($this->email, $this->pass);
        $I->checkLoginSuccess();
        $I->logout();
    }

    /**
     * @param LoginSteps $I
     * @throws Exception
     * TestCase LG_02 Verify if a user will be able to login with a valid username and valid password
     */

      public function LG_02(LoginSteps $I)
    {
        $I->wantToTest('Verify if a user will be able to login with a valid username and valid password');
        $I->loginWithEmailAndPass($this->userName, $this->pass);
        $I->checkLoginSuccess();
        $I->logout();
    }


    /**
     * @param LoginSteps $I
     * @throws Exception
     * TestCase LG_03 Verify if a user is able to login with a new password only after he/she has changed the password.
     */
/*
   public function LG_03(LoginSteps $I)
   {
       $I->wantToTest('Verify if a user is able to login with a new password only after he/she has changed the password.');
       $newPass = 'giangpk@189';
       $I->changePass($newPass, $this->pass);
       $this->pass = $newPass;
       $I->logout();
       $I->loginWithEmailAndPass($this->email, $this->pass);
       $I->checkLoginSuccess();
       $I->logout();
   }
*/
    /**
     * @param LoginSteps $I
     * @throws Exception
     * TestCase LG_04 Verify if a user cannot login with a empty email
     */
   public function LG_04(LoginSteps $I)
   {
       $I->wantToTest('Verify if a user cannot login with a empty email');
       $I->loginWrongValue($this->userName, $this->pass, 'userNameEmpty');
   }

    /**
     * @param LoginSteps $I
     * @throws Exception
     * TestCase LG_05 Verify if a user cannot login with a valid email and empty pass
     */
   public function LG_05(LoginSteps $I)
   {
       $I->wantToTest('Verify if a user cannot login with a valid email and empty pass');
       $I->loginWrongValue($this->userName, $this->pass, 'passEmpty');
   }

    /**
     * @param LoginSteps $I
     * @throws Exception
     * TestCase LG_06 Verify if a user cannot login with a null email
     */
   public function LG_06(LoginSteps $I)
   {
       $I->wantToTest('Verify if a user cannot login with a null email');
       $I->loginWrongValue($this->userName, $this->pass, 'userNameNull');
   }

    /**
     * @param LoginSteps $I
     * @throws Exception
     * TestCase LG_07 Verify if a user cannot login with a valid email and null pass
     */
   public function LG_07(LoginSteps $I)
   {
       $I->wantToTest('Verify if a user cannot login with a valid email and null pass');
       $I->loginWrongValue($this->userName, $this->pass, 'passNull');
   }

    /**
     * @param LoginSteps $I
     * @throws Exception
     * TestCase LG_10 Verify if a user will be able to click  "Create a new account " link
     */
   public function LG_10(LoginSteps $I)
   {
       $I->wantToTest('Verify if a user will be able to click  "Create a new account " link');
       $I->amOnPage(LoginPage::$URL);
       $I->click(LoginPage::$createNewAccountLink);
       $I->seeCurrentUrlEquals(LoginPage::$URLStartPage);
   }

    /**
     * @param LoginSteps $I
     * @throws Exception
     * TestCase LG_11 Verify if a user will be able to click  "Email me a login link" link
     */
   public function LG_11(LoginSteps $I)
   {
       $I->wantToTest('Verify if a user will be able to click  "Email me a login link" link');
       $I->amOnPage(LoginPage::$URL);
       $I->click(LoginPage::$emailMeLoginLink);
       $I->seeCurrentUrlEquals(LoginPage::$URLLoginLink);
   }


    /**
     * @param LoginSteps $I
     * @throws Exception
     * TestCase 12 Verify if a user will be able to click "Lost your password?" link
     */
   public function LG_12(LoginSteps $I)
   {
       $I->wantToTest('Verify if a user will be able to click "Lost your password?" link');
       $I->amOnPage(LoginPage::$URL);
       $I->click(LoginPage::$lostPassLink);
       $I->seeCurrentUrlEquals(LoginPage::$URLLostPass);
   }

    /**
     * @param LoginSteps $I
     * @throws Exception
     * TestCase 13 Verify if a user will be able to click "Back to WordPress.com" link
     */
   public function LG_13(LoginSteps $I)
   {
       $I->wantToTest('Verify if a user will be able to click "Back to WordPress.com" link');
       $I->amOnPage(LoginPage::$URL);
       $I->click(LoginPage::$backToWordPressLink);
       $I->seeCurrentUrlEquals(LoginPage::$URLHomePage);
   }


    /**
     * @param LoginSteps $I
     * @throws Exception
     * TestCase 14 Verify if a user will be able to click "Sign up" button
     */
   public function LG_14(LoginSteps $I)
   {
       $I->wantToTest('Verify if a user will be able to click "Sign up" button');
       $I->amOnPage(LoginPage::$URL);
       $I->click(LoginPage::$signUpLink);
       $I->seeCurrentUrlEquals(LoginPage::$URLStartPage);
   }

    /**
     * @param LoginSteps $I
     * TestCase 18 Verify if the "Enter" key of the keyboard is working correctly on the login page
     */
   public function LG_18(LoginSteps $I)
   {
       $I->wantToTest('Verify if the "Enter" key of the keyboard is working correctly on the login page');
       $I->loginUseEnterKeyWord($this->userName, $this->pass);
       $I->checkLoginSuccess();
       $I->logout();
   }


    /**
     * @param LoginSteps $I
     * @throws Exception
     * TestCase 19 Verify if the data in password field is either visible as bullet signs
     */
   public function LG_19(LoginSteps $I)
   {
       $I->wantToTest('Verify if the data in password field is either visible as bullet signs');
       $I->loginWithEmail($this->userName);
       $isPassWord = $I->grabAttributeFrom(LoginPage::$passwordField, 'type');
       $I->assertTrue($isPassWord == 'password');
   }

    /**
     * @param LoginSteps $I
     * @throws Exception
     * TestCase 20 Verify if the password will be able to show or hide when click on eye icon
     */
   public function LG_20(LoginSteps $I)
   {
       $I->wantToTest('Verify if the password will be able to show or hide when click on eye icon');
       $I->loginWithEmail($this->userName);
       $I->waitForElementVisible(LoginPage::$passwordField,30);
       $I->fillField(LoginPage::$passwordField,$this->pass);
       $isPassWord = $I->grabAttributeFrom(LoginPage::$passwordField, 'type');
       $I->assertTrue($isPassWord == 'password');
       $I->waitForElementClickable(LoginPage::$iconHideShowPass,30);
       $I->click(LoginPage::$iconHideShowPass);
       $isText = $I->grabAttributeFrom(LoginPage::$passwordField, 'type');
       $I->assertTrue($isText == 'text');
   }


    /**
     * @param LoginSteps $I
     * @throws Exception
     * TestCase 21 Verify that a user will be able to login after series of actions such as sign in,
     * close browser and reopen the application
     */
   public function LG_21(LoginSteps $I)
   {
       $I->wantToTest('Verify that a user will be able to login after series of actions such as sign in, close browser and reopen the application');
       $I->loginWithEmailAndPass($this->userName, $this->pass);
       $I->checkLoginSuccess();
       $I->closeTab();
       //Fail ở bước closeTab
       $I->amOnPage(LoginPage::$URL);
       $I->checkLoginSuccess();
       $I->logout();
   }

    /**
     * @param LoginSteps $I
     * @throws Exception
     * TestCase 22 Verify the timeout functionality of the login session
     */

    public function LG_22(LoginSteps $I)
   {
       $I->wantToTest('Verify the timeout functionality of the login session');
       $I->loginWithEmailAndPass($this->userName, $this->pass);
       $I->checkLoginSuccess();
       $I->wait(30*60);
       $I->reloadPage();
       $I->waitForText('Log in to your account.');
   }


    /**
     * @param LoginSteps $I
     * @throws Exception
     * TestCase 23 Verify that there is limit on the total number of unsuccessful login attempts
     */
   public function LG_23(LoginSteps $I)
   {
       $I->wantToTest('Verify that there is limit on the total number of unsuccessful login attempts');
       $I->loginWithEmailAndPass($this->userName, $this->pass);
       for($i = 1; $i <= 5;$i++)
       {
           $I->click(LoginPage::$loginButton);
       }
       $I->waitForText(LoginPage::$errorLimitLogin, 30);

   }

    /**
     * @param LoginSteps $I
     * TestCase 24 Verify if a user cannot login with a invalid email or username
     * TestCase 24 include 17 sub_case
     */
   public function LG_24_Case1(LoginSteps $I)
   {
        $I->wantToTest('Verify if a user cannot login with a invalid email or username');
        $I->loginWrongValue('chouchousqa@gmail.com', $this->pass, 'userNameInvalid');
   }

    public function LG_24_Case2(LoginSteps $I)
    {
        $I->wantToTest('Garbage');
        $I->loginWrongValue('#@%^%#$@#$@#.com', $this->pass, 'userNameInvalid');
    }

    public function LG_24_Case3(LoginSteps $I)
    {
        $I->wantToTest('Missing @ sign and domain');
        $I->loginWrongValue('plainaddress', $this->pass, 'userNameInvalid');
    }


    public function LG_24_Case4(LoginSteps $I)
    {
        $I->wantToTest('Missing username');
        $I->loginWrongValue('@kyna.vn', $this->pass, 'userNameInvalid');
    }


    public function LG_24_Case5(LoginSteps $I)
    {
        $I->wantToTest('Encoded html within email is invalid');
        $I->loginWrongValue('<giangpk33@gmail.com>', $this->pass, 'userNameInvalid');
    }


    public function LG_24_Case6(LoginSteps $I)
    {
        $I->wantToTest('Missing @');
        $I->loginWrongValue('giangphan.kyna.vn', $this->pass, 'userNameInvalid');
    }


    public function LG_24_Case7(LoginSteps $I)
    {
        $I->wantToTest('Two @ sign');
        $I->loginWrongValue('giang@kyna@kyna.vn', $this->pass, 'userNameInvalid');
    }


    public function LG_24_Case8(LoginSteps $I)
    {
        $I->wantToTest('Leading dot in address is not allowed');
        $I->loginWrongValue('.giang@kyna.vn', $this->pass, 'userNameInvalid');
    }


    public function LG_24_Case9(LoginSteps $I)
    {
        $I->wantToTest('Trailing dot in address is not allowed');
        $I->loginWrongValue('giang.@kyna.vn', $this->pass, 'userNameInvalid');
    }


    public function LG_24_Case10(LoginSteps $I)
    {
        $I->wantToTest('Multiple dots');
        $I->loginWrongValue('giang..phan@kyna.vn', $this->pass, 'userNameInvalid');
    }


    public function LG_24_Case11(LoginSteps $I)
    {
        $I->wantToTest(' Unicode char as address');
        $I->loginWrongValue('あいうえお@domain.com', $this->pass, 'userNameInvalid');
    }


    public function LG_24_Case12(LoginSteps $I)
    {
        $I->wantToTest(' Text followed email is not allowed');
        $I->loginWrongValue('giang@kyna.vn (Giang phan)', $this->pass, 'userNameInvalid');
    }

    public function LG_24_Case13(LoginSteps $I)
    {
        $I->wantToTest(' Missing top level domain (.com/.net/.org/etc)');
        $I->loginWrongValue('giang@kyna', $this->pass, 'userNameInvalid');
    }

    public function LG_24_Case14(LoginSteps $I)
    {
        $I->wantToTest(' Leading dash in front of domain is invalid');
        $I->loginWrongValue('giang@-kyna.vn', $this->pass, 'userNameInvalid');
    }


    public function LG_24_Case15(LoginSteps $I)
    {
        $I->wantToTest('.web is not a valid top level domain');
        $I->loginWrongValue('giang@kyna.web', $this->pass, 'userNameInvalid');
    }

    public function LG_24_Case16(LoginSteps $I)
    {
        $I->wantToTest(' Invalid IP format');
        $I->loginWrongValue('giang@111.222.333.44444', $this->pass, 'userNameInvalid');
    }

    public function LG_24_Case17(LoginSteps $I)
    {
        $I->wantToTest(' Multiple dot in the domain portion is invalid');
        $I->loginWrongValue('giang@kyna..com', $this->pass, 'userNameInvalid');
    }

    /**
     * @param LoginSteps $I
     * @throws Exception
     * TestCase 25 Verify is a user cannot login with a valid username or email and incorrect password
     * TestCase 25 include 2 sub_case, login with a valid username, login with a valid email
     */
    public function LG_25_Case1(LoginSteps $I)
    {
        $I->wantToTest('Verify is a user cannot login with a valid email and incorrect password');
        $I->loginWrongValue($this->email, '123456', 'passIncorrect');
    }

    public function LG_25_Case2(LoginSteps $I)
    {
        $I->wantToTest('Verify is a user cannot login with a valid username  and incorrect password');
        $I->loginWrongValue($this->userName, '123456', 'passIncorrect');
    }

    /**
     * @param LoginSteps $I
     * @throws Exception
     * TestCase 26 Verify if a user cannot login with a valid username or email and old password
     * TestCase 26 include 2 sub_case, login with a valid username, login with a old email
     */
    public function LG_26_Case1(LoginSteps $I)
    {
        $I->wantToTest('Verify if a user cannot login with a valid  email and old password');
        $I->loginWrongValue($this->email, 'giangpk@123456', 'passIncorrect');
    }

    public function LG_26_Case2(LoginSteps $I)
    {
        $I->wantToTest('Verify if a user cannot login with a valid username and old password');
        $I->loginWrongValue($this->userName, 'giangpk@123456', 'passIncorrect');
    }


    /**
     * @param LoginSteps $I
     * @throws Exception
     * TestCase 29 Verify login with email is link
     */
    public function LG_29(LoginSteps $I)
    {
        $I->wantToTest('Verify login with email is link');
        $I->loginWrongValue('https://facebook.com/', $this->pass, 'userNameInvalid');
    }

    public function LG_30(LoginSteps $I)
    {
        for($i = 1; $i < 10; $i++)
        {
            $I->click(LoginPage::$continueButton);
        }
        $I->waitForText(LoginPage::$errorUsernameEmpty, 30);
    }

}
