const formacoesList = document.querySelector(".formacoes-field");
const experienciaList = document.querySelector(".experiencia-field");
var formulario = document.getElementById("card");


function formacaoBtn(){
    document.getElementsByClassName("formacoes-field");
    const newForm = document.createElement("div");
    newForm.classList.add("form-div");

    const formFirstRow = document.createElement("input");
    formFirstRow.setAttribute('placeholder', 'Curso');
    formFirstRow.setAttribute('id', 'formacao-curso');
    formFirstRow.setAttribute('name', 'formacao-curso[]')
    formFirstRow.classList.add("Curso"); 
    newForm.appendChild(formFirstRow);

    const formSecondRow = document.createElement("input");
    formSecondRow.setAttribute('placeholder', 'Instituição');
    formSecondRow.setAttribute('id', 'formacao-instituicao');
    formSecondRow.setAttribute('name', 'formacao-instituicao[]')
    formSecondRow.classList.add("Instituição");
    newForm.appendChild(formSecondRow);

    const formThirdRow = document.createElement("input");
    formThirdRow.setAttribute('placeholder', 'Conclusão');
    formThirdRow.setAttribute('id', 'formacao-conclusao');
    formThirdRow.setAttribute('name', 'formacao-conclusao[]');
    formThirdRow.classList.add("Conclusão");
    newForm.appendChild(formThirdRow);

    const formBtn = document.createElement("button");
    formBtn.setAttribute('class', 'removeBtn');
    formBtn.innerText = 'X';
    newForm.appendChild(formBtn);

    formacoesList.appendChild(newForm);

    console.log(formacoesList);

}

function experienciaBtn(){
    document.getElementsByClassName("experiencia-field");

    const newForm = document.createElement("div");
    newForm.classList.add("form-div");

    const formFirstRow = document.createElement("input");
    formFirstRow.setAttribute('placeholder', 'Cargo');
    formFirstRow.setAttribute('id', 'experiencia-cargo');
    formFirstRow.setAttribute('name', 'experiencia-cargo[]');
    formFirstRow.classList.add("Cargo"); 
    newForm.appendChild(formFirstRow);

    const formSecondRow = document.createElement("input");
    formSecondRow.setAttribute('placeholder', 'Empresa');
    formSecondRow.setAttribute('id', 'experienca-empresa');
    formSecondRow.setAttribute('name', 'experiencia-empresa[]');
    formSecondRow.classList.add("Empresa");
    newForm.appendChild(formSecondRow);

    const formThirdRow = document.createElement("input");
    formThirdRow.setAttribute('placeholder', 'Início');
    formThirdRow.setAttribute('id', 'experiencia-inicio');
    formThirdRow.setAttribute('name', 'experiencia-inicio[]');
    formThirdRow.classList.add("Início");
    newForm.appendChild(formThirdRow);
    
    const formFourthRow = document.createElement("input");
    formFourthRow.setAttribute('placeholder', 'Fim');
    formFourthRow.setAttribute('id', 'experiencia-fim');
    formFourthRow.setAttribute('name', 'experiencia-fim[]');
    formFourthRow.classList.add("Fim");
    newForm.appendChild(formFourthRow);

    const formBtn = document.createElement("button");
    formBtn.setAttribute('class', 'removeBtn');
    formBtn.innerText = 'X';
    newForm.appendChild(formBtn);

    experienciaList.appendChild(newForm);

}


document.addEventListener("click", (e) => {
    const targetElement = e.target;
    const parentElement = targetElement.closest("div");

    if (targetElement.classList.contains("removeBtn")){
        parentElement.remove();
    }
})

document.addEventListener("click", (e) =>{
    const targetElement = e.target;

     if(targetElement.classList.contains("camposBtn")){
        console.log("a")
        formulario.reset();

     }
} )