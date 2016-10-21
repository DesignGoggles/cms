## High Level Goals
1. Easy to maintain
2. Minimal server resources
3. Speed
4. Security
5. Mobile friendly
6. Shallow learning curve
7. Ability to undo mistakes
8. Ability to demo entire pages before publishing

## TASKS
1. Routing layer
  * SLIM Framework? (Adds overhead and complexity, possibly use as inspiration.)

2. Database layer
  * SQLite? (Aligns with goal #2. Will need to research 3 and 4.)
  * MySQL? (May align with goal #2)

3. Templating layer
  * TWIG (More overhead and increases learning curve but increases security.)
  * SASS (This should be entirely optional.)
  * Bootstrap (Aligns with #5 but increases learning curve.)

4. Security
  * User login
    * Flood protection
    * Password policies


### Thoughts
* Put entire configuration in a single YAMLfile?
* User uploaded files should be outside the web directory for security.