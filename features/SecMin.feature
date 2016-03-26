Feature: SecMin
  In order to convert seconds to minutes
  As a time converter user
  I need to be able to separate 60 from first value

  Scenario:
    Given I have a value "60"
    When I use SecMin function
    Then I should get "1"

  Scenario:
    Given I have a value "540"
    When I use SecMin function
    Then I should get "9"
