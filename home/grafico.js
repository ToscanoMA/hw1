
function onAPIres(json){
  console.log(json);

  const temperature = json.current.temp_c;
  const condition = json.current.condition.text;
  const iconUrl = `https://${json.current.condition.icon}`;//.replace('//', 'https://');

  // Aggiorniamo la pagina con le informazioni raccolte
  document.getElementById('temperature').textContent = `${temperature}°C`;
  document.getElementById('condition').textContent = condition;
  document.getElementById('icon').setAttribute('src', iconUrl);
}

function onModalClick(event){
  event.preventDefault;
  event.currentTarget.classList.remove("modal");
  event.currentTarget.classList.add("hidden");
  event.currentTarget.innerHTML = '';
  console.log("chiusura modale");
}

function ChartCreate(data){

  const modal_div = document.querySelector('#modal-content');
  console.log(modal_div);
  modal_div.innerHTML = '';
  modal_div.classList.remove("hidden");
  modal_div.classList.add('modal');
  modal_div.innerHTML = '';
  const chart_card = document.createElement('div');
  chart_card.classList.add('modal-card');
  const ctx = document.createElement('canvas');
  ctx.classList.add('myChart');
  ctx.setAttribute("width", "500%");
  ctx.setAttribute("height", "400%");
    
  chart_card.appendChild(ctx);
  modal_div.appendChild(chart_card);
  modal_div.addEventListener('click', onModalClick);

  myChart = new Chart(ctx, {
    type: 'line',
    data: data,
    options: {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: false
            }
          }]
        }
      }
    });
}


function onJSON(json){
  console.log(json);

  let reference = [];
  let datas = [];
    

  for (let cont in json) {
    reference.push (cont);
    datas.push(json[cont]);
  }
    
  var chart_data =null;
  // creo il json che devo passare alla funzione di creazione del grafico
  var chart_data = {
    labels: reference,
    datasets: [{
      data: datas,
      backgroundColor: 'rgba(54, 162, 235, 0.2)',
      borderColor: 'rgba(54, 162, 235, 1)',
      borderWidth: 1
    }]
  };

   ChartCreate(chart_data);
};


function onResponse(response){
  return response.json();
};

function onCardClick(event){
  event.preventDefault();
  const check = event.currentTarget;   //ricavo l'elemento cliccato

  const input=check.dataset.choice; //memorizzo id entita selezionata
  
  console.log(input);
  fetch("../api/getChart.php?read_id="+input).then(onResponse).then(onJSON);
}

function AlertonClick(event){
  event.preventDefault();

  alert("ATTENZIONE! Per visualizzare il grafico dell'entità devi abilitare il flag dello storico dalle impostazioni!")
}

function onEntityJSON(json){
  console.log(json);
  const card_container = document.querySelector('#container');
  
  for (let cont in json) {
    if(json[cont].see_dashboard === '1'){
      
      const div = document.createElement('div');
      div.classList.add("card");
      div.setAttribute("data-choice", json[cont].id);
      const val = document.createElement('h2');
      val.innerHTML = json[cont].alias;
      const text = document.createElement('h2');
      text.innerHTML = json[cont].value+ " " +json[cont].uom;

      div.appendChild(val);
      div.appendChild(text);

      card_container.appendChild(div);
      
      if(json[cont].store_old === '1') div.addEventListener('click', onCardClick);
      else div.addEventListener('click', AlertonClick);
    }
  }
}

// Effettuiamo la richiesta all'API
fetch("../api/getWeather.php").then(onResponse).then(onAPIres); 
fetch("../api/getEntity.php").then(onResponse).then(onEntityJSON);