
class Book{
    constructor(Name,Author,Num){
        this.Name = Name;
        this.Author = Author;
        this.Num = Num;
    }
    
}
class Up{

    static addbooktodolist(){
        const bookp = Save.getitem();

        bookp.forEach(book => {

            Up.display(book);
            
        });
    }
    static display(book){
        const tbody = document.getElementById("tbody");
        const tr = document.createElement("tr");
        tr.innerHTML = `
        <td>${book.Name}</td>
        <td>${book.Author}</td>
        <td>${book.Num}</td>
        <td><a class="btn btn-danger"href="#">X</a></td>
        `
        tbody.appendChild(tr);

    }
    static Showalert(message,classname){
        const form = document.getElementById("form");
        const div = document.createElement("div");
        div.className = `alert alert-${classname}`;
        div.style.margin="5px 0";
        div.appendChild(document.createTextNode(message));
        form.appendChild(div);

        setTimeout(()=>{

            div.classList.remove("alert");
            div.textContent ='';

        },3000)
    }
}

class Save{

static getitem(){
let books;
if(localStorage.getItem("books") === null)
{

books = [];


}else{
books = JSON.parse(localStorage.getItem("books"));

}
return books;

}
static setitem(book){
    const books = Save.getitem();
    books.push(book);

    localStorage.setItem("books",JSON.stringify(books));
}
}

//const mybook = new Book("Light of Black",'Tony',2311);

document.querySelector("#btn").addEventListener("click",start);

document.addEventListener("DOMContentLoaded",Up.addbooktodolist);

function start(e){
    const name   = document.getElementById("Name").value;
    const author = document.getElementById("Author").value;
    const num    = document.getElementById("Num").value;

    const mybook = new Book(name,author,num);

    Save.setitem(mybook);
    Up.display(mybook);
    Up.Showalert("Add Book Success","success");


e.preventDefault();
}
