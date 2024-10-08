@extends('master-layout')
@section('title', 'Billing')

@section('content')

<div class="w-full my-8 p-6 rounded-md shadow bg-white">
  <div class="flex justify-between items-center">
    <h3 class="px-1 text-lg leading-6 font-medium text-gray-900">
    Billing & Payments
  </h3>
  </div>
  <form action="" method="GET">
    <div class="mt-4 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-12">
      <div class="sm:col-span-4">
        <label for="bill-type-2" class="block text-sm font-medium text-gray-700">Numbers</label>
        <div class="mt-1">
          <select id="bill-type-2" name="bills" class="shadow-sm focus:ring-cyan-600 focus:border-cyan-600 block w-full sm:text-sm border-gray-300 rounded-md">
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
          <input type="date" class="shadow-sm focus:ring-cyan-600 focus:border-cyan-600 block w-full sm:text-sm border-gray-300 rounded-md" name="" id="">
        </div>
      </div>
      <div class="flex flex-col sm:flex-row sm:col-span-12 gap-4 font-semibold">
        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm rounded-md text-white bg-cyan-600 hover:bg-cyan-700 focus:outline-none focus:ring-0">
          Search Invoices
        </button>
        <button onclick="showBalanceModal()" type="button" class="ml-auto inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm rounded-md text-white bg-cyan-600 hover:bg-cyan-700 focus:outline-none focus:ring-0">
          Add Balance
        </button>
        <button onclick="showPaymentMethodsModal()" type="button" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm rounded-md text-white bg-cyan-600 hover:bg-cyan-700 focus:outline-none focus:ring-0">
          View / Edit Payment Methods
        </button>
      </div>
    </div>
  </form>
</div>

<div class="w-full my-8 p-6 rounded-md shadow bg-white">
  <div>
    <h3 class="text-lg leading-6 font-medium text-gray-900 ml-1 mb-1.25">Invoices</h3>
  </div>
  <div class="mt-4 flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                @foreach([
                  'ID',
                  'Date',
                  'Description',
                  'Amount',
                ] as $header)
                <th scope="col" class="px-5 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">
                  {{ $header }}
                </th>
                @endforeach
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200 font-medium text-gray-600">
              <?php $total_amount = 0; ?>

              @foreach($user->invoices as $invoice)
              <?php $total_amount += $invoice->amount; ?>
              <tr>
                <td class="px-5 py-4 whitespace-nowrap">
                  {{ $invoice->id }}</td>
                <td class="px-5 py-4 whitespace-nowrap">
                  {{ $invoice->created_at->format('d-m-Y') }}</td>
                <td class="px-5 py-4 whitespace-nowrap text-sm">
                  {!! nl2br(e($invoice->summary)) !!}
                </td>
                <td class="px-5 py-4 whitespace-nowrap">
                  ${{ number_format($invoice->amount ?? 0, 2) }}
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr style="border-bottom: 1px solid #e5e7eb;">
                <td colspan="3" class="px-5 py-4 whitespace-nowrap text-sm text-gray-500 text-right">
                  <b>Overall Total</b></td>
                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500"><b>
                  ${{ number_format($total_amount, 2) }}</b>
                </td>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="payment-methods-modal-wrapper" onclick="handlePaymentMethodsModalBlur(event)" class="fixed overflow-y-auto overflow-x-hidden sm:overflow-hidden z-10 inset-0 flex justify-center sm:items-center hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
  <div id="payment-methods-modal-overlay" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity duration-1000 ease-in bg-opacity-0" aria-hidden="true"></div>
  <div id="payment-methods-modal" class="absolute my-8 bg-white transition ease-in rounded-md p-4 z-10 w-11/12 max-w-lg sm:max-w-2xl lg:max-w-3xl scale-0">
    <h2 id="payment-details-heading" class="w-full px-3 text-2xl my-2 leading-6 font-medium text-gray-900">Your Payment Methods</h2>
    <div class="w-full mt-2 px-2">
      <div class="flex justify-end items-center">
        <!-- <h3 class="text-lg ml-1 leading-6 font-medium text-gray-700 text-left"></h3> -->
        @if (count($user->payment_methods ?? []) > 0)
        <button id="add-paymet-method-btn" onclick="showAddPaymentMethodForm(this)" type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 sm:text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
          Add
        </button>
        @endif
      </div>
      <div class="my-5 border rounded-md sm:overflow-y-auto sm:max-h-56 2xl:max-h-80 flex flex-col gap-y-4">
        @csrf
        <fieldset id="cards-list">
          <legend class="sr-only">Payment methods</legend>
          <div class="relative bg-white rounded-md divide-y -space-y-px">
            @foreach ($user->payment_methods ?? [] as $method)
            <!-- Checked: "bg-cyan-50 border-cyan-200 z-10", Not Checked: "border-gray-200" -->
            <label class="relative p-4 flex items-center justify-between flex-wrap gap-y-4 md:pl-4 md:pr-6 focus:outline-none">
              <div class="flex items-center gap-x-1 sm:gap-x-4 px-1 sm:p-0">
                @if ($method->brand == 'visa')
                <svg class="h-6 w-auto" viewBox="0 0 36 24" aria-hidden="true">
                  <rect width="36" height="24" fill="#224DBA" rx="4" />
                  <path fill="#fff" d="M10.925 15.673H8.874l-1.538-6c-.073-.276-.228-.52-.456-.635A6.575 6.575 0 005 8.403v-.231h3.304c.456 0 .798.347.855.75l.798 4.328 2.05-5.078h1.994l-3.076 7.5zm4.216 0h-1.937L14.8 8.172h1.937l-1.595 7.5zm4.101-5.422c.057-.404.399-.635.798-.635a3.54 3.54 0 011.88.346l.342-1.615A4.808 4.808 0 0020.496 8c-1.88 0-3.248 1.039-3.248 2.481 0 1.097.969 1.673 1.653 2.02.74.346 1.025.577.968.923 0 .519-.57.75-1.139.75a4.795 4.795 0 01-1.994-.462l-.342 1.616a5.48 5.48 0 002.108.404c2.108.057 3.418-.981 3.418-2.539 0-1.962-2.678-2.077-2.678-2.942zm9.457 5.422L27.16 8.172h-1.652a.858.858 0 00-.798.577l-2.848 6.924h1.994l.398-1.096h2.45l.228 1.096h1.766zm-2.905-5.482l.57 2.827h-1.596l1.026-2.827z" />
                </svg>
                @elseif ($method->brand == 'mastercard')
                <svg class="h-6 w-auto" xmlns="http://www.w3.org/2000/svg" width="2.11676in" height="1.5in" viewBox="0 0 152.407 108">
                  <g>
                    <rect width="152.407" height="108" style="fill: none" />
                    <g>
                      <rect x="60.4117" y="25.6968" width="31.5" height="56.6064" style="fill: #ff5f00" />
                      <path d="M382.20839,306a35.9375,35.9375,0,0,1,13.7499-28.3032,36,36,0,1,0,0,56.6064A35.938,35.938,0,0,1,382.20839,306Z" transform="translate(-319.79649 -252)" style="fill: #eb001b" />
                      <path d="M454.20349,306a35.99867,35.99867,0,0,1-58.2452,28.3032,36.00518,36.00518,0,0,0,0-56.6064A35.99867,35.99867,0,0,1,454.20349,306Z" transform="translate(-319.79649 -252)" style="fill: #f79e1b" />
                      <path d="M450.76889,328.3077v-1.1589h.4673v-.2361h-1.1901v.2361h.4675v1.1589Zm2.3105,0v-1.3973h-.3648l-.41959.9611-.41971-.9611h-.365v1.3973h.2576v-1.054l.3935.9087h.2671l.39351-.911v1.0563Z" transform="translate(-319.79649 -252)" style="fill: #f79e1b" />
                    </g>
                  </g>
                </svg>
                @else
                <svg class="h-8 w-auto" data-slot="icon" aria-hidden="true" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                @endif
                <p id="pricing-plans-0-description-0" class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-center">
                  <!-- Checked: "text-cyan-900", Not Checked: "text-gray-900" -->
                  <span class="font-medium">**** {{ $method->last_digits }}</span>
                </p>
                <!-- Checked: "text-cyan-700", Not Checked: "text-gray-500" -->
                <p id="pricing-plans-0-description-1" class="ml-2 sm:ml-6 sm:pl-1 text-sm md:ml-0 md:pl-0 md:text-right">
                  Expires {{ $method->expiry_month }} / {{ substr($method->expiry_year, 2) }}
                </p>
              </div>
              <p class="text-xs ml-auto sm:ml-0 sm:text-sm">
                Last updated on {{ $method->updated_at->format('d M Y') }}
              </p>
              <svg class="w-6 h-6 text-red-500 cursor-pointer" data-slot="icon" aria-hidden="true" fill="none" stroke-width="1.8" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </label>
            @endforeach
          </div>
        </fieldset>
        @if (count($user->payment_methods ?? []) > 0)
          <div id="add-paymet-method-form" class="rounded-md hidden">
        @else
          <div id="add-paymet-method-form" class="rounded-md">
        @endif
          <div class="bg-white py-6 px-4 sm:p-6">
            <div>
              <h2 id="payment-details-heading" class="text-lg leading-6 font-medium text-gray-700 flex justify-between">
                Payment details
                @if (count($user->payment_methods ?? []) > 0)
                <svg onclick="hideAddPaymentMethodForm()" class="h-6 w-6 cursor-pointer" data-slot="icon" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                >
                  <path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z"></path>
                </svg>
                @endif
              </h2>
              <p class="mt-1 text-sm text-gray-500">Add a new payment and billing option.</p>
            </div>
            <div class="mt-6 grid grid-cols-4 gap-6">
              <div class="col-span-4 sm:col-span-2">
                <label for="card-number" class="block text-sm font-medium text-gray-700">Card number</label>
                <!-- <input type="text" name="card_number" id="card-number" autocomplete="cc-family-name" class="mt-1 block w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm"> -->
                <div id="card-number-element" class="mt-1 block w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm"></div>
              </div>
              <div class="col-span-4 sm:col-span-1">
                <label for="card-expiration" class="block text-sm font-medium text-gray-700">Expration date</label>
                <!-- <input type="text" name="card_expiration" id="card-expiration" autocomplete="cc-exp" class="mt-1 block w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm" placeholder="MM / YY"> -->
                <div id="card-expiration-element" class="mt-1 block w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm"></div>
              </div>
              <div class="col-span-4 sm:col-span-1">
                <label for="security-code" class="flex items-center text-sm font-medium text-gray-700">
                  <span>CVC</span>
                  <!-- Heroicon name: solid/question-mark-circle -->
                  <svg class="ml-1 flex-shrink-0 h-5 w-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                  </svg>
                </label>
                <!-- <input type="text" name="security_code" id="security-code" autocomplete="cc-csc" class="mt-1 block w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm"> -->
                <div id="card-cvc-element" class="mt-1 block w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm"></div>
              </div>
              <div class="col-span-4 sm:col-span-2">
                <label for="cardholder-name" class="block text-sm font-medium text-gray-700">Cardholder name</label>
                <!-- <input type="text" name="cardholder_name" id="cardholder-name" autocomplete="cc-given-name" class="mt-1 block w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm"> -->
                <input type="text" name="cardholder_name" id="pm-modal-cardholder-name" autocomplete="cc-given-name" class="mt-1 block w-full border border-gray-300 text-gray-500 rounded-md py-2 px-3 focus:outline-none focus:ring-1 focus:ring-gray-300 focus:border-none sm:text-sm">
              </div>
              <div class="col-span-4 sm:col-span-2 flex items-end sm:justify-end">
                <button id="pm-modal-btn" onclick="handleAddPaymentMethod()" class="py-2 px-4 border border-transparent shadow-sm text-sm rounded-md text-white bg-cyan-600 hover:bg-cyan-700 focus:outline-none focus:ring-0">Add</button>
                <button id="pm-modal-spinner" class="hidden py-1.5 px-4 border border-transparent shadow-sm text-sm rounded-md text-white bg-cyan-600 hover:bg-cyan-700 focus:outline-none focus:ring-0"><svg class="text-white w-6 h-6 animate-spin" data-slot="icon" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path clip-rule="evenodd" d="M4.755 10.059a7.5 7.5 0 0 1 12.548-3.364l1.903 1.903h-3.183a.75.75 0 1 0 0 1.5h4.992a.75.75 0 0 0 .75-.75V4.356a.75.75 0 0 0-1.5 0v3.18l-1.9-1.9A9 9 0 0 0 3.306 9.67a.75.75 0 1 0 1.45.388Zm15.408 3.352a.75.75 0 0 0-.919.53 7.5 7.5 0 0 1-12.548 3.364l-1.902-1.903h3.183a.75.75 0 0 0 0-1.5H2.984a.75.75 0 0 0-.75.75v4.992a.75.75 0 0 0 1.5 0v-3.18l1.9 1.9a9 9 0 0 0 15.059-4.035.75.75 0 0 0-.53-.918Z" fill-rule="evenodd"></path>
                </svg></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="balance-modal-wrapper" onclick="handleBalanceModalBlur(event)" class="fixed overflow-y-auto overflow-x-hidden sm:overflow-hidden z-10 inset-0 flex justify-center sm:items-center hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
  <div id="balance-modal-overlay" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity duration-1000 ease-in bg-opacity-0" aria-hidden="true"></div>
  <div id="balance-modal" class="absolute my-8 bg-white transition ease-in rounded-md p-4 z-10 w-11/12 max-w-lg sm:max-w-2xl lg:max-w-3xl scale-0">
    <h2 id="payment-details-heading" class="w-full px-3 text-2xl my-2 leading-6 font-medium text-gray-900">Add Balance</h2>
    <div class="w-full mt-2 px-2">
      <div class="flex justify-between items-center">
        <h3 class="text-lg ml-1 leading-6 font-medium text-gray-700 text-left">
          Select Payment Method
        </h3>

        @if (count($user->payment_methods ?? []) > 0)
        <button onclick="showAddPaymentMethodForm()" type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 sm:text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
          Add
        </button>
        @endif

      </div>

      @if (count($user->payment_methods ?? []) > 0)
      <form id="balance-form" class="my-5 border rounded-md sm:overflow-y-auto sm:max-h-56 2xl:max-h-80 flex flex-col gap-y-4">
        @csrf
        
        <fieldset id="cards-list">
          <legend class="sr-only">Payment methods</legend>
          <div class="relative bg-white rounded-md divide-y -space-y-px">

            @foreach ($user->payment_methods as $method)

            <!-- Checked: "bg-cyan-50 border-cyan-200 z-10", Not Checked: "border-gray-200" -->
            <label class="relative p-4 flex items-center justify-between flex-wrap gap-y-4 cursor-pointer md:pl-4 md:pr-6 focus:outline-none">
              <input type="radio" name="pricing_plan" value="{{ $method->id }}" class=" h-4 w-4 text-cyan-500 border-gray-300 focus:ring-gray-900" aria-labelledby="pricing-plans-0-label" aria-describedby="pricing-plans-0-description-0 pricing-plans-0-description-1">
              <div class="flex items-center gap-x-1 sm:gap-x-4 px-1 sm:p-0">

                @if ($method->brand == 'visa')
                <svg class="h-6 w-auto" viewBox="0 0 36 24" aria-hidden="true">
                  <rect width="36" height="24" fill="#224DBA" rx="4" />
                  <path fill="#fff" d="M10.925 15.673H8.874l-1.538-6c-.073-.276-.228-.52-.456-.635A6.575 6.575 0 005 8.403v-.231h3.304c.456 0 .798.347.855.75l.798 4.328 2.05-5.078h1.994l-3.076 7.5zm4.216 0h-1.937L14.8 8.172h1.937l-1.595 7.5zm4.101-5.422c.057-.404.399-.635.798-.635a3.54 3.54 0 011.88.346l.342-1.615A4.808 4.808 0 0020.496 8c-1.88 0-3.248 1.039-3.248 2.481 0 1.097.969 1.673 1.653 2.02.74.346 1.025.577.968.923 0 .519-.57.75-1.139.75a4.795 4.795 0 01-1.994-.462l-.342 1.616a5.48 5.48 0 002.108.404c2.108.057 3.418-.981 3.418-2.539 0-1.962-2.678-2.077-2.678-2.942zm9.457 5.422L27.16 8.172h-1.652a.858.858 0 00-.798.577l-2.848 6.924h1.994l.398-1.096h2.45l.228 1.096h1.766zm-2.905-5.482l.57 2.827h-1.596l1.026-2.827z" />
                </svg>

                @elseif ($method->brand == 'mastercard')
                <svg class="h-6 w-auto" xmlns="http://www.w3.org/2000/svg" width="2.11676in" height="1.5in" viewBox="0 0 152.407 108">
                  <g>
                    <rect width="152.407" height="108" style="fill: none"/>
                    <g>
                      <rect x="60.4117" y="25.6968" width="31.5" height="56.6064" style="fill: #ff5f00"/>
                      <path d="M382.20839,306a35.9375,35.9375,0,0,1,13.7499-28.3032,36,36,0,1,0,0,56.6064A35.938,35.938,0,0,1,382.20839,306Z" transform="translate(-319.79649 -252)" style="fill: #eb001b"/>
                      <path d="M454.20349,306a35.99867,35.99867,0,0,1-58.2452,28.3032,36.00518,36.00518,0,0,0,0-56.6064A35.99867,35.99867,0,0,1,454.20349,306Z" transform="translate(-319.79649 -252)" style="fill: #f79e1b"/>
                      <path d="M450.76889,328.3077v-1.1589h.4673v-.2361h-1.1901v.2361h.4675v1.1589Zm2.3105,0v-1.3973h-.3648l-.41959.9611-.41971-.9611h-.365v1.3973h.2576v-1.054l.3935.9087h.2671l.39351-.911v1.0563Z" transform="translate(-319.79649 -252)" style="fill: #f79e1b"/>
                    </g>
                  </g>
                </svg>

                @else
                <svg class="h-8 w-auto" data-slot="icon" aria-hidden="true" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                @endif

                <p id="pricing-plans-0-description-0" class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-center">
                  <!-- Checked: "text-cyan-900", Not Checked: "text-gray-900" -->
                  <span class="font-medium">**** {{ $method->last_digits }}</span>
                </p>
                <!-- Checked: "text-cyan-700", Not Checked: "text-gray-500" -->
                <p id="pricing-plans-0-description-1" class="ml-2 sm:ml-6 sm:pl-1 text-sm md:ml-0 md:pl-0 md:text-right">
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
      @else
      <h2 class="px-2 my-8 text-gray-700">
        No payment methods were added!
      </h2>
      @endif

      <div class="mb-2 px-4 py-6 sm:py-3 bg-gray-50 flex flex-col sm:flex-row gap-y-6 items-center justify-between gap-x-4 sm:px-6">
        <input placeholder="Enter amount" type="number" name="balance_amount" class="sm:w-1/2 rounded-md focus:outline-none focus:ring-0 focus:border-gray-900">
        <button id="balance-modal-btn" onclick="handleAddBalance()" class=" border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white @if (count($user->payment_methods ?? []) > 0) bg-gray-800 hover:bg-gray-900 @else bg-gray-500 @endif focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900" @if (count($user->payment_methods ?? []) == 0) disabled @endif>
          Add Balance
        </button>
        <button id="balance-modal-spinner" class="hidden rounded-md shadow-sm py-2 px-8 bg-gray-900 flex items-center justify-center">
          <svg class="text-white w-6 h-6 animate-spin" data-slot="icon" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" d="M4.755 10.059a7.5 7.5 0 0 1 12.548-3.364l1.903 1.903h-3.183a.75.75 0 1 0 0 1.5h4.992a.75.75 0 0 0 .75-.75V4.356a.75.75 0 0 0-1.5 0v3.18l-1.9-1.9A9 9 0 0 0 3.306 9.67a.75.75 0 1 0 1.45.388Zm15.408 3.352a.75.75 0 0 0-.919.53 7.5 7.5 0 0 1-12.548 3.364l-1.902-1.903h3.183a.75.75 0 0 0 0-1.5H2.984a.75.75 0 0 0-.75.75v4.992a.75.75 0 0 0 1.5 0v-3.18l1.9 1.9a9 9 0 0 0 15.059-4.035.75.75 0 0 0-.53-.918Z" fill-rule="evenodd"></path>
          </svg>
        </button>
      </div>
    </div>
  </div>
</div>

<div id="toast" class="hidden">
  <span id="toast-message">Success message</span>
</div>

@endsection

@section('scripts')

<script defer src="https://js.stripe.com/v3/"></script>

<script defer>

  document.addEventListener('DOMContentLoaded', function() {
    const stripe = Stripe("{{ config('services.stripe.public_key') }}");
    window.stripe = stripe;
    const elements = stripe.elements();

    const cardNumber = elements.create('cardNumber');
    cardNumber.mount('#card-number-element');
    window.cardNumber = cardNumber;

    const cardExpiry = elements.create('cardExpiry');
    cardExpiry.mount('#card-expiration-element');
    window.cardExpiry = cardExpiry;

    const cardCvc = elements.create('cardCvc');
    cardCvc.mount('#card-cvc-element');
    window.cardCvc = cardCvc;
  });

  function showToast(message, type = 'success') {
    const toast = document.getElementById('toast');
    const toastMessage = document.getElementById('toast-message');

    toastMessage.textContent = message;

    toast.className = `fixed hidden scale-0 transition bottom-6 right-6 py-4 px-8 rounded shadow-md text-white font-semibold z-50 ${type === 'success' ? 'bg-green-600' : 'bg-red-600'}`;


    setTimeout(() => {
      toast.classList.remove('hidden');

      setTimeout(() => {
        toast.classList.remove('scale-0');
        toast.classList.add('scale-100');
      }, 10);
    }, 10);

    setTimeout(() => {
      toast.classList.remove('scale-100');
      toast.classList.add('scale-0');

      setTimeout(() => {
        toast.classList.add('hidden');
      }, 250);
    }, 3000);
  }

  function handlePaymentMethodsModalBlur(event) {
    const modal = document.getElementById('payment-methods-modal');
    const isModalClicked = Boolean(event.composedPath().filter(
      (elem) => elem.id == 'payment-methods-modal'
    ).length);

    if (!isModalClicked && !modal.classList.contains('scale-0')) {
      hidePaymentMethodsModal();
    }
  }

  function handleBalanceModalBlur(event) {
    const modal = document.getElementById('balance-modal');
    const isModalClicked = Boolean(event.composedPath().filter(
      (elem) => elem.id == 'balance-modal'
    ).length);

    if (!isModalClicked && !modal.classList.contains('scale-0')) {
      hideBalanceModal();
    }
  }

  function showBalanceModal() {
    const modalWrapper = document.getElementById('balance-modal-wrapper');
    const modalOverlay = document.getElementById('balance-modal-overlay');
    const modal = document.getElementById('balance-modal');

    modalWrapper.classList.remove('hidden');
    setTimeout(() => {
      modal.classList.remove('scale-0');
      modalOverlay.classList.remove('bg-opacity-0');
    }, 100);
  }

  function hideBalanceModal() {
    const modalWrapper = document.getElementById('balance-modal-wrapper');
    const modalOverlay = document.getElementById('balance-modal-overlay');
    const modal = document.getElementById('balance-modal');

    modal.classList.add('scale-0');
    modalOverlay.classList.add('bg-opacity-0');
    setTimeout(() => {
      modalWrapper.classList.add('hidden');
    }, 200);
  }

  function showPaymentMethodsModal() {
    const modalWrapper = document.getElementById('payment-methods-modal-wrapper');
    const modalOverlay = document.getElementById('payment-methods-modal-overlay');
    const modal = document.getElementById('payment-methods-modal');

    modalWrapper.classList.remove('hidden');
    setTimeout(() => {
      modal.classList.remove('scale-0');
      modalOverlay.classList.remove('bg-opacity-0');
    }, 100);
  }

  function hidePaymentMethodsModal() {
    const modalWrapper = document.getElementById('payment-methods-modal-wrapper');
    const modalOverlay = document.getElementById('payment-methods-modal-overlay');
    const modal = document.getElementById('payment-methods-modal');

    modal.classList.add('scale-0');
    modalOverlay.classList.add('bg-opacity-0');
    setTimeout(() => {
      modalWrapper.classList.add('hidden');
    }, 200);
  }

  function showAddPaymentMethodForm(elem) {
    elem.classList.add('hidden');
    document.getElementById('add-paymet-method-form')
      .classList.remove('hidden');
  }

  function hideAddPaymentMethodForm() {
    const btn = document.getElementById('add-paymet-method-btn');
    btn.classList.remove('hidden');
    document.getElementById('add-paymet-method-form')
      .classList.add('hidden');
  }

  async function handleAddBalance() {
    const form = document.getElementById('balance-form');
    const paymentMethod = form.elements['pricing_plan']?.value ?? null;
    const balanceAmount = form.elements['balance_amount']?.value ?? null;

    const btn = document.getElementById('balance-modal-btn');
    const spinner = document.getElementById('balance-modal-spinner');

    try {
      btn.classList.add('hidden');
      spinner.classList.remove('hidden');

      const payload = new FormData();
      payload.append('payment_method_id', paymentMethod);
      payload.append('balance_amount', balanceAmount);

      const res = await balanceRequest(payload);

      if (res.status === 200) {
        btn.classList.remove('hidden');
        spinner.classList.add('hidden');
        hideBalanceModal();

        showToast('Balance successfully added!', 'success');
      } else {
        btn.classList.remove('hidden');
        spinner.classList.add('hidden');

        showToast('Failed to add balance!', 'error');
      }
    } catch (error) {
      console.log(error);
      btn.classList.remove('hidden');
      spinner.classList.add('hidden');

      showToast('Failed to add balance!', 'error');
    }
  }

  async function balanceRequest(formData) {
    formData.append('_token', "{{ csrf_token() }}");
    const req = await fetch("{{ route('add-balance') }}", {
      method: 'POST',
      body: formData
    });

    return req;
  }

  async function handleAddPaymentMethod() {
    let cardHolderName = document.getElementById('pm-modal-cardholder-name');
    let newPaymentMethod = null;

     // Validate card fields
    const cardNumberError = window.cardNumber._complete;
    const cardExpiryError = window.cardExpiry._complete;
    const cardCvcError = window.cardCvc._complete;

    // Check if the fields are complete
    if (!cardNumberError || !cardExpiryError || !cardCvcError) {
      alert("Please complete all required fields");
      return;
    }

    // Check if the cardholder name is filled
    if (!cardHolderName.value) {
      alert("Cardholder name is required");
      return;
    }

    const btn = document.getElementById('pm-modal-btn');
    const spinner = document.getElementById('pm-modal-spinner');

    try {
      btn.classList.add('hidden');
      spinner.classList.remove('hidden');

      if (cardHolderName.value) {
        const result = await window.stripe.createPaymentMethod(
          'card',
          window.cardNumber,
          {
            billing_details: { name: cardHolderName.value }
          }
        );

        newPaymentMethod = {};
        newPaymentMethod.id = result.paymentMethod.id;
        newPaymentMethod.last_digits = result.paymentMethod.card.last4;
        newPaymentMethod.expiry_month = result.paymentMethod.card.exp_month;
        newPaymentMethod.expiry_year = result.paymentMethod.card.exp_year;
        newPaymentMethod.brand = result.paymentMethod.card.display_brand;
        newPaymentMethod.card_holder_name = result.paymentMethod.billing_details.name;
      }

      const payload = new FormData();
      payload.append('new_payment_method', JSON.stringify(newPaymentMethod));

      const res = await addPaymentMethodReqeust(payload);

      if (res.status === 200) {
        window.cardNumber.clear();
        window.cardExpiry.clear();
        window.cardCvc.clear();
        cardHolderName.value = '';

        btn.classList.remove('hidden');
        spinner.classList.add('hidden');
        hideConfirmModal();

        showToast('Payment method successfully added!', 'success');
        setTimeout(() => window.location.reload(), 3000);
      } else {
        btn.classList.remove('hidden');
        spinner.classList.add('hidden');

        showToast('Failed to add payment method!', 'error');
      }
    } catch (error) {
      console.log(error);
      btn.classList.remove('hidden');
      spinner.classList.add('hidden');

      showToast('Failed to add payment method!', 'error');
    }
  }

  async function addPaymentMethodReqeust(formData)
  {
    formData.append('_token', "{{ csrf_token() }}");
    const req = await fetch("{{ route('add-payment-method') }}", {
      method: 'POST',
      body: formData
    });

    return req;
  }

</script>

@endsection
