@extends('layout')
@section('title', 'My Cart')

@section('my_cart')

    <style>
        .table thead th {
            font-size: 10px;
            font-weight: 900;
        }
    </style>
    <div class="container shadow rounded p-5 mt-5">
        <h2 style="font-weight: 500;">My Cart</h2>
        <hr>

        <form action="{{ route('checkout') }}" method="POST"> <!-- Form for checkout -->
            @csrf

            <table class="table">
                <thead style="color:black;background-color:#F8F8F8;" class="text-capitalize">
                    <tr class="text-center">
                        <th scope="col">Phone No</th>
                        <th scope="col">Area</th>
                        <th scope="col">Country</th>
                        <th scope="col">Billing Type</th>
                        <th scope="col">Setup Charge</th>
                        <th scope="col">Monthly Charge</th>
                        <th scope="col">Annual Charge</th>
                        <th scope="col">Talk Time</th>
                        <th scope="col">User Documents</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr class="text-center">
                            <td>{{ $item->number }}</td>
                            <td>{{ $item->area }}</td>
                            <td>{{ $item->country }}</td>
                            <td>{{ $item->billing_type }}</td>
                            <td>{{ $item->setup_cost }}</td>
                            <td>
                                @if ($item->billing_type == 'Monthly')
                                    {{ $item->monthly_charges }}
                                @else
                                    0
                                @endif
                            </td>
                            <td>
                                @if ($item->billing_type == 'Monthly')
                                    0
                                @else
                                    {{ $item->monthly_charges * 12 }}
                                @endif
                            </td>
                            <td>{{ $item->talk_time }}</td>
                            <td>Pending</td>
                            <td>
                                <a href="{{ url('/unreserve_number', ['number' => $item->number]) }}" type="button"
                                    class="btn btn-default" style="color:white;background-color:#0088cc;">Remove</a>
                            </td>
                        </tr>
                    @endforeach

                    <tr class="text-center">
                        <td><strong>Total</strong></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>{{ $data->sum('setup_cost') }}</td>
                        <td>{{ $data->where('billing_type', 'Monthly')->sum('monthly_charges') }}</td>
                        <td>{{ $data->where('billing_type', 'Annually')->sum('monthly_charges') * 12 }}</td>
                        <td>{{ $data->sum('talk_time') }}</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

            <hr>

            <div class="container p-3">
                <div class="row">
                    <div class="col-md-6 text-left">
                        <h5 class="font-weight-bolder">Grand Total</h5>
                        <h5 class="font-weight-bolder">Available funds in your account</h5>
                        <h5 class="font-weight-bolder">Total Amount To Pay</h5>
                        <p class="text-muted">You will not be able to buy any number that requires documents approval. <br>
                            The Number will be added to your account automatically once your provided documents are
                            approved.
                            <br>
                            If the document does not get approval, you will be notified by an email and it will not be added
                            to
                            your account.
                        </p>
                    </div>
                    <div class="col-md-6 text-right">
                        <h5 class="font-weight-bolder">$ <td>
                                {{ $data->sum('setup_cost') + $data->sum('monthly_charges') + $data->sum('annual_charges') + $data->sum('talk_time') + $data->sum('monthly_plan') + $data->sum('plan_setup') }}
                            </td>
                        </h5>
                        <h5 class="font-weight-bolder">$136.34</h5>
                        <h5 class="font-weight-bolder">$
                            {{ $data->sum('setup_cost') + $data->sum('monthly_charges') + $data->sum('annual_charges') + $data->sum('talk_time') + $data->sum('monthly_plan') + $data->sum('plan_setup') }}
                        </h5>
                    </div>
                </div>

                <button type="submit" class="btn btn-default"
                    style="color:white;background-color:#0088cc;display:flex;float:right;">Checkout</button>
                <!-- Checkout button -->
            </div>
        </form> <!-- End of form -->

    </div>

@endsection
