<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yashveer | Assignment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>



<body style="background-color: cornflowerblue;">
<!-- This is navbar -->
    <nav class="navbar bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-light">Job Assignment</a>
            <div class="d-flex" role="search">
            </div>
        </div>
    </nav>


    <!-- modal for update task -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Update task</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="hello1">
                        <div class="mb-3">
                            <label for="taskhead1" class="form-label">Task head</label>
                            <input type="text" class="form-control" id="taskhead1" placeholder="Enter task head"
                                name="taskhead" required>
                        </div>

                        <input id="number" type="hidden" name="number">


                        <div class="mb-3">
                            <label for="task1" class="form-label">Task</label>
                            <textarea class="form-control" placeholder="write your task here" name="task" id="task1"
                                required cols="30" rows="10"></textarea>
                        </div>

                        <div class="d-grid gap-2">

                            <button class="btn btn-success" id="submitbtn1">Update</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" id="dollar" class="btn btn-secondary invisible"
                        data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!-- modal for create category like todo doing -->
    <div class="modal fade" id="loginModalh" tabindex="-1" aria-labelledby="loginModalhLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalhLabel">Create Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="hello2">
                        <div class="mb-3">
                            <label for="taskcategory" class="form-label">Category</label>
                            <input type="text" class="form-control" id="taskcategory" placeholder="Create New Category"
                                name="taskcategory" required>
                        </div>
                        <div class="d-grid gap-2">

                            <button class="btn btn-success" id="submitbtn2">Create Category</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" id="dollarsi" class="btn btn-secondary invisible"
                        data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!-- modal for create task -->
    <div class="modal fade" id="loginModalu" tabindex="-1" aria-labelledby="loginModaluLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModaluLabel">Create task </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="hello">
                        <div class="mb-3">
                            <label for="taskhead" class="form-label">Task head</label>
                            <input type="text" class="form-control" id="taskhead" placeholder="Enter task head"
                                name="taskhead" required>
                        </div>
                        <div class="mb-3">
                            <label for="category">Choose a category:</label>

                            <select name="category" id="category">
                                <option value="volvo">Volvo</option>
                            </select>
                        </div>



                        <div class="mb-3">
                            <label for="task" class="form-label">Task</label>
                            <textarea class="form-control" placeholder="Write your task here" name="task" id="task"
                                required cols="30" rows="10"></textarea>
                        </div>

                        <div class="d-grid gap-2">

                            <button class="btn btn-success" id="submitbtn">Add</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" id="dollar1" class="invisible" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>





    <!-- Real code start here button for create task and category calling modal -->
    <div class="container my-3">
        <div class="text-center">

            <button id="lopi" class="invisible" data-bs-toggle="modal" data-bs-target="#loginModal"> </button>
            <button id="lopid" style="background-color: cornsilk;" class="btn  mt-4" data-bs-toggle="modal"
                data-bs-target="#loginModalu"> Add Task</button>
            <button id="" style="background-color: cornsilk;" class="btn  mt-4" data-bs-toggle="modal"
                data-bs-target="#loginModalh"> Add another Category</button>

        </div>
    </div>

   <!-- static data when database not connect -->
    <div class="container">
        <div id="dil" class=" con row justify-content-center">

            <div id="first" class=" jalwa card mx-1 my-1"
                style="width: 18rem;background-color: powderblue;min-height: 18rem;">
                <h3>To Do</h3>
                <div id="lohi" draggable="true" class="list card mx-1 my-1" style=";">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-title">first note
                            </h5>
                            <div>

                                <div class="dropdown">
                                    <a class="btn btn-secondary " href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        :
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li><span id="reps" onclick="myFunction(id)" class="dropdown-item">Update</span>
                                        </li>
                                        <li><span id="${respo.data[i].id}" onclick="deletedd(id)"
                                                class="dropdown-item">Delete</span></li>
                                    </ul>
                                </div>

                                <div>


                                </div>



                            </div>

                        </div>

                        <p class="card-text text-dark">First note is here koi dikkat nahi hai </p>
                    </div>
                </div>

            </div>
            <div id="second" class="jalwa card mx-1 my-1" style="width: 18rem;min-height: 18rem;">
                <h3>Doing</h3>


                <div id="lori" draggable="true" class=" list card mx-1 my-1" style="">
                    <div class="card-body">
                        <h5 class="card-title">Second Note
                        </h5>
                        <p class="card-text text-dark">Second note is here koi dikkat nahi</p>
                    </div>
                </div>

                <div id="logi" draggable="true" class=" list card mx-1 my-1" style="">
                    <div class="card-body">
                        <h5 class="card-title">second Note
                        </h5>
                        <p class="card-text text-dark">Second note is here koi dikkat nahi</p>
                    </div>
                </div>

            </div>
            <div id="third" class="jalwa card mx-1 my-1" style="width: 18rem;min-height: 18rem;">

                <h3>Done</h3>


                <div id="logu" class=" list card mx-1 my-1" draggable="true" style=";">
                    <div class="card-body">
                        <h5 class="card-title">selected piece
                        </h5>
                        <p class="card-text text-dark">description here</p>
                    </div>
                </div>

            </div>
            <div id="four" class="jalwa card mx-1 my-1" style="width: 18rem;min-height: 18rem;">
                <!-- sab sahi hai koi dikkat ki baat to nahi hai -->

                <h3>Done</h3>


                <div id="logu" class=" list card mx-1 my-1" draggable="true" style=";">
                    <div class="card-body">
                        <h5 class="card-title">selected piece
                        </h5>
                        <p class="card-text text-dark">description here</p>
                    </div>
                </div>

            </div>
        </div>
    </div>




<!-- javascript code start here -->
    <script>

        // when page load
    window.addEventListener("load", pophandler());

    function pophandler() {
        dophandler();
        setTimeout(() => {
            lophandler();

        }, 300);

    }
  
    // helper function to make fetch card data and where moving list data from database and show on page
    function datahandler(kuppi, tar) {
        console.log(tar)

        let chips = "";
        let kilo = `dat` + tar;
        console.log(kilo);
        console.log(kuppi.id);
        chips = `  <div id="lori${kuppi.id}" draggable="true" class=" list card mx-1 my-1" style="background-color: whitesmoke;">
                <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5 id="ho${kuppi.id}" class="card-title mt-2">${kuppi.task_head}
                    </h5>
                    <div>

                        <div class="dropdown">
                            <a class="btn  " href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                </svg>
                            </a>

                            <ul class="dropdown-menu">
                                <li><span id="${kuppi.id}" onclick="myFunction(id)" class="dropdown-item">Update</span>
                                </li>
                                <li><span id="${kuppi.id}" onclick="deletedd(id)"
                                        class="dropdown-item">Delete</span></li>

                                        <div id="zol${kuppi.id}" class="sumo">
                                      
                                        </div>
                            </ul>
                        </div>

                        <div>


                        </div>

                        </div>
                    </div>
                    <p id="lo${kuppi.id}" class="card-text text-dark">${kuppi.task_body}</p>
                </div>
            </div>`;

        let pilu = document.getElementById(kilo);
        pilu.innerHTML += chips;

        let sai = "";
        
            setTimeout(() => {
                
                  // fetch category data to make list in task card where to move
        let xhr1 = new XMLHttpRequest();
        xhr1.open("GET", "api/allcategory.php", false);
        xhr1.onload = () => {
            if (xhr1.readyState === XMLHttpRequest.DONE) {
                if (xhr1.status === 200) {
                    let respo = JSON.parse(xhr1.response);
                    console.log(respo.data)

                    console.log("pritam pyaare")
                    console.log(kuppi.id)
                    for (let i = 0; i < respo.data.length; i++) {

                        if (respo.data[i].sno != kuppi.category_id) {
                            sai +=
                                ` <li><span  onclick="zumbo(${kuppi.id},${respo.data[i].sno})" class="dropdown-item">Move to ${respo.data[i].category_name}</span></li>`;
                            console.log(kuppi.id)

                        }

                    }
                    let kan = `zol` + kuppi.id;
                    
                 
                let dom = document.getElementById(kan);
                    
                    
                    dom.innerHTML = sai;






                }
            }
        }


        xhr1.send()
              


        }, 1000);

      
        
         


    }



    let firstselection = "";
    let secondselection = "";


    // helper function to set data after move like doing and done category
    function zumbo(li, si) {

        draghandler(li, si);
          setTimeout(() => {
            pophandler();


        }, 500);
     
    }


    // helper function to fetch all task and drag and drop functionality 
    function lophandler() {
        let xhr1 = new XMLHttpRequest();
        xhr1.open("GET", "api/alldata.php", true);
        xhr1.onload = () => {
            if (xhr1.readyState === XMLHttpRequest.DONE) {
                if (xhr1.status === 200) {
                    let respo = JSON.parse(xhr1.response);

                    for (let i = 0; i < respo.data.length; i++) {




                        try {
                            
                            datahandler(respo.data[i], respo.data[i].category_id);


                        } catch (error) {
                            console.log(error);


                        }


                    }


                    let dragItem = null;
                    //  for drag and drop cards
                    let lists = document.getElementsByClassName("list");
                    const jil = document.getElementsByClassName("jalwa");


                    for (list of lists) {
                        list.addEventListener("dragstart", function(e) {
                            dragItem = this;
                            firstselection = this.id;
                            console.log(firstselection.substr(firstselection.length - 1))
                            console.log(this)
                        })

                    }

                    for (ji of jil) {
                        ji.addEventListener("dragover", function(e) {
                            e.preventDefault();
                        })

                        ji.addEventListener("drop", function(e) {
                            console.log(this);
                            secondselection = this.id;
                            // let pink = solo

                            draghandler(firstselection.match(/-?\d+\.?\d*/)[0], secondselection.match(
                                /-?\d+\.?\d*/)[0])

                            this.append(dragItem);



                        })

                    }


                }
            }
        }


        xhr1.send()
        
        

    }



    // helper function to update task
    function draghandler(aero, zero) {
        let xhr1 = new XMLHttpRequest();
        xhr1.open("GET", `api/updatetask.php?task=${aero}&taskhead=${zero}`, true);
        xhr1.onload = () => {
            if (xhr1.readyState === XMLHttpRequest.DONE) {
                if (xhr1.status === 200) {
                    let respo = JSON.parse(xhr1.response);

                }
            }
        }


        xhr1.send()

     


    }



    // helper function aise hi to some test
    function anotherfunction() {
        let catdata = [];
        let xhr1 = new XMLHttpRequest();
        xhr1.open("GET", "api/allcategory.php", true);
        xhr1.onload = () => {
            if (xhr1.readyState === XMLHttpRequest.DONE) {
                if (xhr1.status === 200) {
                    let respo = JSON.parse(xhr1.response);
                    for (let i = 0; i < respo.data.length; i++) {
                        catdata.push(respo.data[i]);
                    }




                }
            }
        }


        xhr1.send()


    }


    // helper function to fetch category from database and show on page like todo and select option for form 
    function dophandler() {
        if (document.getElementById('taskhead').value != "" || document.getElementById('task').value != "") {
            document.getElementById('taskhead').value = "";
            document.getElementById('task').value = "";

        }

        let xhr1 = new XMLHttpRequest();
        xhr1.open("GET", "api/allcategory.php", true);
        xhr1.onload = () => {
            if (xhr1.readyState === XMLHttpRequest.DONE) {
                if (xhr1.status === 200) {
                    let respo = JSON.parse(xhr1.response);
                    console.log(respo);
                    let allsab = "";



                    let item = document.getElementById("dil");
                    let con = document.getElementById("category");


                    if (respo.data.length > 0) {
                        str = "";


                        for (let i = 0; i < respo.data.length; i++) {

                            allsab +=
                                ` <option value="${respo.data[i].sno}">${respo.data[i].category_name}</option>`;

                            str += `
                                  <div id="dat${respo.data[i].sno}" class=" jalwa card mx-1 my-1" style="width: 18rem;background-color: powderblue;min-height: 18rem;">
           
                                  <div class="d-flex align-items-start mt-1 justify-content-between">
                                    <h3 class="text-center ">${respo.data[i].category_name}    
                                    
                                    


                                    </h3>
                                    <button id=""  onclick="deletecat(${respo.data[i].sno})" class="btn  text-dark" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                        </svg>
                                    </button>

                                    </div>
           

        </div>`;


                        }
                    } else {
                        str = "no task added yet";
                    }
                    item.innerHTML = str;
                    con.innerHTML = allsab;


                }
            }
        }


        xhr1.send()

    }



    // helper function to delete category from database
    function deletecat(pip) {
        console.log(pip)


        let istall = false;

        let xhr1 = new XMLHttpRequest();
        xhr1.open("GET", "api/deletecategory.php?selfie=" + pip, true);
        xhr1.onload = () => {
            if (xhr1.readyState === XMLHttpRequest.DONE) {
                if (xhr1.status === 200) {
                    let respo = (xhr1.response);
                    console.log(respo);





                }
            }
        }

        xhr1.send();
        setTimeout(() => {
            pophandler();


        }, 500);

    }


//   this is main form for create task head and body
    let form = document.getElementById('hello');
    let alumni = document.getElementById('submitbtn');

    form.onsubmit = (e) => {
        e.preventDefault();
    }

    alumni.onclick = () => {
        if (document.getElementById('taskhead').value == "" || document.getElementById('task').value == "") {
            alert("please fill all credentials");

        } else {




            document.getElementById('dollar1').click();

            console.log("hello world kya baat hai");
            let xhr1 = new XMLHttpRequest();
            xhr1.open("POST", "api/adddata.php", true);
            xhr1.onload = () => {
                if (xhr1.readyState === XMLHttpRequest.DONE) {
                    if (xhr1.status === 200) {
                        let respo = (xhr1.response);
                        console.log(respo);
                        if (respo.success) {
                            alert('ho gaya kaam');
                        }




                    }
                }
            }

            let formData = new FormData(form);
            xhr1.send(formData);

            


            setTimeout(() => {
                pophandler();


            }, 500);

        }
    }


    // helper function to delete taskcard
    function deletedd(id) {
        console.log(id);

        let istall = false;

        let xhr1 = new XMLHttpRequest();
        xhr1.open("GET", "api/deletedata.php?selfie=" + id, true);
        xhr1.onload = () => {
            if (xhr1.readyState === XMLHttpRequest.DONE) {
                if (xhr1.status === 200) {
                    let respo = (xhr1.response);
                    console.log(respo);
                    if (respo.success) {

                        // alert('ho gaya kaam');
                    }




                }
            }
        }

        xhr1.send();
        setTimeout(() => {
            pophandler();


        }, 500);




    }



// helper function to update task after click update button
    function myFunction(id) {
        console.log(id)
        let alumnidi = document.getElementById(`lo${id}`);
        let alumnidii = document.getElementById(`ho${id}`);
        console.log(alumnidi.innerText);
        console.log(alumnidii.innerText);
        document.getElementById('lopi').click();

        document.getElementById('task1').value = alumnidi.innerText;
        document.getElementById('taskhead1').value = alumnidii.innerText;
        document.getElementById('number').value = id;


        let form1 = document.getElementById('hello1');
        let alumni1 = document.getElementById('submitbtn1');

        form1.onsubmit = (e) => {
            e.preventDefault();
        }

        alumni1.onclick = () => {
            if (document.getElementById('taskhead1').value == "" || document.getElementById('task1').value == "") {
                alert("please fill all credentials");

            } else {

                document.getElementById('dollar').click();

                console.log("hello world kya baat hai");
                let xhr1 = new XMLHttpRequest();
                xhr1.open("POST", "api/updatedata.php", true);
                xhr1.onload = () => {
                    if (xhr1.readyState === XMLHttpRequest.DONE) {
                        if (xhr1.status === 200) {
                            let respo = (xhr1.response);
                            console.log(respo);
                            if (respo.success) {
                                alert('ho gaya kaam');
                            }




                        }
                    }
                }

                let formData = new FormData(form1);
                xhr1.send(formData);

                setTimeout(() => {
                    pophandler();


                }, 500);

            }
        }

    }









//   this is for create category
    let form2 = document.getElementById('hello2');
    let alumni2 = document.getElementById('submitbtn2');

    form2.onsubmit = (e) => {
        e.preventDefault();
    }

    alumni2.onclick = () => {
        if (document.getElementById('taskcategory').value == "") {
            alert("please fill all credentials");

        } else {

            document.getElementById('dollarsi').click();

            let xhr1 = new XMLHttpRequest();
            xhr1.open("POST", "api/addcategory.php", true);
            xhr1.onload = () => {
                if (xhr1.readyState === XMLHttpRequest.DONE) {
                    if (xhr1.status === 200) {
                        let respo = JSON.parse(xhr1.response);
                        console.log(respo);
                        document.getElementById('taskcategory').value = "";





                    }
                }
            }

            let formData = new FormData(form2);
            xhr1.send(formData);

            setTimeout(() => {
                pophandler();


            }, 500);

        }
    }


   
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>