//Get button element: edit button and preview button

let editBtn = document.querySelector("a[href$='action=edit']")
let buttonPreview = document.getElementById('post-preview');
let buttonDraft = document.getElementById('save-post');


//Function add event listener when user press key down
window.addEventListener('keydown', (event)=>{
    //If press key number 2: open all post to edit
    if(event.code ==='Digit2'){
        editBtn.click();
    }
    //if press key number 3: open preview post
    if(event.code ==="Digit3"){
        buttonPreview.click();
    }
//if press key number 1: save daft post
    if(event.code ==="Digit1"){
        buttonDraft.click();
    }
})


