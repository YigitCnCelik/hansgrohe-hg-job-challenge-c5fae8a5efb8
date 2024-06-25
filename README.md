# Readme #

This repository contains a set of applications & services which together form a small application.
What kind of application? Find out on your own by reading through the code or by running it
on your computer.

### What is in this repository? ###

* this repository contains 3 projects using different frameworks and programming languages
  * conversation (Quarkus, Kotlin)
  * persona (Symfony, PHP)
  * prompt (FastAPI, Python)
* each project can run standalone, but for the best application experience all services need to run simultaneously

### How do I get set up? ###

* we have setup the projects using the standard tools or 'Get Started' documentations of the frameworks
  (Quarkus, Symfony, FastAPI), the project have been kept small and were only built for local use (no tests etc)
* check the 'Get started' guides of the frameworks to get initial instructions on the project structures
* some additional (default) markdown files are also present within the project folders
* the projects were configured to run locally on the ports 8080, 9091, 9092
* the conversation service needs an OpenAI API key which
  * you can register at https://platform.openai.com/api-keys (account required) or ask us for a key (in case you have some AI experience you can switch the LLM completely, too)
  * you need to configure as an environment variable in the conversations service (check ./conversation/.env)

### What to do? ###

You should

* understand the basic concepts which are used in the services
* be able to explain what the application is doing and how the components/services are working together (in simple words)
* be able to start at least one of the services locally to add some code by yourself
* be creative think about an addition or improvement for one of the services and write some code, examples
  * conversation: implement a custom tool that supports the language model with "realtime" data
  * persona: add some celebrities using an API or create personas which are completely faked
  * prompts: build a prompt dynamically based on an API
* send us your code and prepare yourself for our meeting

