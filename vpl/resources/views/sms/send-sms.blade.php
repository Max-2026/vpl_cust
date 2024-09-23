@extends('master-layout')
@section('title', 'My Numbers')

@section('content')

<div class="w-full my-8 p-6 rounded-md shadow bg-white">
    <div class="flex justify-between items-center">
        <h3 class="px-1 text-lg leading-6 font-medium text-gray-900">Send SMS</h3>
    </div>
    <form action="{{ route('send-message') }}" method="post">
        @csrf
        <div class="mt-4 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-12">
            <div class="sm:col-span-4">
                <label for="number" class="block text-sm font-medium text-gray-700">Numbers</label>
                <div class="mt-1">
                    <select name="number" id="number"
                        class="shadow-sm focus:ring-cyan-600 focus:border-cyan-600 block w-full sm:text-sm border-gray-300 rounded-md"
                        required>
                        <option value="" disabled selected>Please Select One Number</option>
                        @foreach($numbers as $number)
                        <option value="{{ $number->number }}">{{ $number->number }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="sm:col-span-4">
                <label for="send_number" class="block text-sm font-medium text-gray-700">Send Number</label>
                <div class="mt-1">
                    <input type="text"
                        class="shadow-sm focus:ring-cyan-600 focus:border-cyan-600 block w-full sm:text-sm border-gray-300 rounded-md"
                        name="send_number" placeholder="+16943232322" required>
                </div>
            </div>

            <div class="sm:col-span-12">
                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                <div class="mt-1">
                    <textarea name="message" id="message" rows="4"
                        class="shadow-sm focus:ring-cyan-600 focus:border-cyan-600 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                </div>
            </div>


            <div class="mt-5 px-1 sm:col-span-12 flex justify-between">
                <button type="submit"
                    class="inline-flex py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-700 focus:outline-none focus:ring-0">Send</button>
                <p
                    class="inline-flex py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-700 focus:outline-none focus:ring-0">
                    Balance: &nbsp; ${{ $user->balance }}.00</p>
            </div>
        </div>
    </form>
</div>

<!-- Modal -->
@if(session('error'))
<div id="errorModal" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog"
    aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div
            class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
            <div class="sm:flex sm:items-start">
                <div
                    class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                    <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m2 0a7 7 0 10-14 0 7 7 0 1014 0z" />
                    </svg>
                </div>
                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Insufficient Balance</h3>
                    <div class="mt-2">
                        <p class="text-sm text-gray-500">{{ session('error') }}</p>
                    </div>
                </div>
            </div>
            <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
                <button type="button" onclick="closeModal()"
                    class="inline-flex justify-center w-full rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-0 sm:ml-3 sm:w-auto sm:text-sm">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>
@endif


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
                                @foreach(['S.No.', 'Number', 'From', 'Date/Time','Message', 'Charged Amount', 'Action']
                                as $header)
                                <th scope="col"
                                    class="px-5 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">
                                    {{ $header }}
                                </th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php
                          $serial_number = 0;
                          $total_charges = 0;
                          ?>
                            @foreach($messages as $message)
                            <?php 
                          $serial_number ++;
                          $total_charges += $message->charges; 
                           ?>
                            <tr>
                                <td class="px-5 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    {{ $loop->iteration }}</td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm  text-gray-500">{{ $message->number}}
                                </td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $message->received_number}}</td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500">{{ $message->date_time}}
                                </td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500">{{ $message->content}}
                                </td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500">${{ $message->charges}}
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button
                                        class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr style="border-bottom: 1px solid #e5e7eb;">
                                <td colspan="5" class="px-5 py-4 whitespace-nowrap text-sm text-gray-500">All the SMS
                                    charges are deducted from talk time.</td>
                                <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500"><b>Total Charges:
                                        ${{$total_charges}}.00</b></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
  function closeModal() {
      document.getElementById('errorModal').style.display = 'none';
  }
</script>

@endsection