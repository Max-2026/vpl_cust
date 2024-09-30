@extends('master-layout')
@section('title', 'My Numbers')
@section('content')
<div class="w-full my-8 p-6 rounded-md shadow bg-white">
  <div>
    <h3 class="text-lg leading-6 font-medium text-gray-900 ml-1 mb-1.25">
      My Numbers
    </h3>
  </div>
  <div class="mt-4 flex flex-col">
    <div class="-my-2 overflow-x-auto scroll-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                @foreach([
                  'Number',
                  'Forwarded To',
                  'Country',
                  'Number Status',
                  'Paid Till Date',
                  'Purchased Date',
                  'TalkTime Remaining',
                  'SMS Remaining',
                  'Call Logs',
                  ''
                ] as $header)
                  <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">
                    {{ $header }}
                  </th>
                @endforeach
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              @foreach ($numbers as $number)
                <tr>
                  <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $number->number }}</td>
                  <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $number->history[0]->forwarding_url ?? '' }}</td>
                  <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $number->country->name }}</td>
                  <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">
                    @if ($number->is_active == 1)
                      <span>Active</span>
                    @else
                      <span>Deactive</span>
                    @endif
                  </td>
                  <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">
                    @if ($number->history[0]->created_at == "prorated")
                      {{
                        Carbon\Carbon::parse($number->history[0]->created_at)
                          ->format("Y-m-t");
                      }}
                    @else
                      {{
                        Carbon\Carbon::parse($number->history[0]->created_at)
                          ->addMonth()->format("Y-m-d");
                      }}
                    @endif
                  </td>
                  <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">
                    {{
                      Carbon\Carbon::parse($number->history[0]->created_at)
                        ->format("Y-m-d");
                    }}
                  </td>
                  <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $number->talktime_quota }}</td>
                  <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $number->sms_quota }}</td>
                  <td class="px-4 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <a href="{{ route('number-logs', ['number_id' => $number->id]) }}" class="bg-cyan-600 text-white px-3 py-1 rounded hover:bg-cyan-700">View</a>
                  </td>
                  <td class="px-4 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <a href="{{ route('release-number', ['number_id' => $number->id]) }}" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">Deactivate</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
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
