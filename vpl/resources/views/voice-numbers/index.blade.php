@extends('master-layout')
@section('title', 'Purchase Numbers')

@section('content')
<div class="w-full my-8 p-6 rounded-md shadow bg-white">
  <div>
    <h3 class="text-lg leading-6 font-medium text-gray-900">Advance Search</h3>
    <p class="mt-1 text-sm text-gray-500">Search numbers from specifc country or specific type etc.</p>
  </div>
  <form action="" method="GET">
    <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-12">
      <div class="sm:col-span-4">
        <label for="country" class="block text-sm font-medium text-gray-700"> Country </label>
        <div class="mt-1">
          <select onchange="changePrefixValue(this)" id="country" name="country" autocomplete="country-name" class="shadow-sm focus:ring-cyan-600 focus:border-cyan-600 block w-full sm:text-sm border-gray-300 rounded-md">
            @foreach ($countries as $country)
            @if ($searched_country->code_a2 == $country->code_a2)
            <option selected value="{{ $country->code_a2 }}" data-dial="+{{ $country->dialing_code }}">
              @else
            <option value="{{ $country->code_a2 }}" data-dial="+{{ $country->dialing_code }}">
              @endif
              {{ ucfirst($country->name) }} (+{{ $country->dialing_code }})
            </option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="sm:col-span-2">
        <label for="prefix" class="block text-sm font-medium text-gray-700">
          Prefix
        </label>
        <div class="mt-1 flex rounded-md shadow-sm">
          <span id="country-prefix" class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
            +92
          </span>
          <input type="tel" pattern="[0-9]{1,4}" name="prefix" id="prefix" autocomplete="prefix" placeholder="8333****" class="flex-1 focus:ring-cyan-600 focus:border-cyan-600 block w-full min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300" value="{{ request()->input('prefix') }}">
        </div>
      </div>
      <!-- <fieldset class="sm:col-span-12">
        <p class="block text-sm mb-2 font-medium text-gray-700">
          Billing Type
        </p>
        <div class="flex items-center justify-start gap-4">
          <div class="flex items-center">
            <input id="usage-billing" name="billing-type" type="radio" class="focus:ring-cyan-600 h-4 w-4 text-cyan-600 border-gray-300">
            <label for="usage-billing" class="ml-3 block text-sm font-medium text-gray-600">
              Usage ($ / minute)
            </label>
          </div>
          <div class="flex items-center">
            <input checked id="usage-fixed" name="billing-type" type="radio" class="focus:ring-cyan-600 h-4 w-4 text-cyan-600 border-gray-300">
            <label for="usage-fixed" class="ml-3 block text-sm font-medium text-gray-600">
              Fixed (monthly)
            </label>
          </div>
        </div>
      </fieldset>
      <fieldset class="sm:col-span-12">
        <p class="block text-sm mb-2 font-medium text-gray-700">
          Capability
        </p>
        <div class="flex items-center justify-start gap-4">
          <div class="flex items-center">
            <input id="voice" name="capability" type="radio" class="focus:ring-cyan-600 h-4 w-4 text-cyan-600 border-gray-300">
            <label for="voice" class="ml-3 block text-sm font-medium text-gray-600">
              Voice
            </label>
          </div>
          <div class="flex items-center">
            <input checked id="sms" name="capability" type="radio" class="focus:ring-cyan-600 h-4 w-4 text-cyan-600 border-gray-300">
            <label for="sms" class="ml-3 block text-sm font-medium text-gray-600">
              SMS
            </label>
          </div>
          <div class="flex items-center">
            <input id="both" name="capability" type="radio" class="focus:ring-cyan-600 h-4 w-4 text-cyan-600 border-gray-300">
            <label for="both" class="ml-3 block text-sm font-medium text-gray-600">
              Both
            </label>
          </div>
        </div>
      </fieldset>
      <div class="relative flex items-start sm:col-span-12">
        <div class="flex items-center h-5">
          <input id="no-legal" name="no-legal" type="checkbox" class="focus:ring-cyan-600 h-4 w-4 text-cyan-600 border-gray-300 rounded">
        </div>
        <div class="ml-3 text-sm">
          <label for="no-legal" class="font-medium text-gray-700">
            No Legal Requirement
          </label>
        </div>
      </div>
      <div class="relative flex items-start sm:col-span-12">
        <div class="flex items-center h-5">
          <input id="toll-free" name="toll-free" type="checkbox" class="focus:ring-cyan-600 h-4 w-4 text-cyan-600 border-gray-300 rounded">
        </div>
        <div class="ml-3 text-sm">
          <label for="toll-free" class="font-medium text-gray-700">
            Toll Free
          </label>
        </div>
      </div> -->
      <div class="flex justify-end sm:col-span-12">
        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-700 focus:outline-none focus:ring-0">Search</button>
      </div>
    </div>
  </form>
</div>

<div class="flex flex-col shadow rounded-md overflow-x-auto overflow-y-clip lg:overflow-clip">
  <div class="-my-2 sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      @if ($numbers->count() > 0)
      <div class="rounded-md overflow-hidden border-b border-gray-200">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-white">
            <tr>
              <!-- <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                <input onchange="selectAllRows(event)" type="checkbox" class="focus:ring-cyan-600 h-4 w-4 text-cyan-700 border-gray-300 rounded">
              </th> -->
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Number</th>
              <!-- <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Type</th> -->
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Capabilities</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Rate ($ / minute)</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Monthly Price (fixed)</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Setup Charges</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap"></th>
            </tr>
          </thead>
          <tbody onclick="handleRowClick(event)">
            @foreach ($numbers as $number)
            <tr class="even:bg-white odd:bg-gray-50" data-number="{{ $number['number'] }}" data-country="{{ $searched_country->name }}">
              <!-- <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                <input type="checkbox" class="focus:ring-cyan-600 h-4 w-4 text-cyan-700 border-gray-300 rounded">
              </td> -->
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                {{ preg_replace('/^(?!\+)(.*)/', '+$1', $number['number']); }}
              </td>
              <!-- <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                Local
              </td> -->
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                Voice, SMS
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                ${{ $number['per_minute_charges'] ?? '0' }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                ${{ $number['monthly_charges'] ?? '0' }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                ${{ $number['setup_charges'] ?? '0' }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <button class="bg-cyan-600 text-white px-3 py-1 rounded hover:bg-cyan-700">Buy</button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      @endif
    </div>
  </div>
</div>

<div id="confirm-modal-wrapper" onclick="handleModalBlur(event)" class="fixed overflow-y-auto overflow-x-hidden sm:overflow-hidden z-10 inset-0 flex justify-center sm:items-center hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">

  <div id="confirm-modal-overlay" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity duration-1000 ease-in bg-opacity-0" aria-hidden="true"></div>

  <div id="confirm-modal" class="absolute my-8 bg-white transition ease-in rounded-md p-4 z-10 w-11/12 max-w-lg sm:max-w-2xl lg:max-w-3xl scale-0">

    <h2 id="payment-details-heading" class="w-full px-3 text-2xl my-2 leading-6 font-medium text-gray-900">Confirm Purchase</h2>

    <div class="flex flex-wrap">
      <a class="w-full sm:w-1/2 p-3 flex items-center justify-start rounded-lg">
        <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-cyan-500 text-white">
          <svg class="h-5 w-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path d="M352 256c0 22.2-1.2 43.6-3.3 64H163.3c-2.2-20.4-3.3-41.8-3.3-64s1.2-43.6 3.3-64H348.7c2.2 20.4 3.3 41.8 3.3 64zm28.8-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H380.8c2.1-20.6 3.2-42 3.2-64s-1.1-43.4-3.2-64zm112.6-32H376.7c-10-63.9-29.8-117.4-55.3-151.6c78.3 20.7 142 77.5 171.9 151.6zm-149.1 0H167.7c6.1-36.4 15.5-68.6 27-94.7c10.5-23.6 22.2-40.7 33.5-51.5C239.4 3.2 248.7 0 256 0s16.6 3.2 27.8 13.8c11.3 10.8 23 27.9 33.5 51.5c11.6 26 20.9 58.2 27 94.7zm-209 0H18.6C48.6 85.9 112.2 29.1 190.6 8.4C165.1 42.6 145.3 96.1 135.3 160zM8.1 192H131.2c-2.1 20.6-3.2 42-3.2 64s1.1 43.4 3.2 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM194.7 446.6c-11.6-26-20.9-58.2-27-94.6H344.3c-6.1 36.4-15.5 68.6-27 94.6c-10.5 23.6-22.2 40.7-33.5 51.5C272.6 508.8 263.3 512 256 512s-16.6-3.2-27.8-13.8c-11.3-10.8-23-27.9-33.5-51.5zM135.3 352c10 63.9 29.8 117.4 55.3 151.6C112.2 482.9 48.6 426.1 18.6 352H135.3zm358.1 0c-30 74.1-93.6 130.9-171.9 151.6c25.5-34.2 45.2-87.7 55.3-151.6H493.4z"/>
          </svg>
        </div>
        <div class="ml-4 flex flex-col items-start text-left">
          <p class="text-base font-medium text-gray-900">Country</p>
          <p class="mt-1 text-sm text-gray-500">Switzerland</p>
        </div>
      </a>

      <a class="w-full sm:w-1/2 p-3 flex items-center justify-start rounded-lg">
        <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-cyan-500 text-white">
          <svg class="h-5 w-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" /></svg>
        </div>
        <div class="ml-4 flex flex-col items-start text-left">
          <p class="text-base font-medium text-gray-900">Number</p>
          <p class="mt-1 text-sm text-gray-500">+41 218 213902</p>
        </div>
      </a>

      <a class="w-full sm:w-1/2 p-3 flex items-center justify-start rounded-lg">
        <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-cyan-500 text-white">
          <svg class="h-5 w-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
            <path d="M160 0c17.7 0 32 14.3 32 32V67.7c1.6 .2 3.1 .4 4.7 .7c.4 .1 .7 .1 1.1 .2l48 8.8c17.4 3.2 28.9 19.9 25.7 37.2s-19.9 28.9-37.2 25.7l-47.5-8.7c-31.3-4.6-58.9-1.5-78.3 6.2s-27.2 18.3-29 28.1c-2 10.7-.5 16.7 1.2 20.4c1.8 3.9 5.5 8.3 12.8 13.2c16.3 10.7 41.3 17.7 73.7 26.3l2.9 .8c28.6 7.6 63.6 16.8 89.6 33.8c14.2 9.3 27.6 21.9 35.9 39.5c8.5 17.9 10.3 37.9 6.4 59.2c-6.9 38-33.1 63.4-65.6 76.7c-13.7 5.6-28.6 9.2-44.4 11V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V445.1c-.4-.1-.9-.1-1.3-.2l-.2 0 0 0c-24.4-3.8-64.5-14.3-91.5-26.3c-16.1-7.2-23.4-26.1-16.2-42.2s26.1-23.4 42.2-16.2c20.9 9.3 55.3 18.5 75.2 21.6c31.9 4.7 58.2 2 76-5.3c16.9-6.9 24.6-16.9 26.8-28.9c1.9-10.6 .4-16.7-1.3-20.4c-1.9-4-5.6-8.4-13-13.3c-16.4-10.7-41.5-17.7-74-26.3l-2.8-.7 0 0C119.4 279.3 84.4 270 58.4 253c-14.2-9.3-27.5-22-35.8-39.6c-8.4-17.9-10.1-37.9-6.1-59.2C23.7 116 52.3 91.2 84.8 78.3c13.3-5.3 27.9-8.9 43.2-11V32c0-17.7 14.3-32 32-32z" /></svg>
        </div>
        <div class="ml-4 flex flex-col items-start text-left">
          <p class="text-base font-medium text-gray-900">Pricing</p>
          <p class="mt-1 text-sm text-gray-500">
            $3 / Month
          </p>
        </div>
      </a>

      <a class="w-full sm:w-1/2 p-3 flex items-center justify-start rounded-lg">
        <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-cyan-500 text-white">
          <svg class="h-5 w-10 -ml-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
            <path d="M352 320c88.4 0 160-71.6 160-160c0-15.3-2.2-30.1-6.2-44.2c-3.1-10.8-16.4-13.2-24.3-5.3l-76.8 76.8c-3 3-7.1 4.7-11.3 4.7H336c-8.8 0-16-7.2-16-16V118.6c0-4.2 1.7-8.3 4.7-11.3l76.8-76.8c7.9-7.9 5.4-21.2-5.3-24.3C382.1 2.2 367.3 0 352 0C263.6 0 192 71.6 192 160c0 19.1 3.4 37.5 9.5 54.5L19.9 396.1C7.2 408.8 0 426.1 0 444.1C0 481.6 30.4 512 67.9 512c18 0 35.3-7.2 48-19.9L297.5 310.5c17 6.2 35.4 9.5 54.5 9.5zM80 408a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"/>
        </div>
        <div class="ml-4 flex flex-col items-start text-left">
          <p class="text-base font-medium text-gray-900">Setup Charges</p>
          <p class="mt-1 text-sm text-gray-500">
            $3
          </p>
        </div>
      </a>

      <a class="w-full sm:w-1/2 p-3 flex items-center justify-start rounded-lg">
        <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-cyan-500 text-white">
          <svg class="h-6 w-6 -mt-2 -ml-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
            <path d="M576 0c17.7 0 32 14.3 32 32V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V32c0-17.7 14.3-32 32-32zM448 96c17.7 0 32 14.3 32 32V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V128c0-17.7 14.3-32 32-32zM352 224V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V224c0-17.7 14.3-32 32-32s32 14.3 32 32zM192 288c17.7 0 32 14.3 32 32V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V320c0-17.7 14.3-32 32-32zM96 416v64c0 17.7-14.3 32-32 32s-32-14.3-32-32V416c0-17.7 14.3-32 32-32s32 14.3 32 32z"/>
        </div>
        <div class="ml-4 flex flex-col items-start text-left">
          <p class="text-base font-medium text-gray-900">Type</p>
          <p class="mt-1 text-sm text-gray-500">
            Local
          </p>
        </div>
      </a>

      <a class="w-full sm:w-1/2 p-3 flex items-center justify-start rounded-lg">
        <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-cyan-500 text-white">
          <svg class="h-8 w-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <path d="M128 64v96h64V64H386.7L416 93.3V160h64V93.3c0-17-6.7-33.3-18.7-45.3L432 18.7C420 6.7 403.7 0 386.7 0H192c-35.3 0-64 28.7-64 64zM0 160V480c0 17.7 14.3 32 32 32H64c17.7 0 32-14.3 32-32V160c0-17.7-14.3-32-32-32H32c-17.7 0-32 14.3-32 32zm480 32H128V480c0 17.7 14.3 32 32 32H480c17.7 0 32-14.3 32-32V224c0-17.7-14.3-32-32-32zM256 256a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm96 32a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm32 96a32 32 0 1 1 0 64 32 32 0 1 1 0-64zM224 416a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/>
          </svg>
        </div>
        <div class="ml-4 flex flex-col items-start text-left">
          <p class="text-base font-medium text-gray-900">Capability</p>
          <p class="mt-1 text-sm text-gray-500">
            Voice, SMS
          </p>
        </div>
      </a>
    </div>

    <div class="w-full mt-2 px-2">
      <div class="mb-2 px-4 py-6 sm:py-3 bg-gray-50 flex flex-col gap-y-6 sm:flex-row items-stretch sm:justify-between sm:items-center gap-x-4">
        <button id="purchase-modal-btn" onclick="handlePurchase()" class="bg-gray-800 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900">
          Purchase
        </button>
        <button id="purchase-modal-spinner" class="hidden rounded-md shadow-sm py-2 px-8 bg-gray-900 flex items-center justify-center">
          <svg class="text-white w-6 h-6 animate-spin" data-slot="icon" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" d="M4.755 10.059a7.5 7.5 0 0 1 12.548-3.364l1.903 1.903h-3.183a.75.75 0 1 0 0 1.5h4.992a.75.75 0 0 0 .75-.75V4.356a.75.75 0 0 0-1.5 0v3.18l-1.9-1.9A9 9 0 0 0 3.306 9.67a.75.75 0 1 0 1.45.388Zm15.408 3.352a.75.75 0 0 0-.919.53 7.5 7.5 0 0 1-12.548 3.364l-1.902-1.903h3.183a.75.75 0 0 0 0-1.5H2.984a.75.75 0 0 0-.75.75v4.992a.75.75 0 0 0 1.5 0v-3.18l1.9 1.9a9 9 0 0 0 15.059-4.035.75.75 0 0 0-.53-.918Z" fill-rule="evenodd"></path>
          </svg>
        </button>
        <p>Total: <b id="total"></b></p>
      </div>
    </div>
  </div>
</div>

<div id="toast" class="hidden">
  <span id="toast-message">Success message</span>
</div>

@includeWhen(
  $numbers->count() > 0,
  'table-pagination-bar',
  ['rows' => $numbers]
)

@endsection

@section('scripts')

<script defer type="text/javascript">

  // Set data on initial load
  window.onload = changePrefixValue(document.getElementById('country'));

  function changePrefixValue(field) {
    document.getElementById('country-prefix')
      .innerText = field.options[field.selectedIndex].dataset.dial;
  }

  function handleRowClick(event) {
    const row = event.target.closest('tr');

    if (event.target.tagName == 'BUTTON') {
      handlePurchaseModal(row);
    }

    if (event.target.tagName == 'INPUT') return;

    const checkbox = row.querySelector('[type=checkbox]');
    const number = row.dataset.number;
    checkbox.checked = !checkbox.checked;
  }

  function selectAllRows(event) {
    const checkBoxes = event.currentTarget.closest('table')
      .querySelectorAll('tbody input');

    Array.from(checkBoxes).forEach(checkbox => {
      checkbox.checked = event.currentTarget.checked;
    });
  }

  function handlePurchaseModal(row) {
    const fields = row.querySelectorAll('td');
    const country = row.dataset.country;
    window.phone_number = fields[0].innerText;
    showConfirmModal(
      country,
      fields[0].innerText,
      fields[3].innerText,
      fields[4].innerText,
      'local',
      fields[1].innerText,
    );
  }

  async function handlePurchase() {
    const payload = new FormData();
    payload.append('phone_number', window.phone_number);

    const btn = document.getElementById('purchase-modal-btn');
    const spinner = document.getElementById('purchase-modal-spinner');

    try {
      btn.classList.add('hidden');
      spinner.classList.remove('hidden');

      const res = await purchaseRequest(payload);

      if (res.status === 200) {
        btn.classList.remove('hidden');
        spinner.classList.add('hidden');
        hideConfirmModal();

        showToast('Purchase successful!', 'success');
      } else {
        btn.classList.remove('hidden');
        spinner.classList.add('hidden');

        showToast('Purchase failed!', 'error');
      }
    } catch (error) {
      btn.classList.remove('hidden');
      spinner.classList.add('hidden');

      showToast('Purchase failed!', 'error');
    }
  }

  async function purchaseRequest(formData) {
    formData.append('_token', "{{ csrf_token() }}");
    const req = await fetch("{{ route('handle-purchase') }}", {
      method: 'POST',
      body: formData
    });

    return req;
  }

  function handleModalBlur(event) {
    const modal = document.getElementById('confirm-modal');
    const isModalClicked = Boolean(event.composedPath().filter(
      (elem) => elem.id == 'confirm-modal'
    ).length);

    if (!isModalClicked && !modal.classList.contains('scale-0')) {
      hideConfirmModal();
    }
  }

  function showConfirmModal(
    country,
    number,
    pricing,
    setupCharges,
    type,
    capabilites
  ) {
    const modalWrapper = document.getElementById('confirm-modal-wrapper');
    const modalOverlay = document.getElementById('confirm-modal-overlay');
    const modal = document.getElementById('confirm-modal');

    const placeholders = modal.querySelectorAll('a p:nth-of-type(2)');
    placeholders[0].innerText = country.toUpperCase();
    placeholders[1].innerText = number;
    placeholders[2].innerText = `${pricing} / Month`;
    placeholders[3].innerText = setupCharges;
    placeholders[4].innerText = type;
    placeholders[5].innerText = capabilites;
    document.getElementById('total').innerText = '$' + (Number(pricing.slice(1)) + Number(setupCharges.slice(1)));

    modalWrapper.classList.remove('hidden');
    setTimeout(() => {
      modal.classList.remove('scale-0');
      modalOverlay.classList.remove('bg-opacity-0');
    }, 100);
  }

  function hideConfirmModal() {
    const modalWrapper = document.getElementById('confirm-modal-wrapper');
    const modalOverlay = document.getElementById('confirm-modal-overlay');
    const modal = document.getElementById('confirm-modal');

    modal.classList.add('scale-0');
    modalOverlay.classList.add('bg-opacity-0');
    setTimeout(() => {
      modalWrapper.classList.add('hidden');
    }, 200);
  }

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

</script>

@endsection
