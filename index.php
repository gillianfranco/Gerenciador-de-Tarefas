<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Gerenciador de Tarefas</title>
</head>

<body>
    <div id="messageToConfirm">
        <div id="registeredTask" class="bg-lightBlue">
            <p class="txt-white">Tarefa registrada com sucesso!</p>
            <span class="loadingBar"></span>
        </div>
        <!-- <div id="editedTask">
            <p>Tarefa editada com sucesso!</p>
            <span class="loadingBar"></span>
        </div>
        <div id="deletedTask">
            <p>Tarefa deletada com sucesso!</p>
            <span class="loadingBar"></span>
        </div>
        <div id="completedTask">
            <p>Tarefa concluída, parabéns!</p>
            <span class="loadingBar"></span>
        </div> -->
    </div>
    <span id="fixedBar">
        <table id="fixedBarTable" class="bg-gray">
            <tr>
                <td><button id="btnToBack" class="btn-fixedBar txt-black bg-gray">Voltar</button></td>
                <td><button id="btnToAdvance" class="btn-fixedBar txt-black bg-gray">Voltar para frente</button></td>
                <td><button id="btnToTrash" class="btn-fixedBar txt-black bg-gray">Lixeira</button></td>
                <td><button id="btnToCompletedTasks" class="btn-fixedBar txt-black bg-gray">Tarefas Concluídas</button></td>
            </tr>
        </table>
    </span>

    <head id="pageHeader">
        <h1 id="pageTitle" class="txt-white bg-lightBlue lineAlignment center" style="height: 80px;"><i>Gerenciador de Tarefas</i></h1>
    </head>
    <section id="table">
        <table id="taskTable">
            <thead class="txt-lightBlue">
                <tr>
                    <th></th>
                    <th>Tarefa</th>
                    <th>Data para fazer</th>
                    <th>Data limite</th>
                    <th>Prioridade</th>
                    <th>Descrição</th>
                    <th>
                        <select name="" id="filter" class="bg-lightBlue txt-white">
                            <option value="" disabled selected>Filtro</option>
                            <option value="">valor 1</option>
                            <option value="">valor 2</option>
                            <option value="">valor 3</option>
                        </select>
                    </th>
                    <th><button id="btnToAddNewTask" class="txt-darkGreen bg-white" onclick="showForm(1)">Nova Tarefa</button></th>
                </tr>
            </thead>
            <tbody class="txt-black">
                <tr>
                    <td><input type="checkbox" name="" class="checkBox"></td>
                    <td>Tarefa 1</td>
                    <td>01/01/2021</td>
                    <td>01/01/2021</td>
                    <td>Alta</td>
                    <td>Descrição</td>
                    <td><button id="btnToEdit" class="txt-white bg-lightBlue">Editar</button></td>
                    <td><button id="btnToDelete" class="txt-white bg-red">Deletar</button></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="" class="checkBox"></td>
                    <td>Tarefa 1</td>
                    <td>01/01/2021</td>
                    <td>01/01/2021</td>
                    <td>Alta</td>
                    <td>Descrição</td>
                    <td><button id="btnToEdit" class="txt-white bg-lightBlue">Editar</button></td>
                    <td><button id="btnToDelete" class="txt-white bg-red">Deletar</button></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="" class="checkBox"></td>
                    <td>Tarefa 1</td>
                    <td>01/01/2021</td>
                    <td>01/01/2021</td>
                    <td>Alta</td>
                    <td>Descrição</td>
                    <td><button id="btnToEdit" class="txt-white bg-lightBlue">Editar</button></td>
                    <td><button id="btnToDelete" class="txt-white bg-red">Deletar</button></td>
                </tr>
            </tbody>
        </table>
        <br>
    </section>
    <main id="floatingFormContainer">
        <form id="floatingForm" action="script.php" method="post" class="columnAlignment center justifyContent bg-lightBlueHover">
            <div class="bg-lightBlue columnAlignment center">
                <h1 id="formTitle" class="txt-white bg-lightBlue lineAlignment center">Nova Tarefa</h1>
                <div class="formInput">
                    <input type="text" name="task" id="inputToSetTask" placeholder=" " class="bg-lightBlue" required>
                    <label for="inputToSetTask" id="labelToSetTask" class="txt-white bg-lightBlue">Tarefa</label>
                </div>
                <div class="lineAlignment center">
                    <div class="formInputsToDate columnAlignment center">
                        <label for="dateToDo">Data Para Fazer</label>
                        <input type="date" name="dateToDo" id="dateToDo" class="bg-lightBlue txt-white" required>
                    </div>
                    <div class="formInputsToDate columnAlignment center">
                        <label for="deadLine">Data Limite</label>
                        <input type="date" name="deadline" id="deadLine" class="bg-lightBlue txt-white" required>
                    </div>
                </div>
                <select name="priority" id="selectToSetPriority" class="bg-lightBlue txt-white" required>
                    <option value="" disabled selected>Prioridade</option>
                    <option value="">valor 1</option>
                    <option value="">valor 2</option>
                    <option value="">valor 3</option>
                </select>
                <div class="formInput">
                    <input type="text" name="description" id="inputToDescription" placeholder=" " class="bg-lightBlue">
                    <label for="labelToDescription" id="labelToDescription" class="txt-white bg-lightBlue">Descrição</label>
                </div>
                <div id="formBtns" class="lineAlignment center">
                    <button type="submit" id="btnToSend" class="txt-white bg-darkGreen">Enviar</button>
                    <button type="reset" id="btnToClean" class="txt-white bg-red">Limpar</button>
                    <button id="btnToCancel" class="txt-white bg-lightBlue" onclick="showForm(0)">Cancelar</button>
                </div>
            </div>
        </form>
    </main>

    <script>
        function showForm(show) {
            if (show == 0) {
                document.getElementById("floatingFormContainer").style.display = "none";
            } else if (show == 1) {
                document.getElementById("floatingFormContainer").style.display = "flex";
            } else {
                document.getElementById("floatingFormContainer".style.display = "none");
            }
        }
    </script>
    <!-- <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script> -->
</body>

</html>