const todoItems = document.querySelectorAll('.todo')
todoItems.forEach(todoItem => {
    todoItem.addEventListener('click', () => completed(todoItem))
})

function completed(todo) {
    todo.classList.toggle('completed')
    todo.children[0].children[0].classList.toggle('none');
    todo.children[0].children[1].classList.toggle('block');
}