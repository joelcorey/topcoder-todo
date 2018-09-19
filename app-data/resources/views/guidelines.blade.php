@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                    <H1>TopCoder guidelines:</H1>
                    
                    <h3>Challenge Overview</h3>
                    <p>
                        This is the first in a series of challenges of building an awesome todo list app. 
                    In the first step to this challenge we will create an app that can do all CRUD actions. 
                    You must be able to CRUD a list. And you must be able to CRUD a list items. 
                    We will add reminders and setting deadlines in the next few challenges
                    <p>

                    <h3>UI Considerations:</h3>
                    <ul>
                        <li>A user must sign in</li>
                        <li>A user must have the option to using 3rd-party OAuth providers like Facebook, Google or GitHub. You must integrate two out of three.</li>
                        <li>Be able to perform all CRUD actions from the UI</li>
                        <li></li>
                    </ul> 
                    
                    <h3>Tech Stack:</h3>
                    <ul>
                        <li>Pick whatever tech stack you like and list it in your readme file</li>
                    </ul> 
                    
                    <h3>Final Submission Guidelines</h3>
                    <ul>
                        <li>You must be a US Veteran or Active Duty to enter a submission to this challenge. 
                            Please check the forum thread "Veteran Verification" and follow the instructions there.  
                            Submissions without a verification post will be disqualified.</li>
                        <li>You must include a README.md file with instructions on how to install/run your code.</li>
                        <li>You must include a video (annotated or narrated) demo of your code</li>
                        <li>Grading will not be based on UI/UX but a good presentation will be appreciated</li>
                    </ul> 
                    
                    <h3>Final Submission Guidelines</h3>
                    
                    <p>Requirements:</p>
                    
                    Following screens must be included
                    
                    Login with two options:
                    <ul>
                        <li>OAuth workflow</li>
                        <li>Custom made login with email and password with confirmation of password.</li>
                        <li>List of to-do records</li>
                        <li>A way to create, edit and delete to-do items</li>
                        <li>Log out</li>
                    </ul> 
                     
            </div>
        </div>
    </div>
</div>
@endsection
