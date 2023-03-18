# site

www.you-domain.com/api/login - AUTH. Method POST, parameters: 'email', 'paasword'
www.you-domain.com/api/register - Register. Method POST, parameters: 'email', 'paasword', 'confirm_password'
www.you-domain.com/api/poll-destroy - Destroy poll Method POST, parameters: 'poll_id'
www.you-domain.com/api/poll-store - Store poll. Method POST, parameters: 'title', 'question', 'answers'(example array[0]['answer'], array[0]['votes'])
www.you-domain.com/api/poll-update - Update poll. Method POST, parameters: 'poll_id', 'title', 'question', 'answers'(example array[0]['answer'], array[0]['votes'])
www.you-domain.com/api/poll-update-get - Get poll by id. Method get, parameters: 'poll_id'
www.you-domain.com/api/poll-destroy-answer - Destroy answer. Method POST, parameters: 'answer_id'
www.you-domain.com/api/get-random-poll - Get random poll. Method GET
www.you-domain.com/api/login - AUTH. Method POST, parameters: 'email', 'paaswor'
