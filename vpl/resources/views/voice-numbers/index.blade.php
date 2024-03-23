@extends('master-layout')
@section('title', 'Voice Numbers')
@section('content')
<!-- <div class="w-full sm:w-9/12 lg:w-6/12 xl:w-4/12 my-8 py-4 px-4 rounded-md shadow bg-white"> -->
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
            <tr class="even:bg-white odd:bg-gray-50" data-number="{{ $number['number'] }}">
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
                <a href="#" class="bg-cyan-600 text-white px-3 py-1 rounded hover:bg-cyan-700">Buy</a>
              </td>
            </tr>
            @endforeach

          </tbody>
        </table>
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

  if (event.target.tagName == 'INPUT') return;

  const row = event.target.closest('tr');
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

</script>
@endsection
