@component('mail::message')
Hello!

@component('mail::button',['url' => ''])
Nhấp vào đây	
@endcomponent
 
Day la san pham ban vua mua
<table border="1" >

    <tr>
       <th>id</th>
       <th>Name</th>
       <th>price</th>
    </tr>
    @foreach($data['items'] as $item)
        <tr>
   	        <td>{{ $item['id'] }}</td>
            <td>{{ $item['name'] }}</td>
            <td>{{ $item['pice'] }}</td>
        </tr>
    @endforeach
</table>

Tong don hang la: {{$data['totalCost']}}

 Thanks!
 {{ config('app.name') }}
 @endcomponent