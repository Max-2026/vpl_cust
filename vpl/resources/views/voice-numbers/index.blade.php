@extends('master-layout')
@section('title', 'Voice Numbers')
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
            @if (request()->input('country') == $country->dialing_code)
            <option selected value="{{ $country->dialing_code }}" data-dial="+{{ $country->dialing_code }}">
              @else
            <option value="{{ $country->dialing_code }}" data-dial="+{{ $country->dialing_code }}">
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
      <fieldset class="sm:col-span-12">
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
            <input id="usage-fixed" name="billing-type" type="radio" class="focus:ring-cyan-600 h-4 w-4 text-cyan-600 border-gray-300">
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
            <input id="sms" name="capability" type="radio" class="focus:ring-cyan-600 h-4 w-4 text-cyan-600 border-gray-300">
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
      </div>
      <div class="flex justify-end sm:col-span-12">
        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-700 focus:outline-none focus:ring-0">Search</button>
      </div>
    </div>
  </form>
</div>

<div class="flex flex-col overflow-x-auto overflow-y-clip lg:overflow-clip">
  <div class="-my-2 sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow rounded-md overflow-hidden border-b border-gray-200">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-white">
            <tr>
              <!-- <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                <input onchange="selectAllRows(event)" type="checkbox" class="focus:ring-cyan-600 h-4 w-4 text-cyan-700 border-gray-300 rounded">
              </th> -->
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Number</th>
              <!-- <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Country</th> -->
              <!-- <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">City</th> -->
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Type</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Capabilities</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Rate ($ / minute)</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Monthly Price (fixed)</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Setup Charges</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap"></th>
            </tr>
          </thead>
          <tbody onclick="handleRowClick(event)">
            @foreach ($numbers as $number)
            <tr class="even:bg-white odd:bg-gray-50" data-number="{{ $number['number'] }}" data-country="{{ $number['country'] }}">
              <!-- <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                <input type="checkbox" class="focus:ring-cyan-600 h-4 w-4 text-cyan-700 border-gray-300 rounded">
              </td> -->
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                {{ $number['number'] }}
              </td>
              <!-- <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {{ $number['country'] }}
              </td> -->
              <!-- <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {{ $number['city'] }}
              </td> -->
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                Local
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                Voice, SMS
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                ${{ $number['per_minute_charges'] }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                ${{ $number['monthly_charges'] }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                ${{ $number['setup_charges'] }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <button class="bg-cyan-600 text-white px-3 py-1 rounded hover:bg-cyan-700">Buy</button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="fixed overflow-y-auto overflow-x-hidden sm:overflow-hidden z-10 inset-0 flex justify-center sm:items-center" aria-labelledby="modal-title" role="dialog" aria-modal="true">

  <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

  <div class="absolute my-8 bg-white rounded-md p-4 z-10 w-11/12 max-w-lg sm:max-w-2xl lg:max-w-3xl">

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
      <div class="flex justify-between items-center">
        <h3 class="text-lg ml-1 leading-6 font-medium text-gray-700 text-left">
          Payment Method
        </h3>

        @if (count($user->payment_methods ?? []) > 0)
        <button onclick="showAddPaymentMethodForm()" type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 sm:text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
          Add
        </button>
        @endif

      </div>
      <form id="payment-form" class="my-5 border rounded-md sm:overflow-y-auto sm:max-h-56 2xl:max-h-80 flex flex-col gap-y-4">
        @csrf
        
        <fieldset id="cards-list">
          <legend class="sr-only">Payment methods</legend>
          <div class="relative bg-white rounded-md divide-y -space-y-px">

            @foreach ($user->payment_methods ?? [] as $method)

            <!-- Checked: "bg-cyan-50 border-cyan-200 z-10", Not Checked: "border-gray-200" -->
            <label class="relative p-4 flex items-center justify-between flex-wrap gap-y-4 cursor-pointer md:pl-4 md:pr-6 focus:outline-none">
              <input type="radio" name="pricing_plan" value="{{ $method->last_digits }}" class=" h-4 w-4 text-cyan-500 border-gray-300 focus:ring-gray-900" aria-labelledby="pricing-plans-0-label" aria-describedby="pricing-plans-0-description-0 pricing-plans-0-description-1">
              <div class="flex items-center gap-x-1 sm:gap-x-4 px-1 sm:p-0">
                <svg class="h-6 w-auto" viewBox="0 0 36 24" aria-hidden="true">
                  <rect width="36" height="24" fill="#224DBA" rx="4" />
                  <path fill="#fff" d="M10.925 15.673H8.874l-1.538-6c-.073-.276-.228-.52-.456-.635A6.575 6.575 0 005 8.403v-.231h3.304c.456 0 .798.347.855.75l.798 4.328 2.05-5.078h1.994l-3.076 7.5zm4.216 0h-1.937L14.8 8.172h1.937l-1.595 7.5zm4.101-5.422c.057-.404.399-.635.798-.635a3.54 3.54 0 011.88.346l.342-1.615A4.808 4.808 0 0020.496 8c-1.88 0-3.248 1.039-3.248 2.481 0 1.097.969 1.673 1.653 2.02.74.346 1.025.577.968.923 0 .519-.57.75-1.139.75a4.795 4.795 0 01-1.994-.462l-.342 1.616a5.48 5.48 0 002.108.404c2.108.057 3.418-.981 3.418-2.539 0-1.962-2.678-2.077-2.678-2.942zm9.457 5.422L27.16 8.172h-1.652a.858.858 0 00-.798.577l-2.848 6.924h1.994l.398-1.096h2.45l.228 1.096h1.766zm-2.905-5.482l.57 2.827h-1.596l1.026-2.827z" />
                </svg>
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

        @if (count($user->payment_methods ?? []) > 0)
        <div id="add-paymet-method-form" class="rounded-md hidden">
        @else
        <div id="add-paymet-method-form" class="rounded-md">
        @endif
          <div class="bg-white py-6 px-4 sm:p-6">
            <div>
              <h2 id="payment-details-heading" class="text-lg leading-6 font-medium text-gray-700 flex justify-between">
                Payment details
                <svg onclick="hideAddPaymentMethodForm()" class="h-6 w-6 cursor-pointer" data-slot="icon" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z"></path>
                </svg>
              </h2>
              <p class="mt-1 text-sm text-gray-500">Add a new payment and billing option.</p>
            </div>

            <div class="mt-6 grid grid-cols-4 gap-6">
              <div class="col-span-4 sm:col-span-2">
                <label for="card-number" class="block text-sm font-medium text-gray-700">Card number</label>
                <input type="text" name="card_number" id="card-number" autocomplete="cc-family-name" class="mt-1 block w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
              </div>

              <div class="col-span-4 sm:col-span-1">
                <label for="card-expiration" class="block text-sm font-medium text-gray-700">Expration date</label>
                <input type="text" name="card_expiration" id="card-expiration" autocomplete="cc-exp" class="mt-1 block w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm" placeholder="MM / YY">
              </div>

              <div class="col-span-4 sm:col-span-1">
                <label for="security-code" class="flex items-center text-sm font-medium text-gray-700">
                  <span>CVC</span>
                  <!-- Heroicon name: solid/question-mark-circle -->
                  <svg class="ml-1 flex-shrink-0 h-5 w-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                  </svg>
                </label>
                <input type="text" name="security_code" id="security-code" autocomplete="cc-csc" class="mt-1 block w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
              </div>

              <div class="col-span-4 sm:col-span-2">
                <label for="cardholder-name" class="block text-sm font-medium text-gray-700">Cardholder name</label>
                <input type="text" name="cardholder_name" id="cardholder-name" autocomplete="cc-given-name" class="mt-1 block w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
              </div>

            </div>
          </div>
        </div>
      </form>

      <div class="mb-2 px-4 py-6 sm:py-3 bg-gray-50 flex flex-col gap-y-6 sm:flex-row items-stretch sm:items-center gap-x-4 sm:px-6">
        <button onclick="handlePurchase()" class="bg-gray-800 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900">
          Purchase
        </button>
        <!-- <p class="mx-2 sm:mx-auto text-gray-700">Or Pay With</p>
        <button type="submit" class="bg-gray-800 py-0.5 border border-transparent rounded-md shadow-sm inline-flex justify-center text-white hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900">
          <svg class="h-8 w-24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M105.7 215v41.3h57.1a49.7 49.7 0 0 1 -21.1 32.6c-9.5 6.6-21.7 10.3-36 10.3-27.6 0-50.9-18.9-59.3-44.2a65.6 65.6 0 0 1 0-41l0 0c8.4-25.5 31.7-44.4 59.3-44.4a56.4 56.4 0 0 1 40.5 16.1L176.5 155a101.2 101.2 0 0 0 -70.8-27.8 105.6 105.6 0 0 0 -94.4 59.1 107.6 107.6 0 0 0 0 96.2v.2a105.4 105.4 0 0 0 94.4 59c28.5 0 52.6-9.5 70-25.9 20-18.6 31.4-46.2 31.4-78.9A133.8 133.8 0 0 0 205.4 215zm389.4-4c-10.1-9.4-23.9-14.1-41.4-14.1-22.5 0-39.3 8.3-50.5 24.9l20.9 13.3q11.5-17 31.3-17a34.1 34.1 0 0 1 22.8 8.8A28.1 28.1 0 0 1 487.8 248v5.5c-9.1-5.1-20.6-7.8-34.6-7.8-16.4 0-29.7 3.9-39.5 11.8s-14.8 18.3-14.8 31.6a39.7 39.7 0 0 0 13.9 31.3c9.3 8.3 21 12.5 34.8 12.5 16.3 0 29.2-7.3 39-21.9h1v17.7h22.6V250C510.3 233.5 505.3 220.3 495.1 211zM475.9 300.3a37.3 37.3 0 0 1 -26.6 11.2A28.6 28.6 0 0 1 431 305.2a19.4 19.4 0 0 1 -7.8-15.6c0-7 3.2-12.8 9.5-17.4s14.5-7 24.1-7C470 265 480.3 268 487.6 273.9 487.6 284.1 483.7 292.9 475.9 300.3zm-93.7-142A55.7 55.7 0 0 0 341.7 142H279.1V328.7H302.7V253.1h39c16 0 29.5-5.4 40.5-15.9 .9-.9 1.8-1.8 2.7-2.7A54.5 54.5 0 0 0 382.3 158.3zm-16.6 62.2a30.7 30.7 0 0 1 -23.3 9.7H302.7V165h39.6a32 32 0 0 1 22.6 9.2A33.2 33.2 0 0 1 365.7 220.5zM614.3 201 577.8 292.7h-.5L539.9 201H514.2L566 320.6l-29.4 64.3H561L640 201z"/></svg>
        </button>
        <button type="submit" class="bg-gray-800 py-0.5 border border-transparent rounded-md shadow-sm inline-flex justify-center text-white hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900">
          <svg class="h-8 w-24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M116.9 158.5c-7.5 8.9-19.5 15.9-31.5 14.9-1.5-12 4.4-24.8 11.3-32.6 7.5-9.1 20.6-15.6 31.3-16.1 1.2 12.4-3.7 24.7-11.1 33.8m10.9 17.2c-17.4-1-32.3 9.9-40.5 9.9-8.4 0-21-9.4-34.8-9.1-17.9 .3-34.5 10.4-43.6 26.5-18.8 32.3-4.9 80 13.3 106.3 8.9 13 19.5 27.3 33.5 26.8 13.3-.5 18.5-8.6 34.5-8.6 16.1 0 20.8 8.6 34.8 8.4 14.5-.3 23.6-13 32.5-26 10.1-14.8 14.3-29.1 14.5-29.9-.3-.3-28-10.9-28.3-42.9-.3-26.8 21.9-39.5 22.9-40.3-12.5-18.6-32-20.6-38.8-21.1m100.4-36.2v194.9h30.3v-66.6h41.9c38.3 0 65.1-26.3 65.1-64.3s-26.4-64-64.1-64h-73.2zm30.3 25.5h34.9c26.3 0 41.3 14 41.3 38.6s-15 38.8-41.4 38.8h-34.8V165zm162.2 170.9c19 0 36.6-9.6 44.6-24.9h.6v23.4h28v-97c0-28.1-22.5-46.3-57.1-46.3-32.1 0-55.9 18.4-56.8 43.6h27.3c2.3-12 13.4-19.9 28.6-19.9 18.5 0 28.9 8.6 28.9 24.5v10.8l-37.8 2.3c-35.1 2.1-54.1 16.5-54.1 41.5 .1 25.2 19.7 42 47.8 42zm8.2-23.1c-16.1 0-26.4-7.8-26.4-19.6 0-12.3 9.9-19.4 28.8-20.5l33.6-2.1v11c0 18.2-15.5 31.2-36 31.2zm102.5 74.6c29.5 0 43.4-11.3 55.5-45.4L640 193h-30.8l-35.6 115.1h-.6L537.4 193h-31.6L557 334.9l-2.8 8.6c-4.6 14.6-12.1 20.3-25.5 20.3-2.4 0-7-.3-8.9-.5v23.4c1.8 .4 9.3 .7 11.6 .7z"/></svg>
        </button> -->
      </div>

    </div>
  </div>
</div>

@includeWhen(
  $numbers->count() > 0,
  'table-pagination-bar',
  ['rows' => $numbers]
)

@endsection

@section('scripts')
<script type="text/javascript">
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
    showConfirmModal(
      country,
      fields[0].innerText,
      fields[3].innerText,
      fields[4].innerText,
      fields[1].innerText,
      fields[2].innerText,
    );
  }

  function showAddPaymentMethodForm() {
    document.getElementById('cards-list').classList.add('hidden');
    document.getElementById('add-paymet-method-form')
      .classList.remove('hidden');
  }

  function hideAddPaymentMethodForm() {
    document.getElementById('cards-list').classList.remove('hidden');
    document.getElementById('add-paymet-method-form')
      .classList.add('hidden');
  }

  function handlePurchase() {
    const form = document.getElementById('payment-form');
    const cardNumber = form.elements['card_number'].value;
    const cardExpiration = form.elements['card_expiration'].value;
    const securityCode = form.elements['security_code'].value;
    const cardholderName = form.elements['cardholder_name'].value;

    if (cardNumber && cardExpiration && securityCode && cardholderName) {
      console.log([cardNumber, cardExpiration, securityCode, cardholderName]);
    }
  }

</script>
@endsection
