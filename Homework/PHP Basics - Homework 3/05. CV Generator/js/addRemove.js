Element.prototype.remove = function() {
    this.parentElement.removeChild(this);
};
NodeList.prototype.remove = HTMLCollection.prototype.remove = function() {
    for(var i = 0, len = this.length; i < len; i++) {
        if(this[i] && this[i].parentElement) {
            this[i].parentElement.removeChild(this[i]);
        }
    }
};

var programLangRowCount = 1;
var langRowCount = 1;

function addProgramLang() {
    var element = document.getElementById('prog-language' + programLangRowCount);
    var cloneElement = element.cloneNode(true);
    cloneElement.id = "prog-language" + ++programLangRowCount;
    element.parentNode.appendChild(cloneElement);
}

function removeProgramLang() {
    if (programLangRowCount>1) {
        document.getElementById('prog-language' + programLangRowCount).remove();
        programLangRowCount--;
    }
}

function addLang() {
    var element = document.getElementById('speaking-language' + langRowCount);
    var cloneElement = element.cloneNode(true);
    cloneElement.id = "speaking-language" + ++langRowCount;
    element.parentNode.appendChild(cloneElement);
}

function removeLang() {
    if (langRowCount>1) {
        document.getElementById('speaking-language' + langRowCount).remove();
        langRowCount--;
    }
}