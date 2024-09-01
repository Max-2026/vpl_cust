@extends('master-layout')
@section('title', 'My Numbers')
@section('content')
<div class="w-full my-8 p-6 rounded-md shadow bg-white">
  <div>
    <h3 class="text-lg leading-6 font-medium text-gray-900 ml-1 mb-1.25">My Numbers</h3>
  </div>
  <div class="mt-4 flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                @foreach(['Number', 'Country/Area', 'Forwarded To','Calling Plan', 'Number Status', 'Paid Till Date', 'Call Logs'] as $header)
                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">
                  {{ $header }}
                </th>
                @endforeach
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              <tr>
                <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-900">03111274799</td>
                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">PK - Karachi</td>
                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">163282323934</td>
                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">50 Incoming Minutes</td>
                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">Active Permanent</td>
                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">01-Sep-2024</td>
                <td class="px-4 py-4 whitespace-nowrap text-right text-sm font-medium">
                  <button class="bg-cyan-600 text-white px-3 py-1 rounded hover:bg-cyan-700">View</button>
                </td>
              </tr>
              <tr>
                <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-900">16352525236</td>
                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">PK - Karachi</td>
                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">923111274799</td>
                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">50 Incoming Minutes</td>
                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">Active Permanent</td>
                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">01-Sep-2024</td>
                <td class="px-4 py-4 whitespace-nowrap text-right text-sm font-medium">
                  <button class="bg-cyan-600 text-white px-3 py-1 rounded hover:bg-cyan-700">View</button>
                </td>
              </tr>
              <tr>
                <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-900">44352525236</td>
                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">UK - Atlanta</td>
                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">441112747995</td>
                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">50 Incoming Minutes</td>
                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">Active Permanent</td>
                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">01-Sep-2024</td>
                <td class="px-4 py-4 whitespace-nowrap text-right text-sm font-medium">
                  <button class="bg-cyan-600 text-white px-3 py-1 rounded hover:bg-cyan-700">View</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
