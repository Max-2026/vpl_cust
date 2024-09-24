@extends('master-layout')
@section('title', 'My Numbers')

@section('content')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
    $('#viewCardButton').click(function() {
        $('#cardModal').removeClass('hidden');
        $('#confirm-modal-overlay').removeClass('bg-opacity-0').addClass('bg-opacity-75');
        $('#confirm-modal').removeClass('scale-0');
    });

    $('#confirm-modal-overlay, #confirm-modal svg').click(function() {
        $('#cardModal').addClass('hidden');
        $('#confirm-modal-overlay').removeClass('bg-opacity-75').addClass('bg-opacity-0');
        $('#confirm-modal').addClass('scale-0');
        $('#payment-form').show(); // Show payment-form when modal closes
        $('#add-payment-form').hide(); // Hide new payment form when modal closes
    });
});
</script>

<div class="w-full my-8 p-6 rounded-md shadow bg-white">
    <div class="flex justify-between items-center">
        <h3 class="px-1 text-lg leading-6 font-medium text-gray-900">Billings</h3>
        <span class="text-sm mr-3 font-medium text-gray-500">ID: 1234445</span>
    </div>
    <form action="" method="GET">
        <div class="mt-4 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-12">
            <div class="sm:col-span-4">
                <label for="bill-type-1" class="px-1 block text-sm font-medium text-gray-700">Bill Type</label>
                <div class="mt-1">
                    <select id="bill-type-1" name="bill-type-1"
                        class="shadow-sm focus:ring-cyan-600 focus:border-cyan-600 block w-full sm:text-sm border-gray-300 rounded-md">
                        <option selected value="1234">All Bills</option>
                        <option value="1">All Payments</option>
                        <option value="1234">All Bills Of My Number</option>
                    </select>
                </div>
            </div>

            <div class="sm:col-span-4">
                <label for="bill-type-2" class="block text-sm font-medium text-gray-700">Numbers</label>
                <div class="mt-1">
                    <select id="bill-type-2" name="bills"
                        class="shadow-sm focus:ring-cyan-600 focus:border-cyan-600 block w-full sm:text-sm border-gray-300 rounded-md">
                        <option selected value="all">All Numbers</option>
                        @foreach($numbers as $number)
                        <option value="{{ $number->number }}">{{ $number->number }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="sm:col-span-4">
                <label for="bill-type-3" class="block text-sm font-medium text-gray-700">Date</label>
                <div class="mt-1">
                    <input type="date"
                        class="shadow-sm focus:ring-cyan-600 focus:border-cyan-600 block w-full sm:text-sm border-gray-300 rounded-md"
                        name="" id="">
                </div>
            </div>

            <div class="flex justify-between sm:col-span-12">
                <button id="viewCardButton" type="button"
                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-700 focus:outline-none focus:ring-0">View
                    Card</button>
                <button type="submit"
                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-700 focus:outline-none focus:ring-0">Search</button>
            </div>
        </div>
    </form>
</div>

<div id="cardModal"
    class="fixed overflow-y-auto overflow-x-hidden sm:overflow-hidden z-10 inset-0 flex justify-center sm:items-center hidden"
    aria-labelledby="modal-title" role="dialog" aria-modal="true">

    <div id="confirm-modal-overlay"
        class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity duration-1000 ease-in bg-opacity-0"
        aria-hidden="true"></div>

    <div id="confirm-modal"
        class="absolute my-8 bg-white transition ease-in rounded-md p-4 z-10 w-11/12 max-w-lg sm:max-w-2xl lg:max-w-3xl scale-0">

        <div class="w-full mt-2 px-2">
            <div class="flex justify-between items-center">
                <h3 class="text-lg ml-1 leading-6 font-medium text-gray-700 text-left">
                    Card Details
                </h3>
            </div>
            <form id="payment-form"
                class="my-5 border rounded-md sm:overflow-y-auto sm:max-h-56 2xl:max-h-80 flex flex-col gap-y-4">
                @csrf
                <fieldset id="cards-list">
                    <legend class="sr-only">Payment methods</legend>
                    <div class="relative bg-white rounded-md divide-y -space-y-px">

                        @foreach ($test_Card->payment_methods ?? [] as $method)

                        <label
                            class="relative p-4 flex items-center justify-between flex-wrap gap-y-4 cursor-pointer md:pl-4 md:pr-6 focus:outline-none">
                            <!-- <button type="button" onclick="showAddPaymentMethodForm()" name="edit_pricing_plan" value="{{ $method->id }}" class="h-8 w-20 bg-cyan-500 text-white border-gray-300 rounded focus:ring-gray-900">Edit</button> -->
                            <div class="flex items-center gap-x-1 sm:gap-x-4 px-1 sm:p-0">
                                <svg class="h-6 w-auto" viewBox="0 0 36 24" aria-hidden="true">
                                    <rect width="36" height="24" fill="#224DBA" rx="4" />
                                    <path fill="#fff"
                                        d="M10.925 15.673H8.874l-1.538-6c-.073-.276-.228-.52-.456-.635A6.575 6.575 0 005 8.403v-.231h3.304c.456 0 .798.347.855.75l.798 4.328 2.05-5.078h1.994l-3.076 7.5zm4.216 0h-1.937L14.8 8.172h1.937l-1.595 7.5zm4.101-5.422c.057-.404.399-.635.798-.635a3.54 3.54 0 011.88.346l.342-1.615A4.808 4.808 0 0020.496 8c-1.88 0-3.248 1.039-3.248 2.481 0 1.097.969 1.673 1.653 2.02.74.346 1.025.577.968.923 0 .519-.57.75-1.139.75a4.795 4.795 0 01-1.994-.462l-.342 1.616a5.48 5.48 0 002.108.404c2.108.057 3.418-.981 3.418-2.539 0-1.962-2.678-2.077-2.678-2.942zm9.457 5.422L27.16 8.172h-1.652a.858.858 0 00-.798.577l-2.848 6.924h1.994l.398-1.096h2.45l.228 1.096h1.766zm-2.905-5.482l.57 2.827h-1.596l1.026-2.827z" />
                                </svg>
                                <p id="pricing-plans-0-description-0"
                                    class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-center">
                                    <span class="font-medium">**** {{ $method->last_digits }}</span>
                                </p>
                                <p id="pricing-plans-0-description-1"
                                    class="ml-2 sm:ml-6 sm:pl-1 text-sm md:ml-0 md:pl-0 md:text-right">
                                    Expires {{ $method->expiry_month }} / {{ substr($method->expiry_year, 2) }}
                                </p>
                            </div>
                            <p class="text-xs ml-auto sm:ml-0 sm:text-sm">
                                Last updated on {{ $method->updated_at->format('d M Y') }}
                            </p>
                        </label>
                        @endforeach
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>


<div class="w-full my-8 p-6 rounded-md shadow bg-white">
    <div>
        <h3 class="text-lg leading-6 font-medium text-gray-900 ml-1 mb-1.25">Account Details</h3>
    </div>
    <div class="mt-4 flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                @foreach(['Invoice', 'Date', 'Description', 'Debit','Credit', 'Running Balance', 'Paid']
                                as $header)
                                <th scope="col"
                                    class="px-5 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">
                                    {{ $header }}
                                </th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                          <?php
                          $total_amount = 0;
                          ?>
                            @foreach($user->invoices as $invoices)
                            <?php 
                             $total_amount += $invoices->amount; 
                            ?>
                            <tr>
                                <td class="px-5 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    {{ $invoices->id }}</td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $invoices->created_at->format('d-m-Y') }}</td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500">{{ $invoices->summary }}
                                </td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500">${{ $invoices->amount ?? 0}}.00</td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500">$0.00</td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500">
                                    ${{ $user->balance ?? 0}}.00</td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500">-</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr style="border-bottom: 1px solid #e5e7eb;">
                                <td colspan="3" class="px-5 py-4 whitespace-nowrap text-sm text-gray-500 text-right">
                                </td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500"><b>${{$total_amount }}.00</b></td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500"><b>$0.00</b></td>
                            </tr>
                            <tr style="border-bottom: 1px solid #e5e7eb;">
                                <td colspan="3" class="px-5 py-4 whitespace-nowrap text-sm text-gray-500 text-right">
                                    <b>Overall Total</b></td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500"><b>${{$total_amount }}.00</b></td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500"><b>$0.00</b></td>
                            </tr>
                            <!-- <tr style="border-bottom: 1px solid #e5e7eb;">
                                <td colspan="5" class="px-7 py-4 whitespace-nowrap text-sm font-medium text-gray-500 text-right"><b>Balance: $50</b></td>
                            </tr> -->
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection