<?php 
use Step\Acceptance\LoginGithubSteps as LoginStep;
use Step\Acceptance\HomeSteps;
class LoginGithubCest
{
    /**
     * @var
     */
    protected $user;
    /**
     * @var
     */
    protected $pass;
    /**
     * @var
     */
    protected $name;
    /**
     * @var string
     */
    protected $description = '';

    /**
     * LoginGithubCest constructor.
     */
    public function __construct()
    {
        $this -> user = 'thanhbinh712';
        $this -> pass = 'Binhbinh111';
        $this -> name = 'TestGit';
        $this -> description = 'New git';
    }

    /**
     * @param LoginStep $I
     * @throws Exception
     */
    public function doLogin(LoginStep $I)
    {
        $I -> wantToTest('I want to do Login success');
        $I -> login($this->user, $this->pass);
    }

    /**
     * @param LoginStep $I
     * @throws Exception
     */
    public function createRepo(LoginStep $I)
    {
        $I -> createRepository($this->name, $this->description);
    }
    public function checkClone(HomeSteps $I)
    {
        $I -> testClone();
    }

    //public function _before(AcceptanceTester $I)
   // {
    //}

    // tests
   // public function tryToTest(AcceptanceTester $I)
    //{
    //}
}
