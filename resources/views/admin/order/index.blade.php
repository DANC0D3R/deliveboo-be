@extends('layouts.admin')

@section('content')
  <h1>Ordini</h1>

  <canvas id="myChart"></canvas>

  
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script type="text/javascript">

    
    let orders =  {{ Js::from($order) }};

    (async function() {
        const data = orders;
      
        new Chart(
          document.getElementById('myChart'),
          {
            type: 'bar',
            data: {
              labels: data.map(row => row.created_at),
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