<?php

use App\Models\Topics;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Mink\Driver\GoutteDriver;


/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{

    private $driver;
    private $session;
    private $button;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {

        $this->button = [
            "options"=>"http://localhost/imie/cours/test/quizz_master/laravel/public/options",
            ];
        $this->driver = new GoutteDriver();
        $this->session = new \Behat\Mink\Session($this->driver);

        $this->session->start();
    }

    /**
     * @Given I am logged in as user
     */
    public function iAmLoggedInAsUser()
    {
        return true;
    }

    /**
     * @When I press   :arg1
     */
    public function iPress($button)
    {
        $url = $this->button[$button];
        $this->session->visit($url);
    }

    /**
     * @Then I should see :arg1
     */
    public function iShouldSee($status)
    {
        $status = 200;
        PHPUnit\Framework\Assert::assertEquals($this->session->getStatusCode(), $status);
    }



}
