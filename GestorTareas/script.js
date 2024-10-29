document.getElementById("taskForm").addEventListener("submit", function(e) {
    e.preventDefault();
    const titulo = document.getElementById("titulo").value;
    const descripcion = document.getElementById("descripcion").value;

    fetch("add_task.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ titulo, descripcion })
    }).then(() => { loadTasks(); });
});

function loadTasks() {
    fetch("list_tasks.php")
        .then(response => response.json())
        .then(tasks => {
            console.log("Tareas recibidas:", tasks); 
            const taskList = document.getElementById("taskList");
            taskList.innerHTML = tasks.map(task => `
                <div class="task">
                    <h3>${task.titulo}</h3>
                    <p>${task.descripcion}</p>
                    <small>${task.fecha_creacion}</small>
                </div>
            `).join("");
        });
}

loadTasks();
