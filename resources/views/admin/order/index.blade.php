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
      orders[i][dk] = newCreated //ogni ordine, alla key date_key, avrà la data formattata
      const {total_price, date_key} = orders[i]; //salvo i dati che mi servono in due variabiili
      let formattedOrder = {}; //inizializzo il mio oggetto e lo riempio con le keys che mi servono
      formattedOrder['price'] = total_price;
      formattedOrder['month'] = date_key;

      newOrder.push(formattedOrder); //pusho l'oggetto nell'array
    }
    console.log('neworder', newOrder);
    console.log('orders', orders);


    

    (async function() {
        const data = orders; //per ora prendo i dati per il grafico da questa variabile, poi vorrei raggrupare i dati per mese
      
        new Chart(
          document.getElementById('myChart'),
          {
            type: 'bar',
            data: {
              labels: data.map(row => row.date_key),
              datasets: [
                {
                  label: 'Incassi per mese',
                  data: data.map(row => row.total_price)
                }
              ]
            }
          }
        );
      })();
  </script>
@endsection