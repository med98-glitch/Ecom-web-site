@component('mail::message')
Details de votre order 
Bonjour M. {{$name}} {{$lastName}}
<hr>
<br><br><br>
<div class="container" style="text-align: center">
<table class="table table-striped" style="text-align: center">
    <thead>
      <tr>
        <th scope="col">nom du produit</th>
        <th scope="col"></th>
        <th scope="col">Prix</th>
      </tr>
    </thead>
    <tbody class="text-center">
        @foreach($product as $row)
      <tr class="text-center">
        <td class="text-center"> {{$row->name}} <strong> x {{$row->qte}}</strong></td>
        <td></td>
        <td class="text-center"> {{$row->pricebyone * $row->qte}} DH </td>
      </tr>
       @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td>Total avec tax</td>
            <td></td>
            <td style="color: red;"><strong>{{$total}} DH</strong></td>
          </tr>
    </tfoot>
  </table>
</div>



@component('mail::button', ['url' => 'http://127.0.0.1:8000/'])
plus d'articles 
@endcomponent
<p style="text-align: center">Adresse du laivraison:{{$adresse}}</p>
<p style="text-align: center">Numero du client presonnel:{{$phone}}</p>
Bienvenue sur chamal info,<br>
@endcomponent

