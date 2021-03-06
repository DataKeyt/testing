<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;


require_once __DIR__ . '/../../classes/TimeConverter/TimeConverter.php';

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext
{
    private $first_value;
    private $result;

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
     * @Given I have a value :arg1
     */
    public function iHaveAValue($arg1)
    {
        $this->first_value = $arg1;

    }

    /**
     * @When I use MinSec function
     */
    public function iMinSecFunction()
    {
        $tc = new TimeConverter();

        $this->result = $tc->MinSec($this->first_value);


    }

    /**
     * @When I use SecMin function
     */
    public function iUseSecMinFunction()
    {
        $tc = new TimeConverter();

        $this->result = $tc->SecMin($this->first_value);


    }

    /**
     * @Then I should get :arg1
     */
    public function iShouldGet($arg1)
    {
        if ($this->result != $arg1) {
            throw new Exception("Converting {$this->first_value} to other time unit did not equal " .
                "to {$arg1} but instead returned '{$this->result}'");
        }
    }
}
