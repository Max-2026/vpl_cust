@extends('master-layout')
@section('title', 'Logs')
@section('content')
<div class="rounded-md overflow-hidden border-b border-gray-200">
  <table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-white">
      <tr>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Number</th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">From</th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Minutes Consumed</th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap"></th>
      </tr>
    </thead>
    <tbody onclick="">
      @foreach ($logs as $log)
      <tr class="even:bg-white odd:bg-gray-50">
        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
          {{ $log->number->number }}
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
          {{ $number->from_number }}
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
          ${{ $number->minutes_consumed }}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
