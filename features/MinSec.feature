Feature: MinSec
  In order to convert minutes to seconds
  As a time converter user
  I need to be able to multiply 60 with first value

  Scenario:
    Given I have a value "1"
    When I use MinSec function
    Then I should get "60"

  Scenario:
    Given I have a value "9"
    When I use MinSec function
    Then I should get "540"
