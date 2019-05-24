<?php

use Illuminate\Foundation\Testing\Concerns\MakesHttpRequests;
use App\Models\Question;
use App\Models\Topics;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */




class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */

    private $url;

    
    public function __construct()
    {
        $this->url='/questions/new';
    }

 

    /**
     * @Given I am logged in as User
     */
    public function iAmLoggedInAsUser()
    {
        return true;
    }

    /**
     * @When I press :arg1
     */
    public function iPress($url)
    {
        //$this->getSession()->visit($this->localPath('/questions/new'));
        $this->get('/questions/new');

    }

    /**
     * @Then I should see :arg1
     */
    public function iShouldSee($status)
    {
        $this->iPress('/questions/new')->assertStatus(200);

//        $response->assertStatus(200);
    }

    /**
     * @Given no question
     */
    public function noQuestion()
    {
        $this->question = new Question();
    }

    /**
     * @When I post the body of my question :arg1
     */
    public function iPostTheBodyOfMyQuestion($body)
    {
        PHPUnit\Framework\Assert::assertsame($body, $this->question->getBody());
    }

    /**
     * @When I add an level difficulty
     */
    public function iAddAnLevelDifficulty()
    {
        throw new PendingException();
    }

    /**
     * @When I add a soluce
     */
    public function iAddASoluce()
    {
        throw new PendingException();
    }

    /**
     * @When I add a :arg1 wrong answers
     */
    public function iAddAWrongAnswers($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the question is create
     */
    public function theQuestionIsCreate()
    {
        throw new PendingException();
    }

    /**
     * @Given I choose the question
     */
    public function iChooseTheQuestion()
    {
        throw new PendingException();
    }

    /**
     * @When I can change the body of my question
     */
    public function iCanChangeTheBodyOfMyQuestion()
    {
        throw new PendingException();
    }

    /**
     * @When I can change the level difficulty
     */
    public function iCanChangeTheLevelDifficulty()
    {
        throw new PendingException();
    }

    /**
     * @When I can change the soluce
     */
    public function iCanChangeTheSoluce()
    {
        throw new PendingException();
    }

    /**
     * @When I can change the wrong answers
     */
    public function iCanChangeTheWrongAnswers()
    {
        throw new PendingException();
    }

    /**
     * @Then the question can be updated
     */
    public function theQuestionCanBeUpdated()
    {
        throw new PendingException();
    }

    /**
     * @When I clik on the button :arg1
     */
    public function iClikOnTheButton($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the question is delete in the Database
     */
    public function theQuestionIsDeleteInTheDatabase()
    {
        throw new PendingException();
    }

    /**
     * @Given an empty topic
     */
    public function anEmptyTopic()
    {
        throw new PendingException();
    }

    /**
     * @When I add a new topic
     */
    public function iAddANewTopic()
    {
        throw new PendingException();
    }

    /**
     * @Then the title topic is not null
     */
    public function theTitleTopicIsNotNull()
    {
        throw new PendingException();
    }

}
