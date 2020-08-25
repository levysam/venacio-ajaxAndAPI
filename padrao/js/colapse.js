var buttons = document.getElementsByClassName('nav-item');
$.each(buttons, function(i, button) {
    if (i == 0) {
        colapse = document.getElementById('pisoterreo');
        while(colapse.className == 'tab-pane show active') {
            button.onClick(colapse.className == 'tab-pane');
        }
    }
    if (i == 1) {
        colapse = document.getElementById('pisoum');
        while(colapse.className == 'tab-pane show active') {
            button.onClick(colapse.className == 'tab-pane');
        }
    }
    if (i == 2) {
        colapse = document.getElementById('pisodois');
        while(colapse.className == 'tab-pane show active') {
            button.onClick(colapse.className == 'tab-pane');
        }
    }
    if (i == 3) {
        colapse = document.getElementById('pisotres');
        while(colapse.className == 'tab-pane show active') {
            button.onClick(colapse.className == 'tab-pane');
        }
    }
    if (i == 5) {
        colapse = document.getElementById('pisoquatro');
        while(colapse.className == 'tab-pane show active') {
            button.onClick(colapse.className == 'tab-pane');
        }
    }
})