Feature: Create a new course
  In order to have courses on the platform
  As a user with admin permissions
  I want to create a new course

  Scenario: A valid non existing course
    Given I send a PUT request to "/courses/e2dc5620-aa1c-4f01-88f3-5036a8a9796b" with body:
    """
    {
      "name": "The best course",
      "duration": "5 hours"
    }
    """
    Then the response status code be 201
    And the response should be empty
    
