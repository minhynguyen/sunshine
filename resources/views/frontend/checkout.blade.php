@extends('frontend.layout.app')

@section('content')
	<div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>Checkout - Order review</li>
                    </ul>
                </div>
                
                <ngcart-cart template-url="{{asset('vendor/ngCart/template/ngCart/cart.html')}}"></ngcart-cart>

                <!-- /.col-md-3 -->
                <ngcart-checkout template-url="{{asset('vendor/ngCart/template/ngCart/checkout.html')}}" service="http" settings="{url:'/sunshine/public/checkout', _token: '{{ csrf_token() }}'}">Goi du lieu</ngcart-checkout>

            </div>
            <!-- /.container -->
        </div>

@endsection
@section('script')
	<script>
        var myApp = angular.module('sunshine',['ngCart']);
            myApp.controller ('maincontroller', ['$scope', '$http', 'ngCart', function($scope, $http, ngCart) {
                    // ngCart.setTaxRate(7.5);
                    // ngCart.setShipping(1.0); 
                    ngCart._token = '{{ csrf_token() }}';
                    console.log(ngCart._token);

                    // $scope.submitCart = function(){
                    //     alert('bang hams');
                    //     $http({
                    //         method: 'POST',
                    //         url: '/checkoutJson',
                    //         headers: {'Content-Type': 'application/json'},
                    //         data: ngCart.toObject()
                    //     })
                    //     then(function(response){
                    //         alert('thanh cong');
                    //         console.log('Du lieu  duoc lay ve ne');
                    //         console.log('response.data');
                    //     }, function(error){
                    //         alert('that bai');
                    //         console.log(error);
                    //     }
                    // }
            }]);
    </script>
@endsection