### Install notes

For ease of install, the ENV file is included. This is against industry best practices. For this small edge case, it is acceptable.

Similarly, the Composer vendors folder will be included. Again this is for ease of use, and against best practices.
On Composer not being Dockerized:
https://github.com/docker-library/php/issues/344

I had severe difficulty getting Composer "dockerized", and had to move it off in to a seperate project for a later time. Time management!

## Install

Host machine requirements:
/**PHP 7.2 or greater, Composer,**/ Docker



### Install directions
- Via command line, navigate to ./app-install
- Type: ```composer update```
- Duplicate the file ```env.example``` to ```.env```
- Copy the database name ```MYSQL_DATABASE=``` from the root project directory docker-compose.yml file to the ```DB_DATABASE=``` in the /app-data/.env file 
- Copy the database user ```MYSQL_USER=``` from the root project directory docker-compose.yml file to the ```DB_USERNAME=``` in the /app-data/.env file 
- Copy the database name ```MYSQL_PASSWORD=``` from the root project directory docker-compose.yml file to the ```DB_PASSWORD=``` in the /app-data/.env file 
- In the same directory that ```.env``` is in: ```php artisan key:generate```
- In your web browser navigate to: ```localhost```

### Notes

Common Laravel project errors

"There is no existing directory at ".../storage/logs" and its not buildable: Permission denied"
Usually the first two commands will fix:
- ```php artisan route:clear```
- ```php artisan config:clear```
- ```php artisan cache:clear```

Stop and remove all docker containers and images

- List all containers (only IDs) ```docker ps -a```
- Stop all running containers. ```docker stop $(docker ps -aq)```
- Remove all containers. ```docker rm $(docker ps -aq)```
- Remove all images. ```docker rmi -f $(docker images -q)```

SSH in to a running a container
- Get list of running containers: ```docker ps```
- ```docker exec -it container_name /bin/bash```
- To exit: ```exit```

Project web server root directory
/app-data/public is the same as a ./public folder on a web server

Rebuild a Docker container
```docker-compose up -d --force-recreate --build```

## TopCoder guidelines:

### Challenge Overview Round 2:

This is the second in a series of challenges of building an awesome todo list app. In the second step to this challenge we will add the ability, to not only delete a task but, you can have it marked complete using a radio box. After checking the completed box the task will be crossed out but remain in your list of tasks until deleted. You must be able to CRUD a list. And you must be able to CRUD a list items.

Another feature we will be adding to the application is that the app will have 2 extra css options for the whole application. Create a setting tab where you can choose one of three colors for the application. You can pick the color scheme but there should be three options. An example is black, red or blue background with different color texts for each background.

There is a code base provided in the forum but it is in PHP with a Laravel framework and VueJS. The code base has the basic CRUD to create a list and create tasks inside the list. If you would like to use the stack of your choice you will need to start from scratch

### UI Considerations:

    A user must sign in

    A user must have the option to using 3rd-party OAuth providers like Facebook, Google or GitHub. You must integrate two out of three.

    Be able to perform all CRUD actions from the UI

    A user must be able to complete a task and mark it as complete

    The setting tab should lead to preferences and then 3 color schemes

    A user must be able to pick between a total of 3 color schemes for the application


### Tech Stack:

    Pick whatever tech stack you like and list it in your readme file

### Requirements

    Following screens must be included

        Login with two options:

            OAuth workflow

            Custom made login with email and password with confirmation of password.

        List of to-do records

        A way to create, edit and delete to-do items

        Settings tab to change color scheme in application

        Log out


### Challenge Overview Round 1:

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
