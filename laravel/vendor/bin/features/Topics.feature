Feature: Topics

  Scenario: Topics with one topic
    Given an empty topic
    When I add a new topic
    Then the title topic is not null

