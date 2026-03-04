# Git Industry Level Commands Practice
# 1.Git Configuration Commands
## 1.1

**Command Name:**
`git config --global user.name`

**Syntax:**

```bash
git config --global user.name "Your Name"
```

**Purpose:**
Sets the global username that Git associates with all commits created on this system. This name appears in commit history to identify the author.

**Example:**

```bash
git config --global user.name "Mohammad Nabi"
```

**Screenshot Proof:**

![git config --global user.name](/Proofs/git%20config%20--global%20user.name.png)

---

## 1.2

**Command Name:**
`git config --global user.email`

**Syntax:**

```bash
git config --global user.email "your_email@example.com"
```

**Purpose:**
Sets the global email address used in Git commits. This email is stored in commit metadata and is used by GitHub to link commits to your account.

**Example:**

```bash
git config --global user.email "nabi@gmail.com"
```

**Screenshot Proof:**

![git config --global user.email](/Proofs/git%20config%20--global%20user.email.png)

---

## 1.3

**Command Name:**
`git config --list`

**Syntax:**

```bash
git config --list
```

**Purpose:**
Displays all Git configuration settings from system, global, and local levels, helping verify current configuration.

**Example:**

```bash
git config --list
```

**Screenshot Proof:**

![git config --list](/Proofs/git%20config%20--list.png)

---

## 1.4

**Command Name:**
`git config --unset`

**Syntax:**

```bash
git config --unset <key>
```

**Purpose:**
Removes a specific configuration entry from Git, useful for correcting or cleaning incorrect settings.

**Example:**

```bash
git config --global --unset user.name
```

**Screenshot Proof:**

![git config --global --unset user.name](/Proofs/git%20config%20--global%20--unset%20user.name.png)

---

# 2.Repository Setup Commands


## 2.1

**Command Name:**
`git init`

**Syntax:**

```bash
git init
```

**Purpose:**
Initializes a new Git repository in the current directory by creating a `.git` folder to track version history.

**Example:**

```bash
git init
```

**Screenshot Proof:**

![git init image](/Proofs/git%20init.png)

---

## 2.2

**Command Name:**
`git clone`

**Syntax:**

```bash
git clone <repository-url>
```

**Purpose:**
Creates a local copy of a remote repository including all commits, branches, and history.

**Example:**

```bash
git clone https://github.com/Nabi-220659/demo-git.git
```

**Screenshot Proof:**

![git clone demo-git url](/Proofs/git%20clone%20url.png)

---

## 2.3

**Command Name:**
`git clone --branch`

**Syntax:**

```bash
git clone --branch <branch-name> <repository-url>
```

**Purpose:**
Clones a repository and directly checks out the specified branch instead of the default branch.

**Example:**

```bash
git clone --branch dev https://github.com/username/project.git
```

**Screenshot Proof:**

![]()

---

## 2.4

**Command Name:**
`git clone --depth`

**Syntax:**

```bash
git clone --depth <number> <repository-url>
```

**Purpose:**
Performs a shallow clone by fetching only a limited number of recent commits, reducing download size and time.

**Example:**

```bash
git clone --depth 1 https://github.com/username/project.git
```

**Screenshot Proof:**

![]()

---
# 3.Repository Status & Inspection Commands

## 3.1

**Command Name:**
`git status`

**Syntax:**

```bash
git status
```

**Purpose:**
Displays the current state of the working directory and staging area. It shows which files are modified, staged, untracked, or ready to be committed.

**Example:**

```bash
git status
```

**Screenshot Proof:**

![git status](/Proofs/git%20status.png)

---

## 3.2

**Command Name:**
`git log`

**Syntax:**

```bash
git log
```

**Purpose:**
Shows the complete commit history of the repository, including commit ID, author, date, and commit message.

**Example:**

```bash
git log
```

**Screenshot Proof:**

![git log](/Proofs/git%20log.png)

---

## 3.3

**Command Name:**
`git log --oneline`

**Syntax:**

```bash
git log --oneline
```

**Purpose:**
Displays commit history in a compact, single-line format showing short commit ID and message for quick overview.

**Example:**

```bash
git log --oneline
```

**Screenshot Proof:**

![git log --oneline](/Proofs/git_log%20--oneline.png)

---

## 3.4

**Command Name:**
`git log --graph`

**Syntax:**

```bash
git log --graph
```

**Purpose:**
Displays commit history along with a visual representation of branch structure and merges in a graph format.

**Example:**

```bash
git log --graph
```

**Screenshot Proof:**

![git log --graph](/Proofs/git%20log%20--graph.png)

---

## 3.5

**Command Name:**
`git show`

**Syntax:**

```bash
git show <commit-id>
```

**Purpose:**
Shows detailed information about a specific commit, including changes made, author details, and commit message.

**Example:**

```bash
git show HEAD
```

**Screenshot Proof:**

![git show <filename>](/Proofs/git_show.png)

---

## 3.6

**Command Name:**
`git diff`

**Syntax:**

```bash
git diff
```

**Purpose:**
Displays differences between the working directory and staging area, showing what changes have not yet been staged.if we add . then we change something then if we use git diff we see what changes happend.

**Example:**

```bash
git diff
```

**Screenshot Proof:**

![git diff](/Proofs/git%20diff.png)

---

## 3.7

**Command Name:**
`git diff --staged`

**Syntax:**

```bash
git diff --staged
```

**Purpose:**
Shows differences between staged changes and the last commit, allowing review before committing.
**Example:**

```bash
git diff --staged
```

#

**Screenshot Proof:**

![git diff --staged](/Proofs/git%20diff%20--staged.png)

---

## 3.8

**Command Name:**
`git blame`

**Syntax:**

```bash
git blame <file-name>
```

**Purpose:**
Displays line-by-line authorship information for a file, showing which commit and author last modified each line.

**Example:**

```bash
git blame index.html
```

**Screenshot Proof:**

![git blame <file-name>](/Proofs/git%20blame.png)

---

## 3.9

**Command Name:**
`git reflog`

**Syntax:**

```bash
git reflog
```

**Purpose:**
Shows a history of updates to branch references, including commits, resets, rebases, and checkouts, useful for recovering lost commits.

**Example:**

```bash
git reflog
```

**Screenshot Proof:**

![git reflog](/Proofs/git%20reflog.png)

---

## 3.10

**Command Name:**
`git shortlog`

**Syntax:**

```bash
git shortlog
```

**Purpose:**
Summarizes commit history grouped by author, often used to see contribution statistics.

**Example:**

```bash
git shortlog
```

**Screenshot Proof:**

![git shortlog](/Proofs/git%20shortlog.png)

---
# 4.File Tracking Commands
## 4.1

**Command Name:**
`git add`

**Syntax:**

```bash
git add <file-name>
```

**Purpose:**
Stages a specific file by adding its current changes to the staging area, preparing it to be included in the next commit.

**Example:**

```bash 
git add index.html
```

**Screenshot Proof:**

![git add file name](/Proofs/git%20%20add%20filename.png)

---

## 4.2

**Command Name:**
`git add .`

**Syntax:**

```bash
git add .
```

**Purpose:**
Stages all modified and new files in the current directory and subdirectories for the next commit.

**Example:**

```bash
git add .
```

**Screenshot Proof:**

![git add .](/Proofs/git%20add%20all.png)

---

## 4.3

**Command Name:**
`git add -p`

**Syntax:**

```bash
git add -p
```

**Purpose:**
Interactively stages parts of changes (hunks) within files, allowing selective addition of modifications to the staging area.

**Example:**

```bash
git add -p
```

**Screenshot Proof:**

![git add -p](/Proofs/git%20add-p.png)

---

## 4.4
**Command Name:**
`git restore`

**Syntax:**

```bash 
git restore <file-name>
```

**Purpose:**
Restores a file in the staging area to the working directory, discarding local modifications that are not staged.

**Example:**

```bash 
git restore index.html
```

**Screenshot Proof:**

![git restore file name](/Proofs/git%20restore%20.png)

---

## 4.5

**Command Name:**
`git restore --staged`

**Syntax:**

```bash 
git restore --staged <file-name>
```

**Purpose:**
Removes a file from the staging area without affecting the changes in the working directory.
### IT removes the file from staging area so we have to add again it to the staging area.

**Example:**

```bash id="v0tj5e"
git restore --staged index.html
```

**Screenshot Proof:**

![git restore --staged](/Proofs/git%20restore%20--staged.png)

---

## 4.6

**Command Name:**
`git rm`

**Syntax:**

```bash id="3msq9l"
git rm <file-name>
```

**Purpose:**
Deletes a file from the working directory and stages the deletion so it will be removed in the next commit.

**Example:**

```bash id="f9n1qd"
git rm test.txt
```

**Screenshot Proof:**

![git rm filename](/Proofs/git%20rm%20file%20name.png)

---

## 4.7

**Command Name:**
`git mv`

**Syntax:**

```bash
git mv <old-name> <new-name>
```

**Purpose:**
Renames or moves a file and stages the change automatically, tracking the file history correctly.

**Example:**

```bash
git mv old.txt new.txt
```

**Screenshot Proof:**

![git mv oldname newname](/Proofs/git%20mv%20oldname%20newname.png)

---
# 5. Commit Commands

## 5.1

**Command Name:**
`git commit`

**Syntax:**

```bash
git commit
```

**Purpose:**
Creates a new commit using the staged changes and opens the default text editor to write a detailed commit message describing the modifications included in the snapshot.

**Example:**

```bash
git commit
```

**Screenshot Proof:**

![]()

---

## 5.2

**Command Name:**
`git commit -m`

**Syntax:**

```bash
git commit -m "Your commit message"
```

**Purpose:**
Creates a new commit with a message provided directly in the command line, allowing quick and efficient documentation of staged changes without opening an editor.

**Example:**

```bash
git commit -m "Added login validation feature"
```

**Screenshot Proof:**

![]()

---

## 5.3

**Command Name:**
`git commit --amend`

**Syntax:**

```bash
git commit --amend
```

**Purpose:**
Modifies the most recent commit by allowing you to change the commit message or add newly staged changes to the previous commit without creating a new commit entry.

**Example:**

```bash
git commit --amend -m "Updated login validation and fixed typo"
```

**Screenshot Proof:**

![]()

---

## 5.4

**Command Name:**
`git commit --no-edit`

**Syntax:**

```bash
git commit --amend --no-edit
```

**Purpose:**
Amends the most recent commit while keeping the existing commit message unchanged, typically used when adding forgotten staged changes to the last commit.

**Example:**

```bash
git commit --amend --no-edit
```

**Screenshot Proof:**

![]()

---
# 6. Branch Management Commands

## 6.1

**Command Name:**
`git branch`

**Syntax:**

```bash id="xv8lpr"
git branch
```

**Purpose:**
Lists all local branches in the repository and highlights the currently active branch.

**Example:**

```bash id="z5qvha"
git branch
```

**Screenshot Proof:**

![]()

---

## 6.2

**Command Name:**
`git branch -a`

**Syntax:**

```bash id="r8n0sd"
git branch -a
```

**Purpose:**
Displays all branches including local and remote-tracking branches.

**Example:**

```bash id="u2k4mj"
git branch -a
```

**Screenshot Proof:**

![]()

---

## 6.3

**Command Name:**
`git branch -d`

**Syntax:**

```bash id="hjx3qw"
git branch -d <branch-name>
```

**Purpose:**
Deletes a local branch safely. The branch must be fully merged before deletion.

**Example:**

```bash id="m1s9yc"
git branch -d feature-login
```

**Screenshot Proof:**

![]()

---

## 6.4

**Command Name:**
`git branch -D`

**Syntax:**

```bash id="k2p7tw"
git branch -D <branch-name>
```

**Purpose:**
Force deletes a local branch even if it has unmerged changes.

**Example:**

```bash id="v6l0nx"
git branch -D feature-login
```

**Screenshot Proof:**

![]()

---

## 6.5

**Command Name:**
`git checkout`

**Syntax:**

```bash id="w4zj5a"
git checkout <branch-name>
```

**Purpose:**
Switches from the current branch to another existing branch.

**Example:**

```bash id="t8q3ds"
git checkout dev
```

**Screenshot Proof:**

![]()

---

## 6.6

**Command Name:**
`git checkout -b`

**Syntax:**

```bash id="p9v6cx"
git checkout -b <new-branch-name>
```

**Purpose:**
Creates a new branch and immediately switches to it.

**Example:**

```bash id="n2s7jy"
git checkout -b feature-authentication
```

**Screenshot Proof:**

![]()

---

## 6.7

**Command Name:**
`git switch`

**Syntax:**

```bash id="a5k9tr"
git switch <branch-name>
```

**Purpose:**
Switches to an existing branch using the newer and safer alternative to checkout.

**Example:**

```bash id="d3v8qm"
git switch main
```

**Screenshot Proof:**

![]()

---

## 6.8

**Command Name:**
`git switch -c`

**Syntax:**

```bash id="r1y8sz"
git switch -c <new-branch-name>
```

**Purpose:**
Creates a new branch and switches to it using the modern switch command.

**Example:**

```bash id="f7n4kl"
git switch -c feature-payment
```

**Screenshot Proof:**

![]()

---
# 7. Merge & Integration Commands

## 7.1

**Command Name:**
`git merge`

**Syntax:**

```bash id="w4e2qp"
git merge <branch-name>
```

**Purpose:**
Combines changes from the specified branch into the currently active branch, creating a merge commit if necessary and integrating the histories of both branches.

**Example:**

```bash id="u8n5kd"
git merge feature-login
```

**Screenshot Proof:**

![]()

---

## 7.2

**Command Name:**
`git merge --no-ff`

**Syntax:**

```bash id="r3k9mz"
git merge --no-ff <branch-name>
```

**Purpose:**
Forces Git to create a merge commit even when a fast-forward merge is possible, preserving branch history for better tracking and visibility.

**Example:**

```bash id="j6v1xt"
git merge --no-ff feature-login
```

**Screenshot Proof:**

![]()

---

# 8. Remote Repository Commands

## 8.1

**Command Name:**
`git remote`

**Syntax:**

```bash id="m2q8fy"
git remote
```

**Purpose:**
Displays the list of remote repositories connected to the local repository.

**Example:**

```bash id="n7t4cx"
git remote
```

**Screenshot Proof:**

![]()

---

## 8.2

**Command Name:**
`git remote -v`

**Syntax:**

```bash id="p9s6wr"
git remote -v
```

**Purpose:**
Shows detailed information about remote repositories including fetch and push URLs.

**Example:**

```bash id="k3d1vz"
git remote -v
```

**Screenshot Proof:**

![]()

---

## 8.3

**Command Name:**
`git remote add`

**Syntax:**

```bash id="q5n8yt"
git remote add <name> <repository-url>
```

**Purpose:**
Adds a new remote repository reference to the local repository.

**Example:**

```bash id="v2k7mx"
git remote add origin https://github.com/username/project.git
```

**Screenshot Proof:**

![]()

---

## 8.4

**Command Name:**
`git remote remove`

**Syntax:**

```bash id="z4r1pd"
git remote remove <name>
```

**Purpose:**
Removes an existing remote repository reference from the local repository.

**Example:**

```bash id="t8y6ns"
git remote remove origin
```

**Screenshot Proof:**

![]()

---

## 8.5

**Command Name:**
`git fetch`

**Syntax:**

```bash id="h3m9lw"
git fetch
```

**Purpose:**
Downloads new commits, branches, and updates from the remote repository without merging them into the current branch.

**Example:**

```bash id="s6q2vx"
git fetch
```

**Screenshot Proof:**

![]()

---

## 8.6

**Command Name:**
`git fetch --all`

**Syntax:**

```bash id="x7p4kd"
git fetch --all
```

**Purpose:**
Fetches updates from all configured remote repositories.

**Example:**

```bash id="b9n1rt"
git fetch --all
```

**Screenshot Proof:**

![]()

---

## 8.7

**Command Name:**
`git pull`

**Syntax:**

```bash id="m5v8cy"
git pull
```

**Purpose:**
Fetches changes from the remote repository and automatically merges them into the current branch.

**Example:**

```bash id="q2z7kl"
git pull
```

**Screenshot Proof:**

![]()

---

## 8.8

**Command Name:**
`git pull --rebase`

**Syntax:**

```bash id="r6x3wd"
git pull --rebase
```

**Purpose:**
Fetches changes from the remote repository and rebases local commits on top of the updated branch instead of merging.

**Example:**

```bash id="y1k9ps"
git pull --rebase
```

**Screenshot Proof:**

![]()

---

## 8.9

**Command Name:**
`git push`

**Syntax:**

```bash id="k8n4vz"
git push
```

**Purpose:**
Uploads local branch commits to the corresponding remote repository branch.

**Example:**

```bash id="d3t7mx"
git push
```

**Screenshot Proof:**

![]()

---

## 8.10

**Command Name:**
`git push -u origin branch-name`

**Syntax:**

```bash id="w9v2nx"
git push -u origin <branch-name>
```

**Purpose:**
Pushes a branch to the remote repository and sets it as the upstream tracking branch for future push and pull commands.

**Example:**

```bash id="j4k8pt"
git push -u origin feature-login
```

**Screenshot Proof:**

![]()

---

## 8.11

**Command Name:**
`git push --force`

**Syntax:**

```bash id="s2n7qy"
git push --force
```

**Purpose:**
Forces the local branch to overwrite the remote branch history, commonly used after rewriting commit history with rebase or amend.

**Example:**

```bash id="v5x1rt"
git push --force
```

**Screenshot Proof:**

![]()

---
# 9. Stash Commands

## 9.1

**Command Name:**
`git stash`

**Syntax:**

```bash id="f3k9ps"
git stash
```

**Purpose:**
Temporarily saves uncommitted changes in the working directory and staging area, allowing you to switch branches or perform other tasks without committing incomplete work.

**Example:**

```bash id="u7m2xd"
git stash
```

**Screenshot Proof:**

![]()

---

## 9.2

**Command Name:**
`git stash list`

**Syntax:**

```bash id="p8r4nt"
git stash list
```

**Purpose:**
Displays a list of all stashed changes saved in the repository.

**Example:**

```bash id="k2v9sm"
git stash list
```

**Screenshot Proof:**

![]()

---

## 9.3

**Command Name:**
`git stash pop`

**Syntax:**

```bash id="m6t1qr"
git stash pop
```

**Purpose:**
Applies the most recent stash to the working directory and removes it from the stash list.

**Example:**

```bash id="x4p8zn"
git stash pop
```

**Screenshot Proof:**

![]()

---

## 9.4

**Command Name:**
`git stash apply`

**Syntax:**

```bash id="t7n3lw"
git stash apply
```

**Purpose:**
Applies a stashed change to the working directory without removing it from the stash list.

**Example:**

```bash id="v1s6ky"
git stash apply
```

**Screenshot Proof:**

![]()

---

## 9.5

**Command Name:**
`git stash drop`

**Syntax:**

```bash id="r9x2mp"
git stash drop <stash-id>
```

**Purpose:**
Deletes a specific stash entry from the stash list.

**Example:**

```bash id="b5k8dz"
git stash drop stash@{0}
```

**Screenshot Proof:**

![]()

---

## 9.6

**Command Name:**
`git stash clear`

**Syntax:**

```bash id="j4n7qs"
git stash clear
```

**Purpose:**
Removes all stashed entries permanently from the repository.

**Example:**

```bash id="w3t9vx"
git stash clear
```

**Screenshot Proof:**

![]()

---

# 10. Reset & Undo Commands

## 10.1

**Command Name:**
`git reset`

**Syntax:**

```bash id="y6p2kn"
git reset <commit-id>
```

**Purpose:**
Resets the current branch to the specified commit, modifying the staging area depending on the reset mode used.

**Example:**

```bash id="n8t4sv"
git reset HEAD~1
```

**Screenshot Proof:**

![]()

---

## 10.2

**Command Name:**
`git reset --soft`

**Syntax:**

```bash id="q1m7xp"
git reset --soft <commit-id>
```

**Purpose:**
Resets the branch pointer to a specific commit while keeping changes staged in the staging area.

**Example:**

```bash id="z3v9kd"
git reset --soft HEAD~1
```

**Screenshot Proof:**

![]()

---

## 10.3

**Command Name:**
`git reset --mixed`

**Syntax:**

```bash id="s5k2wr"
git reset --mixed <commit-id>
```

**Purpose:**
Resets the branch pointer and unstages changes, but keeps modifications in the working directory.

**Example:**

```bash id="t8x4qp"
git reset --mixed HEAD~1
```

**Screenshot Proof:**

![]()

---

## 10.4

**Command Name:**
`git reset --hard`

**Syntax:**

```bash id="v2p7mx"
git reset --hard <commit-id>
```

**Purpose:**
Resets the branch pointer and completely removes staged and working directory changes, restoring the repository to the specified commit.

**Example:**

```bash id="m9r1ks"
git reset --hard HEAD~1
```

**Screenshot Proof:**

![]()

---

## 10.5

**Command Name:**
`git revert`

**Syntax:**

```bash id="p3t8zn"
git revert <commit-id>
```

**Purpose:**
Creates a new commit that undoes the changes introduced by a previous commit without altering commit history.

**Example:**

```bash id="k7v2mq"
git revert HEAD
```

**Screenshot Proof:**

![]()

---

## 10.6

**Command Name:**
`git clean -f`

**Syntax:**

```bash id="x5n9qp"
git clean -f
```

**Purpose:**
Removes untracked files from the working directory.

**Example:**

```bash id="r2t8vk"
git clean -f
```

**Screenshot Proof:**

![]()

---

## 10.7

**Command Name:**
`git clean -fd`

**Syntax:**

```bash id="b8m4xp"
git clean -fd
```

**Purpose:**
Removes untracked files and directories from the working directory.

**Example:**

```bash id="y6k1sz"
git clean -fd
```

**Screenshot Proof:**

![]()

---
# 11. Rebasing Commands

## 11.1

**Command Name:**
`git rebase`

**Syntax:**

```bash id="p4x8mz"
git rebase <branch-name>
```

**Purpose:**
Reapplies commits from the current branch on top of another specified branch, creating a linear commit history by moving your changes to the latest base of that branch.

**Example:**

```bash id="t7k2qv"
git rebase main
```

**Screenshot Proof:**

![]()

---

## 11.2

**Command Name:**
`git rebase -i`

**Syntax:**

```bash id="v9m3ks"
git rebase -i <commit-id>
```

**Purpose:**
Starts an interactive rebase session that allows you to edit, reorder, squash, or remove commits before integrating them into the branch history.

**Example:**

```bash id="r2n6xp"
git rebase -i HEAD~3
```

**Screenshot Proof:**

![]()

---

## 11.3

**Command Name:**
`git rebase --continue`

**Syntax:**

```bash id="m5t8qy"
git rebase --continue
```

**Purpose:**
Continues the rebase process after resolving merge conflicts during a rebase operation.

**Example:**

```bash id="k1v7zd"
git rebase --continue
```

**Screenshot Proof:**

![]()

---

## 11.4

**Command Name:**
`git rebase --abort`

**Syntax:**

```bash id="x6p2wr"
git rebase --abort
```

**Purpose:**
Cancels the ongoing rebase process and restores the branch to its original state before the rebase started.

**Example:**

```bash id="n3t9sv"
git rebase --abort
```

**Screenshot Proof:**

![]()

---

# 12. Cherry Pick & Patch Commands

## 12.1

**Command Name:**
`git cherry-pick`

**Syntax:**

```bash id="q8m4kp"
git cherry-pick <commit-id>
```

**Purpose:**
Applies the changes introduced by a specific commit from another branch into the current branch without merging the entire branch.

**Example:**

```bash id="t5x1zr"
git cherry-pick a1b2c3d
```

**Screenshot Proof:**

![]()

---

## 12.2

**Command Name:**
`git format-patch`

**Syntax:**

```bash id="p9v6mw"
git format-patch <branch-name>
```

**Purpose:**
Creates patch files from commits that can be shared or applied to another repository.

**Example:**

```bash id="k4t8qs"
git format-patch main
```

**Screenshot Proof:**

![]()

---

## 12.3

**Command Name:**
`git apply`

**Syntax:**

```bash id="r7m2xp"
git apply <patch-file>
```

**Purpose:**
Applies changes from a patch file to the working directory without creating a commit.

**Example:**

```bash id="v1t5zk"
git apply 0001-feature.patch
```

**Screenshot Proof:**

![]()

---

## 12.4

**Command Name:**
`git am`

**Syntax:**

```bash id="x3p8qt"
git am <patch-file>
```

**Purpose:**
Applies a patch file generated by format-patch and automatically creates a commit including author and message information.

**Example:**

```bash id="m6v9kr"
git am 0001-feature.patch
```

**Screenshot Proof:**

![]()

---

# 13. Tagging Commands

## 13.1

**Command Name:**
`git tag`

**Syntax:**

```bash id="t8n2qp"
git tag
```

**Purpose:**
Lists all tags in the repository, typically used to mark release versions.

**Example:**

```bash id="k3v7mx"
git tag
```

**Screenshot Proof:**

![]()

---

## 13.2

**Command Name:**
`git tag -a`

**Syntax:**

```bash id="p5t9wr"
git tag -a <tag-name> -m "Tag message"
```

**Purpose:**
Creates an annotated tag with additional metadata such as tag message, author name, and date.

**Example:**

```bash id="v2n6ks"
git tag -a v1.0 -m "Version 1.0 release"
```

**Screenshot Proof:**

![]()

---

## 13.3

**Command Name:**
`git tag -d`

**Syntax:**

```bash id="r4p8zx"
git tag -d <tag-name>
```

**Purpose:**
Deletes a local tag from the repository.

**Example:**

```bash id="m9t1qs"
git tag -d v1.0
```

**Screenshot Proof:**

![]()

---

## 13.4

**Command Name:**
`git push origin --tags`

**Syntax:**

```bash id="x7k3mv"
git push origin --tags
```

**Purpose:**
Pushes all local tags to the remote repository.

**Example:**

```bash id="n6t2zp"
git push origin --tags
```

**Screenshot Proof:**

![]()

---
# 14. Submodule Commands

## 14.1

**Command Name:**
`git submodule add`

**Syntax:**

```bash id="y8t3qp"
git submodule add <repository-url>
```

**Purpose:**
Adds an external Git repository as a submodule inside the current repository, allowing you to track another project within your project while keeping its history separate.

**Example:**

```bash id="k4m7xz"
git submodule add https://github.com/username/library.git
```

**Screenshot Proof:**

![]()

---

## 14.2

**Command Name:**
`git submodule init`

**Syntax:**

```bash id="p2v9ks"
git submodule init
```

**Purpose:**
Initializes local configuration for submodules defined in the repository, preparing them to be updated and used.

**Example:**

```bash id="t6n1wr"
git submodule init
```

**Screenshot Proof:**

![]()

---

## 14.3

**Command Name:**
`git submodule update`

**Syntax:**

```bash id="r5x8mq"
git submodule update
```

**Purpose:**
Fetches and checks out the specific commit of each initialized submodule as recorded in the main repository.

**Example:**

```bash id="v3k7zp"
git submodule update
```

**Screenshot Proof:**

![]()

---

# 15. Debugging Commands

## 15.1

**Command Name:**
`git bisect`

**Syntax:**

```bash id="m9t4qs"
git bisect
```

**Purpose:**
Uses binary search to identify the specific commit that introduced a bug by repeatedly marking commits as good or bad.

**Example:**

```bash id="x2p6vn"
git bisect
```

**Screenshot Proof:**

![]()

---

## 15.2

**Command Name:**
`git bisect start`

**Syntax:**

```bash id="k8n3zr"
git bisect start
```

**Purpose:**
Starts a bisect session to begin the process of locating a faulty commit.

**Example:**

```bash id="t5v9mp"
git bisect start
```

**Screenshot Proof:**

![]()

---

## 15.3

**Command Name:**
`git bisect good`

**Syntax:**

```bash id="p7m2kx"
git bisect good <commit-id>
```

**Purpose:**
Marks a specific commit as working correctly during a bisect session to help narrow down the faulty commit.

**Example:**

```bash id="v1t8qs"
git bisect good a1b2c3d
```

**Screenshot Proof:**

![]()

---

## 15.4

**Command Name:**
`git bisect bad`

**Syntax:**

```bash id="r4n9xp"
git bisect bad <commit-id>
```

**Purpose:**
Marks a specific commit as containing the bug during a bisect session, allowing Git to continue narrowing down the problematic commit.

**Example:**

```bash id="m6k3zt"
git bisect bad HEAD
```

**Screenshot Proof:**

![]()

---
**Screenshot Proof:**

![]()

![]()


