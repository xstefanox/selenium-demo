<?php

namespace SeleniumDemo\Test;

class FormTest extends \PHPUnit_Extensions_Selenium2TestCase
{
    protected function setUp()
    {
        $this->setBrowser('firefox');
        $this->setBrowserUrl('http://localhost:9090');
        $this->prepareSession();
    }

    public function testEmptyFormFields()
    {
        $this->url('/src/index.php');
        sleep(1);

        $this->byId('submit')->submit();

        $this->assertNotEmpty('Leeroy', $this->byId('error-first-name')->text());
        $this->assertNotEmpty('Jenkins', $this->byId('error-last-name')->text());
        sleep(1);
    }

    public function testInvalidFormFields()
    {
        $this->url('/src/index.php');
        sleep(1);

        $this->byId('first-name')->value('@#^?!');
        sleep(1);

        $this->byId('last-name')->value('@#[]');
        sleep(1);

        $this->byId('submit')->submit();

        $this->assertNotEmpty($this->byId('error-first-name')->text());
        $this->assertNotEmpty($this->byId('error-last-name')->text());
        sleep(1);
    }

    public function testSuccessfulForm()
    {
        $this->url('/src/index.php');
        sleep(1);

        $this->byId('first-name')->value('Leeroy');
        sleep(1);

        $this->byId('last-name')->value('Jenkins');
        sleep(1);

        $this->byId('submit')->submit();
        sleep(1);

        $this->assertEquals('Leeroy', $this->byId('first-name')->text());
        $this->assertEquals('Jenkins', $this->byId('last-name')->text());

        $this->assertEquals('Leeroy', $this->byCssSelector('#first-name')->text());
        $this->assertEquals('Jenkins', $this->byCssSelector('#last-name')->text());

        $this->assertEquals('Leeroy', $this->byXPath('//*[@id="first-name"]')->text());
        $this->assertEquals('Jenkins', $this->byXPath('//*[@id="last-name"]')->text());

        sleep(1);
    }
}
