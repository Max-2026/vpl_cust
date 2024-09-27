@extends('master-layout')
@section('title', 'Logs')
@section('content')
<div class="rounded-md overflow-hidden border-b border-gray-200">
  <table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-white">
      <tr>
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
    <tbody onclick="">
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
@endsection
