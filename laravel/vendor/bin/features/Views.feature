Feature: As User I can navigate in the application

  Scenario: User go to new game page
    Given I am logged in as user
    When I press "options"
    Then  I should see "options"

  Scenario: User go to new game page
    Given I am logged in as User
    When I press "new game"
    Then  I should see "new game"

  Scenario: User go to new game page
    Given I am logged in as User
    When I press "one player"
    Then  I should see "one player"

  Scenario: User go to new game page
    Given I am logged in as User
    When I press "questions editor"
    Then  I should see "questions editor"

  Scenario: User go to new game page
    Given I am logged in as User
    When I press "new question"
    Then  I should see "new question"

  Scenario: User go to new game page
    Given I am logged in as User
    When I press "start"
    Then  I should see "quizz"

  Scenario: User go to new game page
    Given I am logged in as User
    When I press "new game"
    Then  I should see "result"

