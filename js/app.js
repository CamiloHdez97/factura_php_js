document.querySelector("#addItem").addEventListener("click",(e)=>{

    let tbody = document.querySelector('#addItemtbody');
    let tr = document.createElement('tr');
    tr.innerHTML = /* html */`
        <tr>
            <th scope="row">1</th>   
            <td>
                <input required="" type="text" name="factura" class="input">
            </td>            
            <td>                        
                <input required="" type="text" name="factura" class="input">
            </td>
            <td>                       
                <input required="" type="text" name="factura" class="input">
            </td>
            <td>                       
                <input required="" type="text" name="factura" class="input">
            </td>
            <td>                       
                <a name="" id="" class="btn btn-success" href="#" role="button">+</a>
                <a name="" id="" class="btn btn-danger" href="#" role="button">-</a>
            </td>
        </tr>
    `;

    tbody.appendChild(tr);

    console.log('entra');
    e.preventDefault();
    e.stopPropagation();

})

//var myModal = document.querySelector('.mymodal')
//var myInput = document.querySelector('.boton')

//myModal.addEventListener('shown.bs.modal', function () {
//  myInput.focus()
//})


