# color
BLUE="\[\033[0;34m\]"
RED="\[\033[0;31m\]"
GREEN="\[\033[0;32m\]"
NO_COLOR="\[\033[0m\]"
export PS1="$RED\u$NO_COLOR@$BLUE\h:$RED\w>$NO_COLOR "
export PS2='continue-> '
export PS4='$0.$LINENO+ '

# alias
alias ls='ls --color'
alias ll='ls -lh'
alias ll.='ll -a'
alias clc='clear'
alias vim='vi'
