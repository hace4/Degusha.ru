function makeCard(header='Твой мозг еще не осознала бытье', title='', video='', prewie=''){
    const maincontanier = document.getElementById("card");
    maincontanier.innerHTML = '';
    const container = document.createElement('div');
    container.classList.add("container");

    const rowbutton = document.createElement('div');
    rowbutton.classList.add("row", "button", "card-row", "row-cols-1", "row-cols-sm-2", "row-cols-md-3", "g-3",);

    const col = document.createElement('div');
    col.classList.add("col", "py-4", "px-3",);

    const card = document.createElement('div');
    card.classList.add("card", "shadow-sm",);

    const cardbody = document.createElement('div');
    cardbody.classList.add("card-body",);

    const Header = document.createElement('h1');
    Header.classList.add("card-text", "fw-light",);
    Header.innerText = header;

    const Title = document.createElement('p1');
    Title.classList.add("card-text");
    Title.innerText = title;

    const btncontanier = document.createElement('div');
    btncontanier.classList.add('d-flex', "justify-content-between", "align-items-center",);

    const btngroup = document.createElement('div');
    btngroup.classList.add('btn-group',);

    const btndel = document.createElement('button');
    btndel.classList.add('btn', 'del', 'btn-sm', 'btn-outline-danger');
    btndel.innerText = "Уничтожить";

    const btnedit = document.createElement('button');
    btnedit.classList.add('btn', 'btn-outline-warning');
    btnedit.innerText = "Поменять";


    const Video = document.createElement('video');
    Video.classList.add("card-video" ,"100%" ,"187.95px" ,"controls");
    Video.src = video;
    Video.poster = prewie;

    maincontanier.appendChild(container);
    container.appendChild(rowbutton);
    rowbutton.appendChild(col);
    col.appendChild(card);
    card.appendChild(Video);
    card.appendChild(cardbody);
    cardbody.appendChild(Header);
    cardbody.appendChild(Title);
    cardbody.appendChild(btncontanier);
    btncontanier.appendChild(btngroup);
    btngroup.appendChild(btndel);
    btngroup.appendChild(btnedit);
}

function show(){
    $.ajax({
    url: 'http://Degusha.API.local/notebook/api/v1/Degusha/',
    method: 'get',
    dataType: 'json',
    data: {},
    success: function(data){
        data.forEach( index => {
            makeCard(index[0].Header, index[0].Title, index[0].video, index[0].preview)
        })
	    ;
    }
});
}

console.log(document.querySelector("submitvideocontrol"));
