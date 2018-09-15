
## Install

Host machine requirements:
PHP 7.2 or greater, Composer, Docker

### On Composer not being Dockerized
https://github.com/docker-library/php/issues/344

### Step by step
- Via command line, navigate to ./app-install
- Type: ```composer update```

### Notes

Stop and remove all docker containers and images

- List all containers (only IDs) ```docker ps -a```
- Stop all running containers. ```docker stop $(docker ps -aq)```
- Remove all containers. ```docker rm $(docker ps -aq)```
- Remove all images. ```docker rmi -f $(docker images -q)```


/app-data/public is the same as a ./public folder on a web server

## TopCoder guidelines:

### Challenge Overview

This is the first in a series of challenges of building an awesome todo list app. In the first step to this challenge we will create an app that can do all CRUD actions. You must be able to CRUD a list. And you must be able to CRUD a list items. We will add reminders and setting deadlines in the next few challenges

### UI Considerations:

    A user must sign in

    A user must have the option to using 3rd-party OAuth providers like Facebook, Google or GitHub. You must integrate two out of three.

    Be able to perform all CRUD actions from the UI

### Tech Stack:

    Pick whatever tech stack you like and list it in your readme file

### Final Submission Guidelines

    You must be a US Veteran or Active Duty to enter a submission to this challenge.  Please check the forum thread "Veteran Verification" and follow the instructions there.  Submissions without a verification post will be disqualified.

    You must include a README.md file with instructions on how to install/run your code.

    You must include a video (annotated or narrated) demo of your code

    Grading will not be based on UI/UX but a good presentation will be appreciated

### Final Submission Guidelines

Requirements

Following screens must be included

    Login with two options:

        OAuth workflow

        Custom made login with email and password with confirmation of password.

    List of to-do records

    A way to create, edit and delete to-do items

    Log out

## Install

Docker for Windows
PHP and Composer installed locally. This mimicks having it installed on your server.

From the root directoy: 
docker-compose up
