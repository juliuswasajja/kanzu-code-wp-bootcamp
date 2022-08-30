window.addEventListener('load',() => {
    const form_el       = document.querySelector('#my-todos-form');
    const input      = document.querySelector("#add-new-to-do-item");
    const my_to_do_list    = document.querySelector('#my-to-dos-list');

    

    form_el.addEventListener('submit',(e) => {
        //e.preventDefault();
        const to_do_form_item = input.value;      
    
        // const to_do_list = document.createElement("ul");
        // to_do_list.classList.add("task-list");

        const to_do_item = document.createElement("li");
        to_do_item.classList.add("to-do-item");
        //to_do_item.innerText = to_do_form_item;

        
        
        //to_do_list.appendChild(to_do_item);
        my_to_do_list.appendChild(to_do_item);
    

        const edit_to_do_item = document.createElement('input');
        edit_to_do_item.type = 'text';
        edit_to_do_item.value = to_do_form_item;
        edit_to_do_item.setAttribute("readonly","readonly")

        const edit_button = document.createElement('button')
        edit_button.innerHTML = '<i class="fa-solid fa-pencil"></i>'

        const delete_button = document.createElement('button')
        delete_button.innerHTML = '<i class="fa-solid fa-trash-can"></i>'
        
        to_do_item.appendChild(edit_to_do_item);
        to_do_item.appendChild(edit_button);
        to_do_item.appendChild(delete_button);
        

        edit_button.addEventListener('click',()=>{
        edit_to_do_item.removeAttribute("readonly");
        edit_to_do_item.focus();
        })

        delete_button.addEventListener('click',()=>{
            my_to_do_list.removeChild(to_do_item);
        })

        
        
    
    })

})