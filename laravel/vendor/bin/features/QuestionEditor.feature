Feature: Questions

  Scenario: User go to new question page
    Given I am logged in as User
    When I press "new question"
    Then  I should see "new question"

  Scenario: I create a new  question
    Given no question
    When I post the body of my question "cheval blanc"
    And I add an level difficulty
    And I add a soluce
    And I add a 3 wrong answers
    Then the question is create


  Scenario: I edit a question
    Given I choose the question
    When I can change the body of my question
    And I can change the level difficulty
    And I can change the soluce
    And I can change the wrong answers
    Then the question can be updated

  Scenario: I delete a question
    Given I choose the question
    When I clik on the button "delete"
    Then the question is delete in the Database