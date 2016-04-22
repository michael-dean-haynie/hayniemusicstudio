var TAs = document.getElementsByTagName('textarea');

var i = 0
while(i < TAs.length){
    TAs[i].id = "editor" + String(i);
    CKEDITOR.replace(document.getElementById("editor" + String(i)));
    i++;
}