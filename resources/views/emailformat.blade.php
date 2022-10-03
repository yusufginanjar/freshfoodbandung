<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
    <style>
        body{
            background-color: rgb(255, 243, 243);
            color: rgb(18, 21, 62);
            font-family: Arial, Helvetica, sans-serif;
        }

        .container{
            margin-left: 50px;
            margin-right: 50px;
            margin-top: 40px;
            justify-content: center;
            padding: 20px;
            /* background-color: #efd8d8; */
            border-radius: 10px;
        }

        table {
            margin: 30px 0;
            font-family: arial, sans-serif;
            border-collapse: collapse;
            max-width: 400px;
        }
        
        td, th {
            border: 1px solid #b57a79;
            text-align: left;
            padding: 8px;
        }
        
        tr:nth-child(even) {
            /* background-color: #e59f9e; */
        }
        </style>
</head>
<body>
    <div class="container">



        <h2>Order Details:</h2>

        <table  class="table table-sm">
            <thead>
            <tr>
              <th>Product</th>
              <th>Quantity</th>
              <th>Price</th>
              <th>Sub-total</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($details['carts']->detail as $item)
            <tr>
              <td>{{ $item->product->name }}</td>
              <td>{{ $item->qty }}</td>
              <td>IDR {{ number_format($item->price) }}</td>
              <td>IDR {{ number_format($item->subtotal) }}</td>
            </tr>
            @endforeach
        </tbody>
          </table>
          <h3>Total: IDR {{ number_format($details['carts']->total, 2) }}</h3>

        <table class="table table-sm mt-4">
            <tbody>
              <tr>
                <td>Invoice No</td>
                {{-- <td>FFB-0{{ $order->cart_id }}</td> --}}
                <td>FFB-0{{ $details['cart_id'] }}</td>
              </tr>
              <tr>
                <td>Name</td>
                <td>{{ $details['first_name'] . " " . $details['last_name'] }}</td>
                {{-- <td>{{ $order->first_name . " " . $order->last_name }}</td> --}}
              </tr>
              <tr>
                <td>Company</td>
                <td>{{ $details['company'] }}</td>
                {{-- <td>{{ $order->company }}</td> --}}
              </tr>
              <tr>
                <td>Address</td>
                <td>{{ $details['address'] . ", " . $details['province'] . ", " . $details['country'] . ", " .$details['postcode'] }}</td>
                {{-- <td>{{ $order->address . ", " . $order->province . ", " . $order->country . ", " .$order->postcode }}</td> --}}
              </tr>
              <tr>
                <td>Whatsapp</td>
                <td>{{ $details['whatsapp'] }}</td>
                {{-- <td>{{ $order->whatsapp }}</td> --}}
              </tr>
              <tr>
                <td>Email</td>
                <td>{{ $details['email'] }}</td>
                {{-- <td>{{ $order->email }}</td> --}}
              </tr>
              <tr>
                <td>Note</td>
                <td>{{ $details['notes'] }}</td>
                {{-- <td>{{ $order->notes }}</td> --}}
              </tr>
              {{-- <tr>
                <td>Date/Time</td>
                <td>{{ $details['created_at'] }}</td> --}}
                {{-- <td>{{ $order->created_at }}</td> --}}
              {{-- </tr> --}}
            </tbody>
          </table>
          
        {{-- <p>Order Number: FFB-0{{ $details['carts']->id }}</p>
        <p>Name: {{ $details['first_name'] }} {{ $details['last_name'] }}</p>
        <p>Email: {{ $details['email'] }}</p>
        <p>WhatsApp: {{ $details['whatsapp'] }}</p>
        <p>Address: {{ $details['address'] }}, {{ $details['province'] }}, {{ $details['country'] }}, {{ $details['postcode'] }}</p>
    
        <table>
            <tr>
              <th>Product</th>
              <th>Quantity</th>
              <th>Price</th>
            </tr>
            @foreach ($details['carts']->detail as $item)
            <tr>
              <td>{{ $item->product->name }}</td>
              <td>{{ $item->qty }}</td>
              <td>IDR {{ number_format($item->price) }}</td>
            </tr>
            @endforeach
          </table>
          <h3>Total: IDR {{ number_format($details['carts']->total, 2) }}</h3> --}}
          <p style="max-width: 400px;">Prices above do not include shipping cost. We will inform you the shipping costs via WhatsApp or this email address. Please Wait.</p>
    </div>

</body>
</html>