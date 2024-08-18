@extends('master-layout')
@section('title', 'My Numbers')

@section('content')

<div class="w-full my-8 p-6 rounded-md shadow bg-white">
  <div class="flex justify-between items-center">
    <h3 class="px-1 text-lg leading-6 font-medium text-gray-900">Send SMS</h3>
  </div>
  <form action="" method="GET">
    <div class="mt-4 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-12">
      <div class="sm:col-span-4">
        <label for="number" class="block text-sm font-medium text-gray-700">Number</label>
        <div class="mt-1">
          <input type="text" name="number" id="number" class="shadow-sm focus:ring-cyan-600 focus:border-cyan-600 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="+16353633672">
        </div>
      </div>

      <div class="sm:col-span-8"></div>

      <div class="sm:col-span-12">
        <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
        <div class="mt-1">
          <textarea name="message" id="message" rows="4" class="shadow-sm focus:ring-cyan-600 focus:border-cyan-600 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
        </div>
      </div>

      <div class=" px-1 sm:col-span-12 flex justify-between">
        <button type="submit" class="inline-flex py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-700 focus:outline-none focus:ring-0">Send</button>
        <p class="inline-flex py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-700 focus:outline-none focus:ring-0" >Talk Time Balance: &nbsp; $50</p>
        <!-- <button type="button" >Cancel</button> -->
      </div>
    </div>
  </form>
</div>





<div class="w-full my-8 p-6 rounded-md shadow bg-white">
    <div>
        <h3 class="text-lg leading-6 font-medium text-gray-900 ml-1 mb-1.25">Send Items</h3>
    </div>
    <div class="mt-4 flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                @foreach(['S.No.', 'Number', 'From', 'Date/Time','Message', 'Charged Amount', 'Action'] as $header)
                                    <th scope="col" class="px-5 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">
                                        {{ $header }}
                                    </th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-5 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm  text-gray-500">10056004434</td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500">Dialify.com</td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500">21-May-2024</td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500">Testing message	</td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500">$1.00</td>
                                <td class="px-4 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-5 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2</td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm  text-gray-500">10056004544</td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500">Dialify.com</td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500">21-May-2024</td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500">Testing Again</td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500">$1.00</td>
                                <td class="px-4 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr style="border-bottom: 1px solid #e5e7eb;">
                                <td colspan="5" class="px-5 py-4 whitespace-nowrap text-sm text-gray-500">All the SMS charges are deducted from talk time.</td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500"><b>Total This Page: $2.00</b></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
