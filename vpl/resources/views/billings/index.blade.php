@extends('master-layout')
@section('title', 'My Numbers')

@section('content')

<div class="w-full my-8 p-6 rounded-md shadow bg-white">
  <div class="flex justify-between items-center">
   <h3 class="px-1 text-lg leading-6 font-medium text-gray-900">Billings</h3>
    <span class="text-sm mr-3 font-medium text-gray-500">ID: 1234445</span>
  </div>
  <form action="" method="GET">
    <div class="mt-4 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-12">

      <div class="sm:col-span-4">
        <label for="bill-type-1" class=" px-1 block text-sm font-medium text-gray-700">Bill Type</label>
        <div class="mt-1">
          <select id="bill-type-1" name="bill-type-1" class="shadow-sm focus:ring-cyan-600 focus:border-cyan-600 block w-full sm:text-sm border-gray-300 rounded-md">
            <option selected value="1234">All Bills</option>
            <option value="1">All Payments</option>
            <option value="1234">All Bills Of My Number</option>
          </select>
        </div>
      </div>

      <div class="sm:col-span-4">
        <label for="bill-type-2" class="block text-sm font-medium text-gray-700">Numbers</label>
        <div class="mt-1">
          <select id="bill-type-2" name="bill-type-2" class="shadow-sm focus:ring-cyan-600 focus:border-cyan-600 block w-full sm:text-sm border-gray-300 rounded-md">
            <option selected value="1234">All Numbers</option>
            <option value="1">1636723238238</option>
            <option value="1">4456655335344</option>
            <option value="1">1636723245454</option>
          </select>
        </div>
      </div>

      <div class="sm:col-span-4">
        <label for="bill-type-3" class="block text-sm font-medium text-gray-700">Date</label>
        <div class="mt-1">
            <input type="date" class="shadow-sm focus:ring-cyan-600 focus:border-cyan-600 block w-full sm:text-sm border-gray-300 rounded-md" name="" id="">
        </div>
      </div>

      <div class="flex justify-end sm:col-span-12">
        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-700 focus:outline-none focus:ring-0">Search</button>
      </div>
    </div>
  </form>
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
                                @foreach(['Invoice', 'Date', 'Description', 'Debit','Credit', 'Running Balance', 'Paid'] as $header)
                                    <th scope="col" class="px-5 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">
                                        {{ $header }}
                                    </th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-5 py-4 whitespace-nowrap text-sm font-medium text-gray-900">100560044</td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm  text-gray-500">21-May-2024</td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500">Decline: Due not cleared. VPLC100560044</td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500">$0.00</td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500">$0.00</td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500">$40.00</td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500">-</td>
                            </tr>
                            <tr>
                                <td class="px-5 py-4 whitespace-nowrap text-sm font-medium text-gray-900">100560044</td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm  text-gray-500">22-May-2024	</td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500">Payment Received - Thank you.</td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500">$10.00</td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500">-</td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500">$40.00</td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500">-</td>
                            </tr>
                            <tr>
                                <td class="px-5 py-4 whitespace-nowrap text-sm font-medium text-gray-900">100560044</td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm  text-gray-500">29-May-2024</td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500">Decline: Due not cleared. VPLC100560044</td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500">$0.00</td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500">$0.00</td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500">$40.00</td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500">-</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr style="border-bottom: 1px solid #e5e7eb;">
                                <td colspan="3" class="px-5 py-4 whitespace-nowrap text-sm text-gray-500 text-right"></td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500"><b>$10.00</b></td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500"><b>$0.00</b></td>
                            </tr>
                            <tr style="border-bottom: 1px solid #e5e7eb;">
                                <td colspan="3" class="px-5 py-4 whitespace-nowrap text-sm text-gray-500 text-right"><b>Overall Total</b></td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500"><b>$80.00</b></td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500"><b>$76.40</b></td>
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
