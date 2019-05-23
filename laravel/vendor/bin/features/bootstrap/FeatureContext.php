<?php

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
    public function __construct()
    {
    }

    /**
     * @Given an empty topic
     */
    public function anEmptyTopic()
    {

        $this->topics = new Topics();
      

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
