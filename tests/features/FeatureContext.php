<?php

use Coderscoop\Chat\Chat;
use Behat\Behat\Context\Context;
use Coderscoop\LaravelReCaptcha\ReCaptcha;
use PHPUnit_Framework_TestCase as PHPUnit;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Behat\Tester\Exception\PendingException;


/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext
{
    /**
     * Chat class
     * 
     * @var obj 
     */
    protected $chat;
    
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->chat = new Chat();
    }
    
    /**
     * @Given I have an instance of Chat class
     */
    public function iHaveAnInstanceOfChatClass()
    {
        PHPUnit::assertInstanceOf(Chat::class, $this->chat);
    }

    /**
     * @Then I can access the dummy function
     */
    public function iCanAccessTheDummyFunction()
    {
        PHPUnit::assertEquals("Hello world in a dummy way!", $this->chat->dummy());
    }

}
