@extends('layout')
@section('title', 'My Cart')

@section('content')

    <div class="container shadow rounded p-5 mt-5">
        <h2 style="font-weight: 500;">My Cart</h2>
        <hr>

        <form action="{{ route('checkout') }}" method="POST">
            @csrf

            <table class="table">
                <thead>
                    <tr>
                        <th>Phone No</th>
                        <th>Area</th>
                        <th>Country</th>
                        <th>Billing Type</th>
                        <th>Setup Charge</th>
                        <th>Monthly Charge</th>
                        <th>Annual Charge</th>
                        <th>Talk Time</th>
                        <th>User Documents</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
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
                                <a href="{{ url('/unreserve_number', ['number' => $item->number]) }}" class="btn btn-default"
                                    style="color:white;background-color:#0088cc;">Remove</a>
                            </td>

                        </tr>
                    @endforeach

                    <tr>
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
                 <input type="hidden" name="phone_numbers" value="{{ json_encode($data) }}">
                    </tr>
                </tbody>
            </table>

            <div class="container p-3">
                <div class="row">
                    <div class="col-md-6 text-left">
                        <h5 class="font-weight-bolder">Total</h5>
                        <h5 class="font-weight-bolder">Available funds in your account</h5>
                        <h5 class="font-weight-bolder">Cart Amount To Pay</h5>
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
                        @php
                            $grandTotal = $data->sum('setup_cost') + $data->where('billing_type', 'Monthly')->sum('monthly_charges') + $data->where('billing_type', 'Annually')->sum('monthly_charges') * 12 + $data->sum('talk_time');
                            $amountToPay = $grandTotal - $user->balance;
                            $amountToPay = $amountToPay > 0 ? $amountToPay : 0;
                        @endphp

                        <h5 class="font-weight-bolder">
                            ${{ $grandTotal }}
                        </h5>
                        <h5 class="font-weight-bolder">
                            ${{ $user->balance }}
                        </h5>
                        <h5 class="font-weight-bolder">
                            ${{ $amountToPay }}
                        </h5>
                    </div>

                    <input type="hidden" name="total" value="{{ $grandTotal }}">

                </div>

                <button type="submit" class="btn btn-default"
                    style="color:white;background-color:#0088cc;display:flex;float:right;">Checkout</button>

            </div>

        </form>
    </div>

@endsection
