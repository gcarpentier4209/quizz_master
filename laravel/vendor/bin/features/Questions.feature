Feature: Questions

  Scenario: I create a question
    Given the page new question
    When I post the body of my question
    And I
    And I add 4 new answer
    Then the title topic is not null

