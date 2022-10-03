@extends('dashboard.layouts.main')


@section('container')
    <section class="content">
        <div class="container">
            <div class="row my-3">
                <div class="col-md-8">
                    <h5 class="my-3">Detail Order</h5>

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
                        @foreach ($charts->detail as $item)
                        <tr>
                          <td>{{ $item->product->name }}</td>
                          <td>{{ $item->qty }}</td>
                          <td>IDR {{ number_format($item->price) }}</td>
                          <td>IDR {{ number_format($item->subtotal) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                      </table>
                      <h5>Total: IDR {{ number_format($charts->total, 2) }}</h5>

                    <table class="table table-sm mt-4">
                        <tbody>
                          <tr>
                            <td>Invoice No</td>
                            <td>FFB-0{{ $order->cart_id }}</td>
                          </tr>
                          <tr>
                            <td>Name</td>
                            <td>{{ $order->first_name . " " . $order->last_name }}</td>
                          </tr>
                          <tr>
                            <td>Company</td>
                            <td>{{ $order->company }}</td>
                          </tr>
                          <tr>
                            <td>Address</td>
                            <td>{{ $order->address . ", " . $order->province . ", " . $order->country . ", " .$order->postcode }}</td>
                          </tr>
                          <tr>
                            <td>Whatsapp</td>
                            <td>{{ $order->whatsapp }}</td>
                          </tr>
                          <tr>
                            <td>Email</td>
                            <td>{{ $order->email }}</td>
                          </tr>
                          <tr>
                            <td>Note</td>
                            <td>{{ $order->notes }}</td>
                          </tr>
                          <tr>
                            <td>Date/Time</td>
                            <td>{{ $order->created_at }}</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </section>

      
    
@endsection


