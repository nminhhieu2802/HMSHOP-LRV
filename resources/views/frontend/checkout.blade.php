@extends('layouts.front')

@section('title')
    Checkout
@endsection

@section('content')

<div class="py-3 mb-4 shadow-sm bg-dark text-white border-top">
    <div class="container">
        <h6 class="mb-0">
            <a href="{{ url('/') }}" class="text-white">
                Home
            </a> /
            <a href="{{ url('cart') }}" class="text-white">
                Cart
            </a> /
            <a href="{{ url('checkout') }}" class="text-white">
                Checkout
            </a>
        </h6>
    </div>
</div>
    <div class="container mt-3">
        <form action="{{ url('place-order') }}" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-body">
                            @php
                                $total = 0;
                            @endphp
                            <h6>Basic Details</h6>
                            <hr>
                            <div class="row checkout-form">
                                <div class="col-md-6 mt-3">
                                    <label for="">First Name</label>
                                    <input type="text" class="form-control firstname" name="fname" value="{{ Auth::user()->name }}" placeholder="Enter First Name">
                                    <span id="fname_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Last Name</label>
                                    <input type="text" class="form-control lastname" name="lname" value="{{ Auth::user()->lname }}" placeholder="Enter Last Name">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control email" name="email" value="{{ Auth::user()->email }}" placeholder="Enter Email">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Phone Number</label>
                                    <input type="text" class="form-control phone" name="phone" value="{{ Auth::user()->phone }}" placeholder="Enter Phone Number">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Address 1</label>
                                    <input type="text" class="form-control address1" name="address1" value="{{ Auth::user()->address1 }}" placeholder="Enter Address 1">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Address 2</label>
                                    <input type="text" class="form-control address2" name="address2" value="{{ Auth::user()->address2 }}" placeholder="Enter Address 2">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">City</label>
                                    <input type="text" class="form-control city" name="city" value="{{ Auth::user()->city }}" placeholder="Enter City">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">State</label>
                                    <input type="text" class="form-control state" name="state" value="{{ Auth::user()->state }}" placeholder="Enter State">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Country</label>
                                    <input type="text" class="form-control country" name="country" value="{{ Auth::user()->country }}" placeholder="Enter Country">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Pin Code</label>
                                    <input type="text" class="form-control pincode" name="pincode" value="{{ Auth::user()->pincode }}" placeholder="Enter Pin Code">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <h6>Order Details</h6>
                            <hr>
                            <table class="table table-striped table-hover table align-middle mb-0 table-bordered">
                                <thead>
                                    <tr class="table-dark">
                                        <td>Name</td>
                                        <td>Quantity</td>
                                        <td>Price</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $total = 0;
                                    @endphp
                                    @foreach ($cartitems as $item)
                                    <tr>
                                        <td>{{ $item->products->name }}</td>
                                        <td>{{ $item->prod_qty }}</td>
                                        <td>{{ number_format($item->products->selling_price * $item->prod_qty) }} VNĐ</td>
                                    </tr>
                                    @php
                                        $total += $item->products->selling_price * $item->prod_qty;
                                    @endphp    
                                    @endforeach
                                </tbody>
                            </table>
                            <br>
                            <h6 class="px-2">Grand Total : <span class="float-end">{{ number_format($total) }} VNĐ</span></h6>
                            <hr>
                            <button class="btn btn-dark rounded-pill w-100">Place Order | COD</button>
                            <div id="paypal-button-container" class="mt-3"></div>
                            @php
                                $mtotal = round($total/23000);
                            @endphp
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
<script src="https://www.paypal.com/sdk/js?client-id=AaM5OgRsAvg3WFXUyAlBpmSoV5h0kv0qMg0vTyiRQ_nf3Z2grvmn8fTvAIpdeJG7c_ugPCdT_VpiK_HP&currency=USD"></script>
<script>

    paypal.Buttons({
      // Sets up the transaction when a payment button is clicked
      createOrder: (data, actions) => {
        return actions.order.create({
          purchase_units: [{
            amount: {
              value: '{{ $mtotal }}' // Can also reference a variable or function
          
            }
          }]
        });
      },
      // Finalize the transaction after payer approval
      onApprove: (data, actions) => {
        return actions.order.capture().then(function(orderData) {
          // Successful capture! For dev/demo purposes:
            var firstname = $('.firstname').val();
            var lastname = $('.lastname').val();
            var email = $('.email').val();
            var phone = $('.phone').val();
            var address1 = $('.address1').val();
            var address2 = $('.address2').val();
            var city = $('.city').val();
            var state = $('.state').val();
            var country = $('.country').val();
            var pincode = $('.pincode').val();
                $.ajaxSetup({
                            headers:{
                                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                            }
                        });
                $.ajax({
                    method:"POST",
                    url:"/place-order",
                    data:{
                    'fname' : firstname,
                    'lname' : lastname,
                    'email' : email,
                    'phone' : phone,
                    'address1' : address1,
                    'address2' : address2,
                    'city' : city,
                    'state' : state,
                    'country' : country,
                    'pincode' : pincode,
                    'payment_mode' : "Paid by Paypal",
                    'payment_id':orderData.id,
                    },
                    success: function (response){
                        swal(response.status)
                        .then((value) => {
                            window.location.href ="{{ ('/my-orders') }}";
                        });
                    }
                });
            });
        }
    }).render('#paypal-button-container');
</script>
@endsection