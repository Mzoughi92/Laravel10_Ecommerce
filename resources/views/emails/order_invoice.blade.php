@component('mail::message')
<h2 style="text-align: center; color: #333;">Rechnung</h2>
<p> Hallo {{ $order->first_name }},</p>
<p>Vielen Dank für Ihren kürzlichen Einkauf bei <strong>3attar</strong>. Gerne bestätigen wir Ihre Bestelldaten wie folgt:</p>


<h3>Order Details:</h3>
<ul>
    <li>Bestellung Nummer:<b> {{ $order->order_number }}</b></li>
    <li>Bestellung Datum:<b> {{ date('d-m-Y', strtotime($order->created_at) )  }}</b></li>
</ul>


<div class="card-body">
    <table id="example2" class="table table-bordered table-hover">
      <thead>
      <tr>
        <th style="border-bottom: 1px solid #ddd; padding: 8px; text-align: left;" ><center>Artikel</center></th>
        <th style="border-bottom: 1px solid #ddd; padding: 8px; text-align: left;" ><center>Menge</center></th>
        <th style="border-bottom: 1px solid #ddd; padding: 8px; text-align: left;" ><center>Preis</center></th>
      </tr>
      </thead>
      <tbody>
      <tr>
        @foreach ($order->getItem as $item)
        <td style="padding: 8px; border-bottom: 1px solid #ddd;"><center>{{ $item->getProduct->title }}
        <br>
      Farbe: {{ $item->color_name }}
      @if(!empty($item->size_name))
      <br>
      Größe: {{ $item->size_name }}
      <br>
      Größe Betrag: {{ number_format($item->size_amount, 2)  }}€
      @endif
    </center></td>
        <td style="padding: 8px; border-bottom: 1px solid #ddd;"><center>{{ $item->quantity }}</center></td>
        <td style="padding: 8px; border-bottom: 1px solid #ddd;"><center>{{ number_format($item->total_price, 2) }} €</center></td>
      </tr>
      @endforeach
    </tbody>
</table>
</div>

<p>Versandname:<b> {{ $order->getShipping->name }} </b></p>
<p>Versandbetrag:<b> {{ number_format($order->shipping_amount, 2) }} € </b></p>
@if(!empty($order->discount_code))
<p>Rabattcode:<b> {{ $order->discount_code }} </b></p>
<p> Gutschein Betrag:<b> {{ number_format($order->discount_amount, 2)}} € </b></p>
@endif
<p>Gesamtmenge:<b>  {{ number_format($order->total_amount, 2)  }} €</b></p>
<p style="text-transform: capitalize;">Bezahlung Method:<b>  {{ $order->payment_method }}</b></p>
<p>Vielen Dank, dass Sie sich für <strong>E-Commerce</strong> entschieden haben. Wir machen gerne Geschäfte mit Ihnen</p>

Danke,<br>
{{ config('app.name') }}
@endcomponent
