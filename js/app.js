// var myModal = document.querySelector('.mymodal')
// var myInput = document.querySelector('.boton')

// myModal.addEventListener('shown.bs.modal', function () {
//   myInput.focus()
// })




let num=2;
document.querySelector("#addItem").addEventListener("click",(e)=>{
    num=num++
    let tbody = document.querySelector('#addItemtbody');
    let tr = document.createElement('tr');
    tr.innerHTML = /* html */`
        <tr>
            <th scope="row" id="${num}">${num}</th>   
            <td>
                <input required="" type="text" name="${num}[]" class="input">
            </td>            
            <td>                        
                <input required="" type="text" name="${num}[]" class="input">
            </td>
            <td>                       
                <input required="" type="text" name="${num}[]" class="input">
            </td>
            <td>                       
                <input required="" type="text" name="${num}[]" class="input">
            </td>
            <td>                       
                <a name="" id="addItem" class="btn btn-success" href="#" role="button">+</a>
                <a name="" id="" class="btn btn-danger" href="#" role="button">-</a>
            </td>
        </tr>
    `;

    tbody.appendChild(tr);

    console.log('entra');
    e.preventDefault();
    e.stopPropagation();

})