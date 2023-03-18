# Polling App API

This is the API documentation for the Polling App.

## Authentication

### Login

* URL: `/api/login`
* Method: POST
* Parameters: 
  * `email` (string, required): user's email
  * `password` (string, required): user's password

### Register

* URL: `/api/register`
* Method: POST
* Parameters: 
  * `email` (string, required): user's email
  * `password` (string, required): user's password
  * `confirm_password` (string, required): confirm user's password

## Polls

### Create Poll

* URL: `/api/poll-store`
* Method: POST
* Parameters: 
  * `title` (string, required): poll title
  * `question` (string, required): poll question
  * `answers` (array, required): poll answers
    * `answer` (string, required): answer option
    * `votes` (int): votes count (optional)

### Update Poll

* URL: `/api/poll-update`
* Method: POST
* Parameters: 
  * `poll_id` (int, required): poll ID to update
  * `title` (string, required): poll title
  * `question` (string, required): poll question
  * `answers` (array, required): poll answers
    * `answer` (string, required): answer option
    * `votes` (int): votes count (optional)

### Get Poll

* URL: `/api/poll-update-get`
* Method: GET
* Parameters: 
  * `poll_id` (int, required): poll ID to get

### Destroy Poll

* URL: `/api/poll-destroy`
* Method: POST
* Parameters: 
  * `poll_id` (int, required): poll ID to destroy

### Get Random Poll

* URL: `/api/get-random-poll`
* Method: GET

## Answers

### Destroy Answer

* URL: `/api/poll-destroy-answer`
* Method: POST
* Parameters: 
  * `answer_id` (int, required): answer ID to destroy

## Errors

If an error occurs, the API will return a JSON response with the following format:

```json
{
  "error": {
    "code": 404,
    "message": "Resource not found"
  }
}
