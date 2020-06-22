# HornWebsite
Code for the redesigned Big Red Marching Band Horn Website

## Dev Environment Setup
This guide will go through setting up git and php on macOS or Linux.

### Installation
1. Install Homebrew (macOS only)

  Homebrew is probably the nicest package manager for Macs, so you'll want it for installing any sort of depedency for your dev environment. See https://brew.sh/ for the latest instructions on installing Homebrew
  
2. Install git and php through your package manager

  On macOS, this is as simple as running `brew install git` and `brew install php` in Terminal.
  On Ubuntu, this is as simple as running `sudo apt install git` and `sudo apt install php`.

### Configuring git
1. Setup your name and email

   git will need to know your name and email address in order to commit changes. This should match the name (not username) and email you used for your Github account.
   
   To setup your name, run the following command: `git config --global user.name "John Doe"`
   
   Similarly, to setup your email run `git config --global user.email johndoe@example.com`
   
2. Clone the git repo

   Run `git clone https://github.com/TheRealDanilson/HornWebsite.git`. You should see a folder named `HornWebsite` in the working directory. This folder will contain all of the code for the website.
   

## Branching Strategy
For this project, we'll be developing in *branches* and using *pull requests* (PR's) to commit to `master`.
This means that
1. `master` will ideally contain code that's been reviewed beforehand and shown to work
2. Code that's a work in progress should have its own branch
3. If you want to add code from a branch to `master`, you should open a pull request so that it can be reviewed.

See https://githubflow.github.io/ for a high-level explanation on this strategy and the justifications for it. If you're brand new to the idea of branches in git, see https://git-scm.com/book/en/v2/Git-Branching-Branches-in-a-Nutshell.


### Creating a branch
For each new task you plan on writing code for, you should create a new branch and develop within the branch.
   
Before creating a new branch, you need to make sure your local copy of the repo is up-to-date. To do this, run `git checkout master` and then run `git pull`.

To create and switch to a new branch, simply run `git checkout -b BRANCH_NAME`. Running `git branch` afterwards should show that you're on the newly created branch. From here, you can edit and write code with your favorite editor as normal.

### Commiting and Saving Changes
It's always a good idea to save your progress in Github, even if you're not ready to create a pull request. This can be run by doing the following

1. Run `git add FILE_NAME` for each file that you want git to be aware of. You can also run `git add DIRECTORY_NAME` to save time if you want to add every file in a directory.
2. Run `git commit -m "This commit did BLAH and WAAA"` to record in git the changes that you've made
3. Run `git push` to save these changes in Github. These changes wil be recorded in `BRANCH_NAME`, instead of `master`.

### Testing the website locally
While developing, it'll often be useful to see what your changes look like. Fortunately, it's very easy to run the website on your machine using php.

In the HornWebsite repo directory, run `php -S localhost:8000`. Now, if you access http://localhost:8000 in your favorite web browser, you should be able to see your local version of the website. To shutdown the local website, simply press the Ctrl and C keys at the same time in the terminal window.

### Creating a Pull Request
Once you feel that your code is ready to be pushed to `master`, you can create a pull request after commiting and saving your changes to Github.

1. Open the **Pull requests** tab in this repo page on Github.
2. Press the green **New pull request** button
3. You'll see the options to select a **base** branch, and a **compare** branch. The base branch should be `master`, and the **compare** branch should be the branch you've been developing in.
4. Fill out the pull request name and description. These are so that anyone else reading it will know what your code should do.
5. On the right hand side, add some **Reviewers**. This can be anyone who you think will be able to decide if your code should be accepted into `master`. Usually this is someone who's worked on the same section of code your PR involves, or maybe just someone who you trust to evaluate your code.
6. Once a reviewer approves your PR, an option will appear to **merge** your code into `master`. This is normally as easy as pushing the merge button, but occasionally Github may complain about a *merge conflict*. Feel free to ask someone for help if you have any trouble at this step.
