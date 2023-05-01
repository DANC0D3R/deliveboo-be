@extends('layouts.admin')

@section('content')
  <h1>Ordini</h1>

  <canvas id="myChart"></canvas>

  
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script type="text/javascript">

    
    let orders =  {{ Js::from($order) }}; //prendo la tabella orders e la salvo in una variabile

    let newOrder = []; //inizializzo un array, mi servirà per raggruppare i dati con lo stesso mese

    for (let i = 0; i < orders.length; i++) {
      const newCreated = orders[i].created_at.slice(0, 7); //formatto il created at
      let dk = 'date_key';
      orders[i][dk] = newCreated; //ogni ordine, alla key date_key, avrà la data formattata
      const {total_price, date_key} = orders[i]; //salvo i dati che mi servono in due variabiili
      let formattedOrder = {}; //inizializzo il mio oggetto e lo riempio con le keys che mi servono
      formattedOrder['price'] = parseFloat(total_price);
      formattedOrder['month'] = date_key;

      newOrder.push(formattedOrder); //pusho l'oggetto nell'array
    }

    for (let i = 1; i < newOrder.length; i++) {
      let check = newOrder[i].month; //salvo il valore di month in una variabile di controllo

      for (let j = 0; j < i; j++) {
        if (newOrder[j].month == check) {
          newOrder[i].price += newOrder[j].price; //se il mese è uguale, gli cambio il valore e sommo i prezzi
          newOrder[j].month = 'double';
        }
      }
    }

    let finalArray = []; //inizializzo l'array finale

    for(let i = 0; i < newOrder.length; i++) {
      if (newOrder[i].month != 'double') { //quando il valore di month è diverso da quello modificato, faccio una copia del dato e lo pusho nell'array finale
        let singleOrder = newOrder[i];
        finalArray.push(singleOrder);
      }
    }
    
    (async function() {
        const data = finalArray; //dati presi dall'array finale
      
        new Chart(
          document.getElementById('myChart'),
          {
            type: 'bar',
            data: {
              labels: data.map(row => row.month),
              datasets: [
                {
                  label: 'Incassi per mese in € ',
                  data: data.map(row => row.price)
                }
              ]
            }
          }
        );
      })();
  </script>
@endsection