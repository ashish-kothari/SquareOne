# SquareOne
News aggregator application.

##Git Workflow
###Step 1
Make a local copy of this repository by using this command on the terminal 
``` git
git clone https://github.com/ashish-kothari/SquareOne.git
```

###Step 2
Install git-flow.
Check out https://github.com/nvie/gitflow for more details.
Familiarise yourself with the git workflow as discussed here: http://nvie.com/posts/a-successful-git-branching-model/

###Step 3
Move to the local repository and initialise git-flow.
``` git
git flow init
```
Press [ENTER] for all the options for the default setup.

###Step 4
Perform a status check.
``` git
git status
```
If you're not on branch 'develop', switch to it.
``` git
git checkout develop
```
**NOTE: DO NOT COMMIT TO MASTER BRANCH**

###Step 4
Do not directly work on the develop branch. Start a new feature branch and develop on it, until it's ready to be merged back to the develop branch.

``` git
git flow feature start <feature_name>
...
git flow feature finish <feature_name>
```
Once a new feature is created, work normally and commit small changes on the feature branch. At the end of the feature development, merge the branch into develop branch by ``` git feature finish ```. Always follow this workflow.

###Step 5
Before you begin working on your local repo, always start first by updating your local repo.
``` git 
git pull origin develop
```
Similarly, at the end of editing/adding/deleting files, commit your work and push to the github repo.



