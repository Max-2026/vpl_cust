@extends('master-layout')
@section('title', 'API & Integration')

@section('content')

<div class="w-full my-8 p-6 rounded-md shadow bg-white">
  <div class="flex justify-between items-center">
    <h3 class="px-1 text-lg leading-6 font-medium text-gray-900">
      API & Integration
    </h3>
  </div>
  <form action="" method="POST">
    @csrf
    <div class="mt-4 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-12">
      <div class="sm:col-span-6">
        <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number</label>
        <div class="mt-1">
          <select id="phone_number" name="phone_number" class="shadow-sm focus:ring-cyan-600 focus:border-cyan-600 block w-full sm:text-sm border-gray-300 rounded-md">
            <option selected disabled value="">Select Phone Number</option>
          </select>
        </div>
      </div>
      <div class="sm:col-span-6">
        <label for="webhook_url" class="block text-sm font-medium text-gray-700">Webhook URL</label>
        <div class="mt-1">
          <input type="url" id="webhook_url" name="webhook_url" class="shadow-sm focus:ring-cyan-600 focus:border-cyan-600 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="https://your-webhook-url.com">
        </div>
      </div>
      <div class="sm:col-span-6">
        <label for="secret_key" class="block text-sm font-medium text-gray-700">Secret Key</label>
        <div class="mt-1">
          <input type="text" id="secret_key" name="secret_key" class="shadow-sm focus:ring-cyan-600 focus:border-cyan-600 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Your secret key">
        </div>
      </div>
      <div class="sm:col-span-6">
        <label for="method" class="block text-sm font-medium text-gray-700">HTTP Method</label>
        <div class="mt-1">
          <select id="method" name="method" class="shadow-sm focus:ring-cyan-600 focus:border-cyan-600 block w-full sm:text-sm border-gray-300 rounded-md">
            <option value="POST">POST</option>
            <option value="GET">GET</option>
          </select>
        </div>
      </div>
      <div class="sm:col-span-12">
        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
        <div class="mt-1">
          <textarea id="description" name="description" rows="3" class="shadow-sm focus:ring-cyan-600 focus:border-cyan-600 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Describe your webhook purpose..."></textarea>
        </div>
      </div>
    </div>

    <div class="mt-4 flex flex-col sm:flex-row sm:col-span-12 gap-4 font-semibold">
      <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm rounded-md text-white bg-cyan-600 hover:bg-cyan-700 focus:outline-none focus:ring-0">
        Save Webhook
      </button>
    </div>
  </form>
</div>

<div class="w-full my-8 p-6 rounded-md shadow bg-white">
  <div class="flex justify-between items-center">
    <h3 class="px-1 text-lg leading-6 font-medium text-gray-900">
    API & Integration
    </h3>
  </div>
  <form action="" method="POST">
    @csrf
    <div class="mt-4 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-12">
      <div class="sm:col-span-4">
        <label for="webhook_route" class="block text-sm font-medium text-gray-700">Webhook Route</label>
        <div class="mt-1">
          <input type="text" name="webhook_route" id="webhook_route" class="shadow-sm focus:ring-cyan-600 focus:border-cyan-600 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="https://example.com/webhook-receive-sms" required>
        </div>
        <p class="text-xs text-gray-500 mt-2">Enter the URL where you'd like to receive incoming SMS notifications.</p>
      </div>
      <div class="sm:col-span-4">
        <label for="auth_token" class="block text-sm font-medium text-gray-700">Authentication Token</label>
        <div class="mt-1">
          <input type="text" name="auth_token" id="auth_token" class="shadow-sm focus:ring-cyan-600 focus:border-cyan-600 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Your Token" required>
        </div>
        <p class="text-xs text-gray-500 mt-2">Provide a token to authenticate incoming webhook requests.</p>
      </div>
      <div class="flex flex-col sm:flex-row sm:col-span-12 gap-4 font-semibold">
        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm rounded-md text-white bg-cyan-600 hover:bg-cyan-700 focus:outline-none focus:ring-0">
          Save Webhook
        </button>
      </div>
    </div>
  </form>
</div>

<div class="w-full my-8 p-6 rounded-md shadow bg-white">
  <div>
    <h3 class="text-lg leading-6 font-medium text-gray-900 ml-1 mb-1.25">Webhook Logs</h3>
  </div>
  <div class="mt-4 flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">

      @if (count($webhooks ?? []) > 0)
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                @foreach([
                  'ID',
                  'Date',
                  'Status',
                  'Webhook URL',
                ] as $header)
                <th scope="col" class="px-5 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">
                  {{ $header }}
                </th>
                @endforeach
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200 font-medium text-gray-600">
              @foreach($webhooks as $log)
              <tr>
                <td class="px-5 py-4 whitespace-nowrap">{{ $log->id }}</td>
                <td class="px-5 py-4 whitespace-nowrap">{{ $log->created_at->format('d-m-Y H:i') }}</td>
                <td class="px-5 py-4 whitespace-nowrap">{{ $log->status }}</td>
                <td class="px-5 py-4 whitespace-nowrap text-sm">{{ $log->webhook_url }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      @else
      <h2 class="w-full text-center text-xl">No Webhook Logs</h2>
      @endif

    </div>
  </div>
</div>

@includeWhen(
  count($webhooks ?? []) > 0,
  'table-pagination-bar',
  ['rows' => $webhooks]
)

@endsection
