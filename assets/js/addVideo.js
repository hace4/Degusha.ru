const form = document.getElementById("submitAddVideo");
let modal = new bootstrap.Modal(document.getElementById('modal'));
form.addEventListener("click", ()=>{
    const  fileInput = document.getElementById("exampleInputVideo");
    const  HeaderInput = document.getElementById("exampleInputHeader");
    const  TitleInput = document.getElementById("exampleInputTitle"); 
    const  preview = document.getElementById("exampleInputPreview");
    console.log(form );
    var Header = encodeURIComponent(HeaderInput.input);
    var Title = encodeURIComponent(TitleInput.input);
    var Video = encodeURIComponent(fileInput.files[0]);
    var Preview = encodeURIComponent(preview.files[0]);
    var formData = new FormData();
    formData.append('video', Video);
    formData.append('Header',Header);
    formData.append('Title', Title);
    formData.append('preview', Preview);
    
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'http://Degusha.API.local/notebook/api/v1/Degusha/', true);
    
    xhr.onload = function() {console.log(xhr.status);
        if (xhr.status === 201) {

            modal.show();
            $('.msg').text("Видос успешно закинут")
            $('.modal-title').text("Сообщение")

        } else {
            modal.show();
            $('.msg').text("к сожалению ты обосрался вытри жопу и попытайся снова")
            $('.modal-title').text("Сообщение")

        }
    };
    
    xhr.send(formData);
});