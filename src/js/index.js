function hideElement(element){
    var hideClass = document.getElementsByClassName(element);

    for(var i = 0; i < hideClass.length; i++){
        hideClass[i].style.display = "none"
    }
}

function showElement(element){
    var showClass = document.getElementsByClassName(element);

    for(var i = 0; i < showClass.length; i++){
        showClass[i].style.display = "block"
    }
}

function filterSelection(element) {
    switch (element) {
        case 'read':
            hideElement('filterDiv-reading');
            showElement('filterDiv-read');
            hideElement('filterDiv-will-read');
            break;
        case 'reading':
            hideElement('filterDiv-read');
            showElement('filterDiv-reading');
            hideElement('filterDiv-will-read');
            break;
        case 'will-read':
            hideElement('filterDiv-read');
            hideElement('filterDiv-reading');
            showElement('filterDiv-will-read');
            break;
    }
}