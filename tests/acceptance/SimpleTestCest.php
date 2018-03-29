<?php

class SimpleTestCest
{
    public function ChangeArticle(\WebGuy $I)
    {
        $I->amOnPage('/');
        $I->see('Hello world');
        $I->click('Hello universe');

        $I->see('Hello universe');
    }
}