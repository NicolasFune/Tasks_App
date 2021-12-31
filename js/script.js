let btn_add = document.querySelector("#btn-add")
let text_task = document.querySelector("#text-task")


function CriarElementoHTML(Element){

    let element = document.createElement(Element)
    return element
}
btn_add.addEventListener("click",()=>{
    let tasksContainer = document.querySelector("#tasks")
    
    let NewFormCheck = CriarElementoHTML("div")
    let NewInputCheck = CriarElementoHTML("input")
    let NewLabel = CriarElementoHTML("label")
    let NewBadge = CriarElementoHTML("span")
    let NewButton = CriarElementoHTML("button")
    let NewIcon = CriarElementoHTML("i")

    NewFormCheck.classList.add("form-check","mt-2")

    NewInputCheck.classList.add("form-check-input")
    NewInputCheck.setAttribute("type","checkbox")
    NewInputCheck.setAttribute("id","flexCheckDefault")

    NewLabel.classList.add("form-check-label")
    NewLabel.setAttribute("for","flexCheckDefault")
    NewLabel.innerHTML= text_task.value

    NewBadge.classList.add("badge","bg-success","mx-2")
    NewBadge.innerHTML = "New"

    NewButton.classList.add("btn","btn-outline-light","py-0","px-1","mx-2")
    
    NewIcon.classList.add("bi","bi-trash")

    NewButton.appendChild(NewIcon)



    NewFormCheck.appendChild(NewInputCheck)
    NewFormCheck.appendChild(NewLabel)
    NewFormCheck.appendChild(NewBadge)
    NewFormCheck.appendChild(NewButton)

    tasksContainer.appendChild(NewFormCheck)
})



