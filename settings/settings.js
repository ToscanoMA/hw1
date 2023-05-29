function onDashClick(event){
    const click = event.currentTarget;
    const state = click.getAttribute("class");
    const id = click.getAttribute("rif_id");
    let endpoint = "../api/setValue.php?field=see_dashboard&id="+id+"&value=";

    if(state === 'on') {
        endpoint = endpoint+"0";
        click.classList.remove('on');
        click.classList.add('off');
        click.textContent ="0";
    }
    else {
        endpoint = endpoint+"1";
        click.classList.remove('off');
        click.classList.add('on');
        click.textContent ="1";
    }
    console.log(endpoint);

    fetch(endpoint);

}

function onHistClick(event){
    const click = event.currentTarget;
    const state = click.getAttribute("class");
    const id = click.getAttribute("rif_id");
    let endpoint = "../api/setValue.php?field=store_old&id="+id+"&value=";

    if(state === 'on') {
        endpoint = endpoint+"0";
        click.classList.remove('on');
        click.classList.add('off');
        click.textContent ="0";
    }
    else {
        endpoint = endpoint+"1";
        click.classList.remove('off');
        click.classList.add('on');
        click.textContent ="1";
    }
    console.log(endpoint);

    fetch(endpoint);
}

function onResponse(response){
    return response.json();
};

function onEntityJSON(json){
    console.log(json);
    const table_container = document.querySelector('table');
    
    for (let cont in json) {
        const tr = document.createElement('tr');
        const entity = document.createElement('td');
        const dash = document.createElement('td');
        const history = document.createElement('td');
        const butt_dash = document.createElement('button');
        const butt_history = document.createElement('button');

        entity.textContent = json[cont].alias;
        butt_dash.setAttribute("rif_id", json[cont].id);
        butt_dash.textContent = json[cont].see_dashboard;
        if(json[cont].see_dashboard === '0') butt_dash.classList.add('off');
        else butt_dash.classList.add('on');
        butt_history.setAttribute("rif_id", json[cont].id);
        butt_history.textContent = json[cont].store_old;
        if(json[cont].store_old === '0') butt_history.classList.add('off');
        else butt_history.classList.add('on');

        dash.appendChild(butt_dash);
        history.appendChild(butt_history);

        tr.appendChild(entity);
        tr.appendChild(dash);
        tr.appendChild(history);
        
        table_container.appendChild(tr);

        butt_dash.addEventListener('click', onDashClick);
        butt_history.addEventListener('click', onHistClick);

    }
  }

fetch("../api/getEntity.php").then(onResponse).then(onEntityJSON);