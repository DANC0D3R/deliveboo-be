@extends('layouts.admin')

@section('content')
  <h1>Ordini</h1>

  <canvas id="myChart"></canvas>

  
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script type="text/javascript">

    
    let orders =  {{ Js::from($order) }};

    for (let i = 0; i < orders.length; i++) {
      const newCreated = orders[i].created_at.slice(0, 7);
      const date_key = 'date_key';
      orders[i][date_key] = newCreated
    }
    console.log('orders', orders);     

    (async function() {
        const data = orders;
      
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