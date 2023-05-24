document.querySelector("#addItem").addEventListener("click",(e)=>{

    let tbody = document.querySelector('#addItemtbody');

    tbody.innerHTML = /* html */`
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
    
    e.preventDefault();
    e.stopPropagation();

})