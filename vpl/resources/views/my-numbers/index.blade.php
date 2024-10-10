@extends('master-layout')
@section('title', 'My Numbers')
@section('content')
<div class="w-full my-8 p-6 rounded-md shadow bg-white">
  <div>
    <h3 class="text-lg leading-6 font-medium text-gray-900 ml-1 mb-1.25">
      My Numbers
    </h3>
  </div>

  @if (count($history ?? []) > 0)
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
                  'Monthly Charges',
                  'Annual Charges',
                  'Per Minute Charges',
                  'Per SMS Charges',
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
            <tbody onclick="handleRowClick(event)" class="bg-white divide-y divide-gray-300">
              @foreach ($history as $row)

                @if ($row->activity == 'release_requested')
                  <tr class="bg-gray-200" title="This number will be released">
                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $row->number->number }}</td>

                    @if ($row->forwarding_url)
                      <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $row->forwarding_url }}</td>
                    @else
                      <td class="px-4 py-4 whitespace-nowrap text-right text-sm font-medium hover:cursor-pointer">
                        <a
                          data-number="{{ $row->number->number }}"
                          data-forwarding-url="{{ $row->forwarding_url }}"
                          class="bg-gray-400 text-white px-3 py-1 rounded hover:bg-gray-500"
                        >
                          Configure
                        </a>
                      </td>
                    @endif

                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ ucfirst($row->number->country->name) }}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">
                      @if ($row->number->is_active)
                        <span>Active</span>
                      @else
                        <span>Deactive</span>
                      @endif
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">
                      @if ($row->billing_type == "prorated")
                        {{
                          Carbon\Carbon::parse($row->created_at)
                            ->format("Y-m-t");
                        }}
                      @else
                        {{
                          Carbon\Carbon::parse($row->created_at)->addMonth()
                            ->format("Y-m-d");
                        }}
                      @endif
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">
                      {{
                        Carbon\Carbon::parse($row->created_at)->format("Y-m-d");
                      }}
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $row->number->monthly_charges }}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $row->number->annual_charges }}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $row->number->per_minute_charges }}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $row->number->per_sms_charges }}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $row->number->talktime_quota }}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $row->number->sms_quota }}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-right text-sm font-medium">
                      <a href="{{ route('number-logs', ['number_id' => $row->number->id]) }}" class="bg-cyan-600 text-white px-3 py-1 rounded hover:bg-cyan-700">View</a>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-right text-sm font-medium">
                      <p class="bg-gray-500 text-white text-center px-3 py-1 rounded">Deactive</p>
                    </td>
                  </tr>
                @else
                  <tr>
                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $row->number->number }}</td>

                    @if ($row->forwarding_url)
                      <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $row->forwarding_url }}</td>
                    @else
                      <td class="px-4 py-4 whitespace-nowrap text-right text-sm font-medium hover:cursor-pointer">
                        <a
                          data-number="{{ $row->number->number }}"
                          data-forwarding-url="{{ $row->forwarding_url }}"
                          class="bg-gray-400 text-white px-3 py-1 rounded hover:bg-gray-500"
                        >
                        Configure
                        </a>
                      </td>
                    @endif
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ ucfirst($row->number->country->name) }}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">
                      @if ($row->number->is_active)
                        <span>Active</span>
                      @else
                        <span>Deactive</span>
                      @endif
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">
                      @if ($row->billing_type == "prorated")
                        {{
                          Carbon\Carbon::parse($row->created_at)->format("Y-m-t");
                        }}
                      @else
                        {{
                          Carbon\Carbon::parse($row->created_at)->addMonth()
                            ->format("Y-m-d");
                        }}
                      @endif
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">
                      {{
                        Carbon\Carbon::parse($row->created_at)->format("Y-m-d");
                      }}
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $row->number->monthly_charges }}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $row->number->annual_charges }}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $row->number->per_minute_charges }}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $row->number->per_sms_charges }}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $row->number->talktime_quota }}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">{{ $row->number->sms_quota }}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-right text-sm font-medium">
                      <a href="{{ route('number-logs', ['number_id' => $row->number->id]) }}" class="bg-cyan-600 text-white px-3 py-1 rounded hover:bg-cyan-700">View</a>
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-right text-sm font-medium">
                      <a href="{{ route('release-number', ['number_id' => $row->number->id]) }}" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">Deactivate</a>
                    </td>
                  </tr>
                @endif
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  @else
  <h2 class="w-full text-center mt-4 text-xl">No Data</h2>
  @endif
</div>

<div id="configure-modal-wrapper" onclick="handleConfigureModalBlur(event)" class="fixed overflow-y-auto overflow-x-hidden sm:overflow-hidden z-10 inset-0 flex justify-center sm:items-center hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
  <div id="configure-modal-overlay" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity duration-1000 ease-in bg-opacity-0" aria-hidden="true"></div>
  <div id="configure-modal" class="absolute my-8 bg-white transition ease-in rounded-md p-4 z-10 w-11/12 max-w-lg sm:max-w-2xl lg:max-w-3xl scale-0">
    <h2 id="payment-details-heading" class="w-full px-3 text-2xl my-2 leading-6 font-medium text-gray-900">Configure your number</h2>
    <div class="w-full mt-2 px-2">
      <div class="flex justify-between items-center mb-6">
        <h3 id="configure-number-placeholder" class="text-lg mt-2 ml-1 leading-6 font-medium text-gray-700 text-left">
        </h3>
      </div>

      <div class="w-full grid grid-cols-12 gap-4">
        <div class="col-span-12 sm:col-span-2">
          <label for="forwarding-type" class="block text-sm font-medium text-gray-700">Type</label>
          <div class="mt-1">
            <select id="forwarding-type" name="forwarding-type" class="shadow-sm focus:ring-cyan-600 focus:border-cyan-600 block w-full sm:text-sm border-gray-300 rounded-md">
              <option value="pstn">PSTN</option>
              <option value="sip">SIP</option>
            </select>
          </div>
        </div>
        <div class="col-span-12 sm:col-span-10">
          <label for="forwarding_url" class="block text-sm font-medium text-gray-700">
            Forwarding
          </label>
          <div class="mt-1 flex rounded-md shadow-sm">
            <span id="configure-number-placeholder-2" class="inline-flex items-center px-3 rounded-l-md border border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
            </span>
            <span class="inline-flex items-center px-3 border border-r-0 border-l-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
              <svg class="w-5 h-5" data-slot="icon" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z" fill-rule="evenodd"></path>
              </svg>
            </span>
            <input type="text" name="forwarding_url" id="forwarding_url" autocomplete="forwarding_url" class="flex-1 focus:ring-cyan-600 focus:border-cyan-600 block w-full min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="toast" class="hidden">
  <span id="toast-message">Success message</span>
</div>

@includeWhen(
  $history->count() > 0,
  'table-pagination-bar',
  ['rows' => $history]
)

@endsection

@section('scripts')

<script>

  function showToast(message, type = 'success') {
    const toast = document.getElementById('toast');
    const toastMessage = document.getElementById('toast-message');

    toastMessage.textContent = message;

    toast.className = `fixed hidden scale-0 transition bottom-6 right-6 py-4 px-8 rounded shadow-md text-white font-semibold z-50 ${type === 'success' ? 'bg-green-600' : 'bg-red-600'}`;


    setTimeout(() => {
      toast.classList.remove('hidden');

      setTimeout(() => {
        toast.classList.remove('scale-0');
        toast.classList.add('scale-100');
      }, 10);
    }, 10);

    setTimeout(() => {
      toast.classList.remove('scale-100');
      toast.classList.add('scale-0');

      setTimeout(() => {
        toast.classList.add('hidden');
      }, 250);
    }, 3000);
  }

  function handleConfigureModalBlur(event) {
    const modal = document.getElementById('configure-modal');
    const isModalClicked = Boolean(event.composedPath().filter(
      (elem) => elem.id == 'configure-modal'
    ).length);

    if (!isModalClicked && !modal.classList.contains('scale-0')) {
      hideConfigureModal();
    }
  }

  function showConfigureModal(number) {
    const modalWrapper = document.getElementById('configure-modal-wrapper');
    const modalOverlay = document.getElementById('configure-modal-overlay');
    const modal = document.getElementById('configure-modal');
    const placeholder = document.getElementById('configure-number-placeholder');
    const placeholder2 = document.getElementById(
      'configure-number-placeholder-2'
    );
    const fwdUrlPlaceholder = document.getElementById('forwarding_url');
    placeholder.innerText = number;
    placeholder2.innerText = number;
    fwdUrlPlaceholder.innerText = 

    modalWrapper.classList.remove('hidden');
    setTimeout(() => {
      modal.classList.remove('scale-0');
      modalOverlay.classList.remove('bg-opacity-0');
    }, 100);
  }

  function hideConfigureModal() {
    const modalWrapper = document.getElementById('configure-modal-wrapper');
    const modalOverlay = document.getElementById('configure-modal-overlay');
    const modal = document.getElementById('configure-modal');

    modal.classList.add('scale-0');
    modalOverlay.classList.add('bg-opacity-0');
    setTimeout(() => {
      modalWrapper.classList.add('hidden');
    }, 200);
  }

  function handleRowClick(event) {
    const row = event.target.closest('tr');

    if (event.target.tagName == 'A') {
      const number = event.target.dataset.number;
      showConfigureModal(number);
    }
  }

</script>

@endsection
